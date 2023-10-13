<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            Windmill
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if ($page == 'Dashboard')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('dashboard') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if ($page == 'Project')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('project') }}">
                    <svg fill="#000000" class="w-5 h-5" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M1,5H5V1H1Zm0,6H5V7H1Zm6,0h4V7H7ZM7,1V5h4V1Z" />
                        </g>
                    </svg>
                    <span class="ml-4">Project</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if ($page == 'Tech Stack')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('tech') }}">
                    <svg class="w-5 h-5" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #000000;
                            }
                        </style>
                        <g>
                            <path class="st0"
                                d="M510.168,392.022l-45.594-57.326V93.611c0-11.662-9.458-21.12-21.12-21.12H68.546
		c-11.662,0-21.115,9.458-21.115,21.12v241.085L1.837,392.022C0.648,393.517,0,395.367,0,397.287v25.373
		c0,9.311,7.542,16.849,16.849,16.849h478.302c9.31,0,16.849-7.538,16.849-16.849v-25.373
		C512,395.367,511.36,393.517,510.168,392.022z M77.226,102.291h357.548v202.606H77.226V102.291z M304.121,419.47h-96.242v-25.478
		h96.242V419.47z" />
                            <path class="st0"
                                d="M204.404,167.431c-0.117,0-0.225,0.036-0.31,0.096l-57.525,39.266c-0.152,0.112-0.242,0.277-0.242,0.467
		v10.556c0,0.189,0.09,0.363,0.242,0.458l57.525,39.266c0.086,0.069,0.194,0.104,0.31,0.104c0.087,0,0.177-0.026,0.255-0.069
		c0.181-0.096,0.298-0.286,0.298-0.493v-16.824c0-0.172-0.09-0.354-0.242-0.458l-39.94-27.267l39.94-27.258
		c0.152-0.112,0.242-0.277,0.242-0.467v-16.815c0-0.207-0.117-0.406-0.298-0.492C204.581,167.449,204.49,167.431,204.404,167.431z" />
                            <path class="st0"
                                d="M306.07,167.527c-0.091-0.06-0.195-0.096-0.312-0.096c-0.09,0-0.177,0.018-0.259,0.07
		c-0.177,0.086-0.294,0.285-0.294,0.492v16.824c0,0.182,0.091,0.355,0.242,0.458l39.94,27.258l-39.94,27.267
		c-0.151,0.104-0.242,0.285-0.242,0.466v16.815c0,0.207,0.117,0.397,0.294,0.493c0.082,0.043,0.169,0.069,0.259,0.069
		c0.117,0,0.22-0.034,0.312-0.104l57.52-39.266c0.164-0.095,0.25-0.268,0.25-0.458v-10.556c0-0.19-0.086-0.355-0.25-0.467
		L306.07,167.527z" />
                            <path class="st0"
                                d="M281.375,158.224h-16.08c-0.237,0-0.449,0.147-0.522,0.372L228.26,264.473
		c-0.056,0.164-0.026,0.354,0.074,0.492c0.109,0.147,0.277,0.242,0.454,0.242h16.08c0.238,0,0.45-0.156,0.523-0.38l36.508-105.859
		c0.061-0.172,0.03-0.363-0.069-0.51C281.721,158.311,281.553,158.224,281.375,158.224z" />
                        </g>
                    </svg>
                    <span class="ml-4">Tech Stack</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                @if ($page == 'Experiance')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('experiance') }}">
                    <svg fill="#000000" class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.108,20H4a1,1,0,0,0,0,2H20a1,1,0,0,0,0-2H17.892c-.247-2.774-1.071-7.61-3.826-9,2.564-1.423,3.453-4.81,3.764-7H20a1,1,0,0,0,0-2H4A1,1,0,0,0,4,4H6.17c.311,2.19,1.2,5.577,3.764,7C7.179,12.39,6.355,17.226,6.108,20ZM9,16.6c0-1.2,3-3.6,3-3.6s3,2.4,3,3.6V20H9Z" />
                    </svg>
                    <span class="ml-4">Experiance</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if ($page == 'Social Media')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('social') }}">
                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class="w-5 h-5" viewBox="0 0 76.609 76.609"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M57.455,16.575c0,1.12,1.121,2.24,2.688,2.24c2.239,0,2.911-0.896,2.911-2.24c0-0.224,0-0.224,0-0.447
			c-0.223-0.672-0.896-1.12-1.566-1.568c-0.225,0-0.672-0.224-1.119-0.224C58.799,14.337,57.455,15.232,57.455,16.575z" />
                                <path
                                    d="M62.16,9.183c-0.226-1.344-1.121-2.464-2.24-2.464c-1.121,0-1.793,1.12-1.567,2.464c0.226,1.344,1.119,2.464,2.239,2.464
			C61.488,11.647,62.383,10.527,62.16,9.183z" />
                                <path
                                    d="M52.08,25.983l3.808-3.808c2.239,1.792,4.93,2.912,7.841,2.912c6.943,0,12.544-5.601,12.544-12.544
			C76.271,5.599,70.672,0,63.728,0c-6.942,0-12.544,5.6-12.544,12.544c0,3.136,1.119,5.823,2.912,7.84l-3.809,3.809
			C50.959,24.864,51.631,25.537,52.08,25.983z M65.744,8.511h2.463V6.048h0.896v2.464h2.465v0.896h-2.465v2.465h-0.896V9.407h-2.463
			V8.511L65.744,8.511z M60.144,12.767c0-0.224,0-0.448,0.226-0.672c-0.226,0-0.226,0-0.447,0c-1.793,0-3.137-1.344-3.137-2.912
			s1.791-2.912,3.584-2.912H64.4l-0.896,0.672H62.16c0.896,0.225,1.344,1.345,1.344,2.464c0,0.896-0.448,1.568-1.121,2.24
			c-0.672,0.448-0.896,0.672-0.896,1.12c0,0.448,0.673,1.12,1.12,1.344c1.119,0.672,1.344,1.568,1.344,2.688
			c0,1.567-1.344,2.912-4.031,2.912c-2.239,0-4.256-0.896-4.256-2.464s1.791-2.912,4.031-2.912c0.225,0,0.447,0,0.672,0
			C60.367,13.664,60.144,13.216,60.144,12.767z" />
                                <path
                                    d="M63.728,51.52c-2.911,0-5.823,1.119-7.841,2.912l-3.807-3.809c-0.449,0.672-1.121,1.118-1.568,1.566l3.809,3.809
			c-1.792,2.238-2.912,4.929-2.912,7.841c0,6.943,5.602,12.544,12.545,12.544c6.942,0,12.545-5.601,12.545-12.544
			C76.271,56.895,70.672,51.52,63.728,51.52z M60.144,69.664H57.68v-7.841h2.464V69.664z M59.024,60.705L59.024,60.705
			c-0.896,0-1.567-0.673-1.567-1.346c0-0.672,0.672-1.344,1.567-1.344s1.567,0.672,1.567,1.344
			C60.367,60.256,59.92,60.705,59.024,60.705z M70.224,69.664h-2.912v-4.031c0-1.119-0.447-1.792-1.345-1.792
			c-0.672,0-1.119,0.448-1.344,0.896c0,0.227,0,0.449,0,0.673v4.257h-2.688c0,0,0-7.168,0-7.841h2.688v1.12
			c0.225-0.447,1.121-1.344,2.465-1.344c1.791,0,3.136,1.119,3.136,3.584V69.664L70.224,69.664z" />
                                <path
                                    d="M24.304,50.625l-3.808,3.809c-2.24-1.793-4.928-2.912-7.84-2.912c-6.944,0-12.544,5.602-12.544,12.543
			c0,6.944,5.6,12.545,12.544,12.545c6.943,0,12.544-5.601,12.544-12.545c0-2.912-1.12-5.823-2.912-7.84l3.808-3.809
			C25.424,51.743,24.752,51.07,24.304,50.625z M18.033,62.048c0,3.808-2.912,8.063-8.064,8.063c-1.567,0-3.136-0.448-4.256-1.346
			c0.224,0,0.448,0,0.672,0c1.344,0,2.464-0.447,3.584-1.119c-1.12,0-2.24-0.896-2.688-2.017c0.224,0,0.447,0,0.447,0
			c0.225,0,0.448,0,0.673,0c-1.345-0.226-2.24-1.344-2.24-2.688l0,0c0.448,0.225,0.896,0.447,1.344,0.447
			c-0.672-0.447-1.344-1.344-1.344-2.24c0-0.446,0.224-0.896,0.448-1.344c1.344,1.793,3.359,2.912,5.823,2.912
			c0-0.226,0-0.447,0-0.672c0-1.568,1.345-2.912,2.912-2.912c0.896,0,1.568,0.447,2.017,0.896c0.672-0.225,1.344-0.448,1.792-0.672
			c-0.225,0.672-0.673,1.119-1.345,1.566c0.672,0,1.12-0.225,1.568-0.447c-0.448,0.672-0.896,1.119-1.344,1.344
			C18.033,61.823,18.033,61.823,18.033,62.048z" />
                                <path
                                    d="M12.656,25.088c2.912,0,5.823-1.12,7.84-2.912l3.808,3.808c0.448-0.672,1.12-1.119,1.568-1.567l-3.809-3.808
			c1.792-2.24,2.912-4.928,2.912-7.84c0-6.944-5.6-12.544-12.544-12.544c-6.943,0-12.319,5.6-12.319,12.544
			C0.112,19.487,5.712,25.088,12.656,25.088z M9.744,10.527h1.344V9.183c0-1.792,0.672-2.912,2.912-2.912h1.792v2.24h-1.12
			c-0.896,0-0.896,0.224-0.896,0.896v1.12h2.016l-0.224,2.24H13.55v6.272h-2.688v-6.272H9.519v-2.24H9.744z" />
                                <g>
                                    <path
                                        d="M49.617,44.575c-0.226-0.446-0.673-0.673-0.896-0.673c-2.016-0.672-3.807-1.118-5.823-1.791
				c-0.224,0-0.672-0.447-0.672-1.344c0-0.449,0-0.673-0.447-0.673c-0.226,0,0,0-0.226-0.224c-0.223-0.896-0.223-1.345-0.223-1.568
				c0-0.223,0.223-0.225,0.223-0.448c0.673-0.896,0.896-2.239,0.896-2.688c0,0,0.225,0,0.225-0.225
				c0.224-0.448,0.224-0.448,0.224-1.121c0.226-0.446,0.226-1.118-0.224-1.118c-0.225,0.224-0.225,0-0.225-0.448v-2.688
				c0-0.896-0.673-1.567-1.119-1.791c-0.674-0.449-0.896-0.673-1.121-0.673c-0.225-0.224-0.225-0.448,0-0.672
				c0.224-0.223,0.447-0.223,0.447-0.448c0,0,0,0-0.225,0s-1.567,0.226-2.239,0.448c-1.12,0.224-2.24,0.672-3.137,1.345
				c-0.672,0.447-1.12,1.119-1.12,2.017c0,0.446,0,1.791,0,2.688c0,0.226,0,0.448-0.224,0.226c-0.672,0-0.224,0.896-0.224,1.118
				c0,0.448,0.224,0.673,0.447,1.121c0,0.225,0.225,0.225,0.225,0.225c0.224,0.672,0.448,2.016,0.896,2.688
				c0,0,0.225,0.225,0.225,0.448c0,0.448,0,1.12-0.225,1.568c0,0,0,0.225-0.224,0.225c-0.448,0-0.448,0.224-0.448,0.672
				c0,0.672-0.448,1.345-0.672,1.345c-1.12,0.446-4.479,1.567-5.6,1.791c-0.672,0.226-0.896,0.448-1.12,0.672l-1.12,2.688
				c4.479,0,6.72,2.688,11.424,3.584h2.24c4.704-0.672,8.063-3.584,11.2-3.584L49.617,44.575z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-4">Social Media</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            Windmill
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if ($page == 'Dashboard')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('dashboard') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if ($page == 'Project')
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('project') }}">
                    <svg fill="#000000" class="w-5 h-5" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M1,5H5V1H1Zm0,6H5V7H1Zm6,0h4V7H7ZM7,1V5h4V1Z" />
                        </g>
                    </svg>
                    <span class="ml-4">Project</span>
                </a>
            </li>
        </ul>
</aside>
