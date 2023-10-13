@extends('template.admin')

@section('content')
    <div class="w-full rounded-lg shadow-xs py-2">
        @if (session('message'))
            <div class="w-full rounded-lg px-3 py-2 flex justify-between {{ session('bg') }} text-white mb-3 alert alert-dismissable"
                role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif
        <form action="{{ route('experiance.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="w-full md:w-1/2 flex flex-col gap-2 mt-3">
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="user_id" class="font-semibold">User</label>
                    <select name="user_id" id="user_id" class="px-2 py-2 rounded-md focus:outline-none bg-slate-200">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('user_id')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="name" class="font-semibold">From when</label>
                    <div class="flex gap-1">
                        <div class="flex flex-col gap-1 w-full">
                            <select name="month_from" class="px-2 py-2 rounded-md focus:outline-none bg-slate-200 w-full">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="<?= date('F', mktime(0, 0, 0, $i)) ?>">
                                        <?= date('F', mktime(0, 0, 0, $i)) ?>
                                    </option>
                                @endfor
                            </select>
                            @error('month_from')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1 w-full">
                            <select name="year_from" class="px-2 py-2 rounded-md focus:outline-none bg-slate-200 w-full">
                                @for ($i = (int) date('Y') - 5; $i <= (int) date('Y'); $i++)
                                    <option value="<?= $i ?>"><?= $i ?> </option>
                                @endfor
                            </select>
                            @error('year_from')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="name" class="font-semibold">To when</label>
                    <div class="flex gap-1">
                        <div class="flex flex-col gap-1 w-full">
                            <select name="month_to" id="month_to"
                                class="px-2 py-2 rounded-md focus:outline-none bg-slate-200 w-full disabled:bg-slate-400">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="<?= date('F', mktime(0, 0, 0, $i)) ?>">
                                        <?= date('F', mktime(0, 0, 0, $i)) ?>
                                    </option>
                                @endfor
                            </select>
                            @error('month_to')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1 w-full">
                            <select name="year_to" id="year_to"
                                class="px-2 py-2 rounded-md focus:outline-none bg-slate-200 w-full disabled:bg-slate-400">
                                @for ($i = (int) date('Y') - 5; $i <= (int) date('Y'); $i++)
                                    <option value="<?= $i ?>"><?= $i ?> </option>
                                @endfor
                            </select>
                            @error('year_to')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row gap-1 items-center">
                        <input type="checkbox" id="now" name="now" value="Currently work here">
                        <label for="now">Currently work here !</label><br>
                    </div>
                </div>
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="year" class="font-semibold">Job</label>
                    <input type="text"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter job name ..." name="job">
                </div>
                @error('job')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="year" class="font-semibold">Place</label>
                    <input type="text"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter place name ..." name="place">
                </div>
                @error('place')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="year" class="font-semibold">Position</label>
                    <input type="text"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter position name ..." name="position">
                </div>
                @error('position')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="description" class="font-semibold">Job description</label>
                    <textarea class="px-2 py-2 rounded-md focus:outline-none bg-slate-200" name="job_desc" cols="10" rows="5"></textarea>
                </div>
                @error('job_desc')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="url" class="font-semibold">Company link</label>
                    <input type="url"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter company url ..." name="link">
                </div>
                @error('link')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="url" class="font-semibold">Experiance technology</label>
                    @foreach ($technologies as $technology)
                        <div class="flex flex-row gap-1">
                            <input type="checkbox" id="technology" name="technology[]" value="{{ $technology->id }}">
                            <label for="technology">{{ $technology->name }}</label><br>
                        </div>
                    @endforeach
                </div>
                @error('technology')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 px-3 py-2 mt-3 rounded-lg font-semibold text-white text-center">
                Add Experiance
            </button>
        </form>
    </div>
@endsection

@push('custom-scripts')
    <script>
        const checkBox = $('#now')

        checkBox.on('change', (event) => {
            if (checkBox.is(':checked')) {
                $('#year_to').attr('disabled', true);
                $('#month_to').attr('disabled', true);
            } else {
                $('#year_to').removeAttr('disabled', true);
                $('#month_to').removeAttr('disabled', true);
            }
        })
    </script>
@endpush
