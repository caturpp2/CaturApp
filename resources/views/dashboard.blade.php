<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <div class="container mt-4">

                  <div class="card border-danger mb-3 " style="max-width: 45rem;" >
                    <div class="card-header">
                      <h4>POST</h4>
                    </div>
                    <div class="card-body">
                      <form action="/post/store" method="post">
                        @csrf
                        {{-- <div class="mb-3">
                          <label for="name" class="form-label">Title</label>
                          <input type="text" class="form-control" name="title">
                        </div> --}}
                        <div class="mb-3">
                          <textarea name="content" type="textarea" class="form-control" placeholder="Content" rows="5"></textarea>
                        </div>     
                        {{-- <div class="mb-3">
                          <label for="name" class="form-label">Category</label>
                          <select name="category_id" class="form-control">
                            @foreach ($categories as $item)
                                <option value=""></option>
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary bg-primary">Post</button>
                        {{-- <a href="/category/create" class="btn btn-primary">Create Category</a> --}}
                      </form>
                    </div>
                  </div>


                    @foreach ($data as $item)
                 <div class="card mb-3" style="max-width: 45rem;">
                      <div class="card-header">
                        <h4>{{$item->author->name}}</h4>
                      </div>
                      <div class="card-body">
                        {{-- <h4 class="card-title">{{$item->title}}</h4> --}}
                        <p class="card-text">{{$item->content}}</p>
                        <ul>
                          @foreach ($item->comments as $comment)
                            <li>{{$comment->author->name}} - {{$comment->comment}}</li>
                          @endforeach
                        </ul>
                        <form action="/comment/store/{{ $item->id }}" method="post">
                          @csrf
                          <div class="mb-3">
                            <textarea name="comment" type="text" class="form-control" placeholder="comment here"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary bg-primary">Add Comment</button>
                        </form>
                      </div>
                    </div>
                    @endforeach
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>