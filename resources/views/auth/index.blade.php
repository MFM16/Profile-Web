<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title_page }}</title>
</head>

<body>
    <div class="w-full flex justify-center items-center min-h-screen">
        <div class="py-4 px-6 rounded-md shadow-lg bg-slate-100 text-left max-w-xs">
            <h1 class="text-4xl text-primary font-bold md:text-6xl">login</h1>
            <p class="text-base text-slate-500 mt-1 font-semibold md:mt-3 md:text-base">Please insert your credentials !
            </p>
            @error('status')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror
            <form class="mt-5 w-full" action="{{ route('authenticate') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-2">
                    <label for="email" class="text-sm text-slate-500 font-semibold md:text-base">Email</label>
                    <input
                        class="w-full text-slate-400 rounded-md px-2 py-1 text-sm focus:outline-none placeholder:opacity-60 md:text-base"
                        name="email" id="email" type="email" placeholder="email@email.com">
                    @error('email')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="text-sm text-slate-500 font-semibold md:text-base">Password</label>
                    <input
                        class="w-full text-slate-400 rounded-md px-2 py-1 text-sm focus:outline-none placeholder:opacity-60 md:text-base"
                        name="password" id="password" type="password" placeholder="*****">
                    @error('password')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-primary px-3 py-1 rounded-md text-white text-base font-semibold md:text-lg">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>
