
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Form --}}
                        <form action="/user/store" method="post">
                            @csrf
                            <div class="mb-3">
                            {{-- <label for="name" class="form-label">Name</label> --}}
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                            {{-- <label for="email" class="form-label">Email address</label> --}}
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                            {{-- <label for="password" class="form-label">Password</label> --}}
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="mb-3">
                            {{-- <label for="role" class="form-label">Role</label> --}}
                            <input type="text" class="form-control" name="role" placeholder="Role">
                            </div>
                            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>