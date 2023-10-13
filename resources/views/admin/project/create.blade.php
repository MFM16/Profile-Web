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
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="name" class="font-semibold">Project name</label>
                    <input type="text"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter project name ..." name="project_name" id="name">
                </div>
                @error('project_name')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="year" class="font-semibold">Project year</label>
                    <input type="number"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter project year ..." name="project_year" id="year">
                </div>
                @error('project_year')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="description" class="font-semibold">Project description</label>
                    <textarea class="px-2 py-2 rounded-md focus:outline-none bg-slate-200" name="project_desc" id="description"
                        cols="10" rows="5"></textarea>
                </div>
                @error('project_desc')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="url" class="font-semibold">Project link</label>
                    <input type="url"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200 placeholder:text-slate-500"
                        placeholder="enter project url ..." name="project_link" id="url">
                </div>
                @error('project_link')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="project_image" class="font-semibold">Project image</label>
                    <input type="file"
                        class="px-2 py-2 rounded-md focus:outline-none invalid:ring-2 invalid:text-red-500 invalid:ring-red-500 bg-slate-200"
                        name="project_image" id="project_image">
                </div>
                @error('project_image')
                    <span class="text-xs text-red-500">
                        {{ $message }}
                    </span>
                @enderror
                <div class="w-full text-base flex flex-col gap-1">
                    <label for="url" class="font-semibold">Project technology</label>
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
                Add Project
            </button>
        </form>
    </div>
@endsection
