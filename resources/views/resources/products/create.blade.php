@extends('layouts.app')

@section('content')
    <form action="/products" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="client_id" class="control-label">Client Name</label>
            <select name="client_id" id="" class="form-control">
                <option value="">Choose...</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="featured_image" class="control-label">featured_image</label>
            <input type="file" name="featured_image" id="" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>    
@endsection