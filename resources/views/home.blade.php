@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Welcome to Laravel CMS!</h1>
            <p>You have ability to use the following links:</p>
            <ul>
                @if($user->hasRole(\App\Providers\AppServiceProvider::SUPER_ADMIN) || $user->hasRole(\App\Providers\AppServiceProvider::ADMIN))
                <li><a href="{{ route('users.index') }}">Users administration</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection
