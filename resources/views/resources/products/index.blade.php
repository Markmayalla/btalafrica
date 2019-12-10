@extends('layouts.app')

@section('content')
    <a href="/products/create" class="btn btn-primary mb-2 float-right"><i class="fas fa-plus"></i> Add</a>
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
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><img src="{{ $product->featured_image }}" alt="" class="img-thumbnail"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <form action="/products/{{ $product->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/products/{{ $product->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection