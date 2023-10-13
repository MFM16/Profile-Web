@extends('template.main')

@section('content')
    <div class="w-full my-12 text-lg text-primary lg:h-screen lg:my-0">
        <h1 class="text-3xl font-bold md:text-4xl lg:text-5xl">
            {{ $user->profile->name }}
        </h1>
        <p class="mt-2 text-lg font-semibold md:text-xl">{{ $user->profile->job }}</p>
        <p class="mt-1 text-sm font-medium text-slate-400 md:text-base lg:mt-3">{{ $user->profile->job_des }}</p>

        <div class="w-full flex mt-5 flex-row gap-3 lg:mt-10">
            <a href="#" class="text-slate-400 hover:text-primary">
                <svg class="w-5 fill-current md:w-6 lg:w-7" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                    <path
                        d="M23,0H9C4,0,0,4,0,9v14c0,5,4,9,9,9h14c5,0,9-4,9-9V9C32,4,28,0,23,0z M12,25c0,0.6-0.4,1-1,1H7c-0.6,0-1-0.4-1-1V13
                    c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1V25z M9,11c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S10.7,11,9,11z M26,25c0,0.6-0.4,1-1,1h-3
                    c-0.6,0-1-0.4-1-1v-3.5v-1v-2c0-0.8-0.7-1.5-1.5-1.5S18,17.7,18,18.5v2v1V25c0,0.6-0.4,1-1,1h-3c-0.6,0-1-0.4-1-1V13
                    c0-0.6,0.4-1,1-1h4c0.3,0,0.5,0.1,0.7,0.3c0.6-0.2,1.2-0.3,1.8-0.3c3,0,5.5,2.5,5.5,5.5V25z" />
                </svg>
            </a>
            <a href="#" class="text-slate-400 hover:text-primary">
                <svg class="w-5 fill-current md:w-6 lg:w-7" viewBox="0 0 20 20" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                            class="fill-current">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path
                                    d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                    id="github-[#142]">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="w-full font-primary text-primary lg:h-screen lg:overflow-auto no-scrollbar">
        <div class="w-full mb-8">
            <h1 class="text-lg font-semibold md:text-xl">About</h1>
            <p class="mt-1 text-sm font-medium text-slate-400 md:text-base">
                {{ $user->profile->about_me }}
            </p>
        </div>
        <div class="w-full">
            <h1 class="text-lg font-semibold md:text-xl">Experiance</h1>
            @foreach ($user->experiances as $experiance)
                <div class="w-full flex flex-col items-start md:flex-row gap-2">
                    <div class="text-slate-400 mt-8 text-xs font-semibold w-full md:w-1/4 md:mt-3 md:text-sm lg:w-1/2">
                        {{ $experiance->duration_of_work }}
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col gap-0 mt-2">
                            @if ($experiance->link != null)
                                <a href="{{ $experiance->link }}"
                                    class="text-base font-semibold group hover:text-emerald-400 md:text-lg">
                                    {{ $experiance->position }} . {{ $experiance->place }}
                                    <i
                                        class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i>
                                </a>
                            @else
                                <p class="text-base font-semibold md:text-lg">
                                    {{ $experiance->position }} . {{ $experiance->place }}
                                </p>
                            @endif
                            <h5 class="text-slate-400 text-xs md:text-sm">{{ $experiance->job }}</h5>
                            <h5 class="text-slate-400 text-xs md:text-sm">{{ $experiance->position }}</h5>
                        </div>
                        <p class="text-sm text-slate-500 mt-2 md:text-base">
                            {{ $experiance->job_desc }}
                        </p>
                        <div class="flex flex-wrap gap-1 mt-3 items-center">
                            @foreach ($experiance->technologies as $item)
                                <div class="bg-emerald-100 font-semibold pb-[2px] text-xs px-2 rounded-full md:text-sm">
                                    <span class="text-emerald-500">{{ $item->technology->name }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-5 flex items-center font-semibold">
                <a href="http://" class="group hover:underline hover:underline-offset-4 md:text-xl">View Full Resume <i
                        class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i></a>
            </div>
        </div>
        <div class="w-full mt-14">
            <h1 class="text-lg font-semibold md:text-xl">Projects</h1>

            @foreach ($user->portfolios as $portfolio)
                <div class="mt-5 md:hidden">
                    <a href="#"
                        class="text-base font-semibold group hover:text-emerald-400 md:text-lg">{{ $portfolio->project_name }}
                        <i class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i>
                    </a>
                </div>
                <div class="w-full flex flex-col md:flex-row gap-2 md:mt-5 lg:gap-5">
                    <div class="w-full mt-3 rounded-md md:w-1/4 lg:w-1/2 md:mt-2">
                        <img class="w-52 rounded-md md:w-56 lg:w-64" src="{{ asset($portfolio->project_image) }}"
                            alt="">
                    </div>
                    <div class="w-full">
                        <a href="{{ $portfolio->project_link }}"
                            class="hidden text-base font-semibold group hover:text-emerald-400 md:text-lg md:block">{{ $portfolio->project_name }}
                            <i class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i>
                        </a>
                        <p class="text-sm text-slate-500 mt-2 md:text-base">
                            {{ $portfolio->project_desc }}
                        </p>
                        <div class="flex flex-wrap gap-1 mt-3 items-center">
                            @foreach ($portfolio->technologies as $item)
                                <div class="bg-emerald-100 font-semibold pb-[2px] text-xs px-2 rounded-full md:text-sm">
                                    <span class="text-emerald-500">{{ $item->technology->name }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-5 flex items-center font-semibold md:text-xl">
                <a href="{{ route('project_archive') }}" class="group hover:underline hover:underline-offset-4">View Full
                    Project Archive <i
                        class="fas fa-arrow-right ml-1 transition duration-500 group-hover:translate-x-3"></i></a>
            </div>
        </div>
        <div class="mt-10 text-slate-500 text-sm md:text-base lg:mb-5 lg:pb-16">
        </div>
    </div>
@endsection
