@extends('template.admin')

@section('content')
    @if (session('message'))
        <div class="w-full rounded-lg px-3 py-2 flex justify-between {{ session('bg') }} text-white mb-3 alert alert-dismissable"
            role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif
    <div class="w-full rounded-lg shadow-xs py-2 md:w-1/2">
        <form action="{{ route('social.store') }}" method="POST">
            @csrf
            @method('POST')
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

            <div class="w-full text-base flex flex-col gap-1 mt-3">
                <label for="name" class="font-semibold">Account name</label>
                <input type="text"
                    class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                    placeholder="enter account name ..." name="name" id="name">
            </div>
            @error('name')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <div class="w-full text-base flex flex-col gap-1 mt-3">
                <label for="name" class="font-semibold">Account link</label>
                <input type="url"
                    class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                    placeholder="enter account link ..." name="link" id="link">
            </div>
            @error('link')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <div class="w-full text-base flex flex-col gap-1 mt-3">
                <label for="name" class="font-semibold">Account logo</label>
                <input type="text"
                    class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                    placeholder="enter account logo ..." name="logo" id="logo">
            </div>
            @error('logo')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <button type="submit" class="bg-blue-500 px-3 py-2 mt-3 rounded-lg font-semibold text-white text-center">
                Add Account
            </button>
    </div>
    </form>
    </div>
@endsection
