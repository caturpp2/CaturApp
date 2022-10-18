<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Content --}}

                    <h1 class="mb-5">Form Edit Post</h1>

                    <form action="/post/{{ $posts->id }}" method="post">
                        @csrf
                        @method('put')
                        {{-- <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                        </div> --}}
                        <div class="mb-3">
                        <label for="name" class="form-label">Content</label>
                        <input type="text" class="form-control" name="content" value="{{ $posts->content }}">
                        </div>
                        <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>