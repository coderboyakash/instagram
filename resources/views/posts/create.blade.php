@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/post/create" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <h2>Add new Post</h2>
                    <!-- post caption -->
                    <div class="form-group">
                        <label for="caption">{{ __('Posts Caption') }}</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus >
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- post image -->
                    <div class="form-group">
                        <label for="image">{{ __('Post Image') }}</label>
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- submit button -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mt-2" name="submit" value="Add New Post">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection