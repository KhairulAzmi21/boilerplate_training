@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    New Posts
                    <span class="float-right">
                        <a href="/posts" class="btn btn-outline-primary btn-sm">Back</a>
                    </span>
                </div>

                <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" aria-describedby="title" placeholder="Enter text">
                        <small id="title" class="form-text text-muted">Post Title</small>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" class="form-control" rows="8" cols="80"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            <option value="1">Science</option>
                            <option value="2">Team</option>
                            <option value="3">Tech</option>
                            <option value="4">Food</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
