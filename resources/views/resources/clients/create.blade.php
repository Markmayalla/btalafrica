@extends('layouts.app')

@section('content')
    <form action="/clients" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">Client Name</label>
            <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address" class="control-label">Address</label>
            <input type="text" name="address" id="" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="website" class="control-label">Website</label>
            <input type="text" name="website" id="" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}">
            @error('website')
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

        <button type="submit" class="btn btn-primary">Add</button>
    </form>    
@endsection