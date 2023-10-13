@extends('template.admin')

@section('content')
    <a href="{{ route('project.create') }}"
        class="bg-purple-600 px-3 py-2 rounded-lg font-semibold text-white md:w-[10%] w-1/2 text-center">Add Project</a>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                        <th class="px-4 py-3">No. </th>
                        <th class="px-4 py-3">Project name</th>
                        <th class="px-4 py-3">Build with</th>
                        <th class="px-4 py-3">link</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach ($projects as $project)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->project_name }}
                            </td>
                            <td class="px-4 py-3 text-sm flex flex-row gap-1 items-center">
                                @foreach ($project->technologies as $item)
                                    <div class="bg-emerald-100 font-semibold pb-[2px] text-base px-2 rounded-full">
                                        <span class="text-emerald-500">{{ $item->technology->name }}</span> &nbsp;
                                    </div>
                                @endforeach
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a class="no-underline hover:text-emerald-500 hover:underline hover:underline-offset-8"
                                    href="{{ $project->project_link }}">{{ $project->project_name }}</a>
                            </td>
                            <td class="px-4 py-3 text-sm flex flex-row gap-1 items-center">
                                <button class="px-2 py-2 rounded-md text-white bg-red-500 font-semibold hover:bg-red-600"
                                    id="button_delete" data-id="{{ $project->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $projects->links() }}
            </table>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        $(document).delegate('#button_delete', 'click', function() {
            const id = $(this).data('id')
            let url = '{{ url('admin/project/delete') }}'
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `${url}/${id}`,
                        type: 'DELETE',
                        success: (response) => {
                            if (response.status == 'success') {
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success'
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload()
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Failed',
                                    response.message,
                                    'error'
                                )
                            }
                        }
                    })
                }
            })
        })
    </script>
@endpush
