@extends('formgenerator::layouts.master')

@section('content')
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h1>{!! config('formgenerator.htmlTitle') !!}</h1>
            </div>
            <div class="col-12">
                <div class="row pt-5">
                    <div class="col-6">
                        <a href="{{ route('show') }}" class="btn btn-primary btn-lg w-100">List existing forms</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('create') }}" class="btn btn-success btn-lg w-100">Create a new form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
