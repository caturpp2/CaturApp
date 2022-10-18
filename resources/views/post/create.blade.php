<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Content --}}
                    
                    <div class="container mt-5">
                        <h1 class="mb-5">Form Tambah Post</h1>
                    
                        <form action="/post/store" method="post">
                            @csrf
                            {{-- <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                            </div> --}}
                            <div class="mb-3">
                            <label for="name" class="form-label">Content</label>
                            <input type="text" class="form-control" name="content">
                            </div>     
                            {{-- <div class="mb-3">
                            <label for="name" class="form-label">Category ID</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            </div> --}}
                            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> 