@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Edit {{ $user->name }}'s profile</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('profile.save') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-auto">
                            <label for="">User name</label>:
                        </div>
                        <div class="col">
                            <input type="text" required class="form-control @error('name') invalid @enderror" name="name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <label for="">User's email</label>:
                        </div>
                        <div class="col">
                            <input type="email" required class="form-control @error('email') invalid @enderror" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <a href="{{ route('profile.index') }}" class="btn btn-danger"><i class="fa-solid fa-ban me-1"></i>Cancel</a>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check me-1"></i>Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
