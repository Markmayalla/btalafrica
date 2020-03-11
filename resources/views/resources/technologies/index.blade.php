@extends('layouts.app')

@section('content')
    <a href="/technologies/create" class="btn btn-primary mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Description</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->description }}</td>
                    <td><img src="{{ $technology->logo }}" alt="" height="125px"></td>
                    <td>
                        <form action="/technologies/{{ $technology->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/technologies/{{ $technology->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection