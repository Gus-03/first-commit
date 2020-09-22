@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">

@csrf
@method('PATCH')
<div class="row">
    <div class="col-8 offset-2">
        <div class="row"><h2>Edit Profile</h2></div>
        <div class="form-group row">
            <label for="Introduction" class="col-md-4 col-form-label">Introduction</label>


            <input id="Introduction" type="text" class="form-control @error('Introduction') is-invalid @enderror" name="Introduction" value="{{ old('Introduction')?? $user->profile->Introduction }}" required autocomplete="Introduction" autofocus>

            @error('Introduction')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group row">
            <label for="Birthday" class="col-md-4 col-form-label">Birthday</label>


            <input id="Birthday" type="text" class="form-control @error('Birthday') is-invalid @enderror" name="Birthday" value="{{ old('Birthday')?? $user->profile->Birthday }}" required autocomplete="Birthday" autofocus>

            @error('Birthday')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="Address" class="col-md-4 col-form-label">Address</label>


            <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address')?? $user->profile->Address }}" required autocomplete="Address" autofocus>

            @error('Address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>
</div>


<div class="row offset-2">
    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
    <input style="font-size: small;" type="file" class="form-control-file" name="image" id="image">

    @error('image')
                <strong>{{ $message }}</strong>
            @enderror
</div>

<div class="row offset-2 pt-5">
    <button class="btn btn-primary">Update</button>
</div>
</form>
</div>
@endsection