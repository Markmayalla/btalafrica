@extends('layouts.app')

@section('content')
    <form action="/technologies/{{$technology->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("patch")
        <div class="form-group">
            <label for="name" class="control-label">technology Name</label>
        <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{ $technology->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $technology->description }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="logo" class="control-label">Logo</label>
            <input type="file" name="logo" id="" class="form-control @error('logo') is-invalid @enderror">
            @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>    
@endsection