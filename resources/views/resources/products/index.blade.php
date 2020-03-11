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
                    <td><img src="{{ $product->featured_image }}" alt="" class="img-responsive" width="100px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <form action="/products/{{ $product->id }}" method="post" class="d-flex flex-nowrap">
                            @csrf
                            @method('delete')
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm m-1 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/products/{{ $product->id }}/images">Manage Pictures</a>
                                  <a class="dropdown-item" href="/products/{{ $product->id }}/technologies">Manage Technologies</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="/products/{{ $product->id }}/services">Manage Services</a>
                                </div>
                              </div>
                            <a href="/products/{{ $product->id }}/edit" class="btn btn-info btn-sm m-1"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm m-1"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection