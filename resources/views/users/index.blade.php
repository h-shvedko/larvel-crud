@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @forelse ($users as $user)
                            <div class="row no-gutters">
                                <div class="col">{{ $user->name }}</div>
                                <div class="col-auto"><a href="{{ route('users.edit', $user->id) }}" title="Edit user {{ $user->name }}"><i class="fas fa-edit"></i></a></div>
                                <div class="col-auto"><a href="{{ route('users.remove', $user->id) }}" title="Remove user {{ $user->name }}"><i class="fas fa-trash"></i></a></div>
                            </div>
                        @empty
                            <p>No users</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
