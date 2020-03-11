@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <h2>Product Details</h2>
            <ul class="list-group">
                <li class="list-group-item">Featured Image</li>
                <li class="list-group-item">{{ $product->name }}</li>
                <li class="list-group-item">{{ $product->description }}</li>
            </ul>
        </div>

        <div class="col-sm-9">
            <form class="form-inline" action="/product_images" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group mx-sm-1 mb-2 ml-auto">
                    <label for="image" class="sr-only">Choose File</label>
                    <input type="file" class="form-control-sm @error('image') is-invalid @enderror" name="image" placeholder="Image" >
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mx-sm-2 mb-2">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                    <label for="description" class="sr-only">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Add</button>
            </form>

            <table class="table table-hover table-stripped">
                <thead>
                    <tr>
                        <th>S/n</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>

                    @foreach ($productImages as $image)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td><img src="{{ $image->image }}" height="75px" /></td>
                            <td>{{ $image->name }}</td>
                            <td>
                                <form action="/product_images/{{ $image->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection