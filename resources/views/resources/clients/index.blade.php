@extends('layouts.app')

@section('content')
    <a href="/clients/create" class="btn btn-primary mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>S/n</th>
                <th>Logo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><img src="{{ $client->logo }}" alt="" height="45px"></td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->website }}</td>
                    <td>
                        <form action="/clients/{{ $client->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/clients/{{ $client->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection