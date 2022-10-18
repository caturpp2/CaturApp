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
                    
    <a href="/post/create" class="btn btn-primary">Tambah Post</a>
    <table class="table table-stripe mt-5">
        <thead>
            <tr>
              <th>No</th>
              <th>Content</th>
              <th>User</th>
              <th>Aksi</th>
            </tr>
        </thead>
        @foreach ($posts as $key=>$post)
        <tbody>
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $post->content }}</td>
                <td>Catur Priyo Prayogo<td>
                <td>
                    <div class="btn-group">
                    <a href="/post/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/post/{{ $post->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger bg-danger" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
        </tbody>      
        @endforeach
           
    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>