@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Welcome to Laravel CMS!</h1>
            <p>You have ability to use the following links:</p>
            <ul>
                <li><a href="{{ route('users.index') }}">Users administration</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
