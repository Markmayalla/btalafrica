@extends('layouts.app')

@section('content')
    <a href="/services/create" class="btn btn-primary mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Description</th>
                <th>Featured Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td><img src="{{ $service->featured_image }}" alt="" height="125px"></td>
                    <td>
                        <form action="/services/{{ $service->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/services/{{ $service->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection