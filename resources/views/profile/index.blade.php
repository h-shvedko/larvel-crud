@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>{{ $user->name }}'s profile</h1>
            </div>
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-auto">
                        <label for="">User name</label>:
                    </div>
                    <div class="col">
                        {{ $user->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-auto">
                        <label for="">User's email</label>:
                    </div>
                    <div class="col">
                        {{ $user->email }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary"><i class="far fa-edit me-1"></i>Edit</a>
            </div>
        </div>
    </div>
@endsection
