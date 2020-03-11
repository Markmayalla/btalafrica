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
            <form class="form-inline" action="/products/{{ $product->id }}/technologies" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group mx-sm-1 mb-2 ml-auto">
                    <label for="image" class="sr-only">Choose File</label>
                    <select class="form-control-sm @error('technology_id') is-invalid @enderror" name="technology_id">
                        <option value="">Choose...</option>
                        @foreach ($technologies as $technology)
                            <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                        @endforeach
                    </select>
                    @error('technology_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    
                    @foreach ($product_technologies as $technology)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            
                            <td>
                                {{-- <form action="/products/{{ $product->id }}/technologies" method="post">
                                    @csrf
                                    <input type="hidden" name="technology_id" value="{{ $technology->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection