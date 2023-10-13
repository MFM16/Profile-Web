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
        <form action="{{ route('profile.update', $profile->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-full text-base flex flex-col gap-1">
                <label for="name" class="font-semibold">Name</label>
                <input type="text"
                    class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                    placeholder="enter full name ..." name="name" id="name" value="{{ $profile->name }}">
            </div>
            @error('name')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <div class="w-full text-base flex flex-col gap-1 mt-2">
                <label for="name" class="font-semibold">Job name</label>
                <input type="text"
                    class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                    placeholder="enter job name ..." name="job" id="job" value="{{ $profile->job }}">
            </div>
            @error('job')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <div class="w-full text-base flex flex-col gap-1 mt-2">
                <label for="name" class="font-semibold">Job description</label>
                <textarea class="px-2 py-2 rounded-md focus:outline-none bg-slate-200" name="job_desc" cols="10" rows="5">{{ $profile->job_des }}</textarea>
            </div>
            @error('job_desc')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror

            <div class="w-full text-base flex flex-col gap-1 mt-2">
                <label for="name" class="font-semibold">About me</label>
                <textarea class="px-2 py-2 rounded-md focus:outline-none bg-slate-200" name="about_me" cols="10" rows="5">{{ $profile->about_me }}</textarea>
            </div>
            @error('about_me')
                <span class="text-xs text-red-500">
                    {{ $message }}
                </span>
            @enderror
            <button type="submit" class="bg-blue-500 px-3 py-2 mt-3 rounded-lg font-semibold text-white text-center">
                Update Profile
            </button>
    </div>
    </form>
    </div>
@endsection
