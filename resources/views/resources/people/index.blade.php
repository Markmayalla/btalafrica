@extends('layouts.app')

@section('content')
    <a href="/people/create" class="btn btn-primary mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>S/n</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><img src="{{ $person->avatar }}" alt="" height="75px"></td>
                    <td>{{ $person->first_name }} {{ $person->surname }}</td>
                    <td>{{ $person->description }}</td>
                    <td>
                        <form action="/people/{{ $person->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/people/{{ $person->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection