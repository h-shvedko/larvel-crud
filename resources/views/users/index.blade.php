@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <h1>Users administration</h1>
            </div>
            <div class="col-12">
                @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Users list') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th class="text-end" scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td scope="row">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-end">
                                        <a class="me-3" href="{{ route('users.edit', $user->id) }}" title="Edit user {{ $user->name }}"><i class="fas fa-lg fa-edit"></i></a>
                                        <a onclick="confirm('Are you sure want to delete user {{ $user->name }}?');" href="{{ route('users.remove', $user->id) }}" title="Remove user {{ $user->name }}"><i class="fas fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users</td>
                                </tr>
                            @endforelse
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
