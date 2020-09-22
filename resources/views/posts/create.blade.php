@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">

        @csrf
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row"><h2>Write a comment</h2></div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Comment</label>


                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row offset-2">
            <label for="image" class="col-md-4 col-form-label">Add Image</label>
            <input type="file" class="form-control-file" name="image" id="image">

            @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
        </div>

        <div class="row offset-2 pt-5">
            <button class="btn btn-primary">Add new comment</button>
        </div>
    </form>
</div>
@endsection