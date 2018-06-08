@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- {{ dump($errors) }} --}}
                <div class="card-header">
                    New Posts
                    <span class="float-right">
                        <a href="/posts" class="btn btn-outline-primary btn-sm">Back</a>
                    </span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts') }}">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" aria-describedby="title" placeholder="Enter text">
                        <small id="title" class="form-text text-muted">Post Title</small>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="8" cols="80"></textarea>
                        @if ($errors->has('body'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" multiple name="category[]">
                            @foreach(get_category() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

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
