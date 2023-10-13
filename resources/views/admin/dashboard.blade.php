@extends('template.admin')

@section('content')
    <a href="{{ route('project.create') }}"
        class="bg-purple-600 px-3 py-2 rounded-lg font-semibold text-white w-[10%] text-center">Add Project</a>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                        <th class="px-4 py-3">No. </th>
                        <th class="px-4 py-3">Project name</th>
                        <th class="px-4 py-3">Build with</th>
                        <th class="px-4 py-3">link</th>
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
                                <a class="hover:text-emerald-500 hover:underline hover:underline-offset-8"
                                    href="{{ $project->project_link }}">{{ $project->project_name }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $projects->links() }}
            </table>
        </div>
    </div>
@endsection
