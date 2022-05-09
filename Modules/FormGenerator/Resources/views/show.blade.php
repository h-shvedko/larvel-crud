@extends('formgenerator::layouts.master')

@section('content')
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h1>{!! config('formgenerator.htmlTitle') !!}</h1>
            </div>
            <div class="col-12">
                <div class="row pt-5">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($fields as $field)

                            <tr>
                                <th scope="row">{{ $field->id }}</th>
                                <td>{{ $field->name }}</td>
                                <td><a href="{{ route('edit', $field->id) }}" title="Edit field {{ $field->name }}"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('remove', $field->id) }}" title="Remove field {{ $field->name }}"><i
                                            class="fas fa-trash"></i></a></td>
                            </tr>
                        @empty
                            <p>No fields found</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
