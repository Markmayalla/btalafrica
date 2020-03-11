@extends('layouts.app')

@section('content')
    <form action="/people" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name" class="control-label">First Name</label>
        <input type="text" name="first_name" id="" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="middle_name" class="control-label">Middle Name</label>
            <input type="text" name="middle_name" id="" class="form-control @error('middle_name') is-invalid @enderror" value="{{ old("middle_name") }}">
            @error('middle_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name" class="control-label">Surname</label>
            <input type="text" name="surname" id="" class="form-control @error('surname') is-invalid @enderror" value="{{ old("surname") }}">
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="position" class="control-label">Position</label>
            <input type="text" name="position" id="" class="form-control @error('position') is-invalid @enderror" value="{{ old("position") }}">
            @error('position')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone" class="control-label">Phone</label>
            <input type="text" name="phone" id="" class="form-control @error('phone') is-invalid @enderror" value="{{ old("phone") }}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" value="{{ old("email") }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="facebook" class="control-label">Facebook Profile</label>
            <input type="text" name="facebook" id="" class="form-control @error('facebook') is-invalid @enderror" value="{{ old("facebook") }}">
            @error('facebook')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="twitter" class="control-label">Twitter Profile</label>
            <input type="text" name="twitter" id="" class="form-control @error('twitter') is-invalid @enderror" value="{{ old("twitter") }}">
            @error('twitter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="linkedin" class="control-label">Linkedin Profile</label>
            <input type="text" name="linkedin" id="" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old("linkedin") }}">
            @error('linkedin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old("description") }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar" class="control-label">Avatar</label>
            <input type="file" name="avatar" id="" class="form-control @error('avatar') is-invalid @enderror">
            @error('avatar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>    
@endsection