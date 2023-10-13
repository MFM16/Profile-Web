@extends('template.main')

@section('content')
    <div class="w-full mt-6">
        <a href="{{ route('home') }}" class="text-base font-semibold group text-primary md:text-lg">
            <i class="fas fa-arrow-left ml-1 transition duration-500 group-hover:-translate-x-3"></i>
            Farhan Maulidian
        </a>
        <h2 class="text-slate-500 text-3xl font-bold md:text-4xl">
            All Projects
        </h2>

        <div class="w-full mt-5 md:mt-10">
            <table class="w-full">
                <thead class="text-left text-primary ">
                    <th class="pr-2 text-base md:text-xl">Year</th>
                    <th class="px-2 text-base md:text-xl">Projects</th>
                    <th class="px-2 text-base md:text-xl hidden lg:table-cell
                    ">Build with</th>
                    <th class="px-2 text-base md:text-xl hidden md:table-cell
                    ">Link</th>
                </thead>
                <tbody class="text-left">
                    @forelse ($projects as $project)
                        <tr class="border-b-2 border-slate-300">
                            <td class="pr-2 py-2 text-slate-500 text-sm md:text-base max-w-[10rem]">
                                {{ $project->project_year }}</td>
                            <td class="px-2 py-2 group text-primary text-sm md:text-base md:hidden">
                                <a href="{{ $project->project_link }}"><strong>{{ $project->project_name }}</strong><i
                                        class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i></a>
                            </td>
                            <td class="hidden px-2 py-2 group text-primary text-sm md:text-base md:table-cell">
                                <strong>{{ $project->project_name }}</strong>
                            </td>
                            <td class="hidden px-2 py-2 group text-primary text-sm md:text-base lg:table-cell max-w-xs">
                                <div class="flex flex-wrap gap-1 items-center">
                                    @foreach ($project->technologies as $item)
                                        <div class="bg-emerald-100 font-semibold pb-[2px] text-base px-2 rounded-full">
                                            <span class="text-emerald-500">{{ $item->technology->name }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                            <td class="hidden px-2 py-2 group text-primary text-sm md:text-base md:table-cell">
                                <a href="{{ $project->project_link }}">{{ $project->project_name }}<i
                                        class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i></a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
