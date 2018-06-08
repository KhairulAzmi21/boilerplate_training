@extends('layouts.master')

@section('content')
<main role="main" class="container">
  <div class="row">
     <div class="col-md-12 blog-main">
         <div class="card">
             <div class="card-body">
                <div class="blog-post">
                  <h2 class="blog-post-title">{{ $post->title }}</h2>
                  <p class="blog-post-meta">{{ $post->created_at->diffForHumans()}} by <a href="#">{{ $post->user->name }}</a></p>
                  <hr>
                  <p>{{ $post->body }}</p>
                </div><!-- /.blog-post -->
              </div><!-- /.blog-main -->
          </div>
      </div>
  </div><!-- /.row -->

  <div class="row mt-3">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-body">

                  <form>
                    <div class="form-group">
                      <label for="comment">Comment</label>
                      <textarea name="comment" class="form-control" rows="8" cols="80"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-sm-12">
          @foreach ($post->comments as $comment)
              <div class="card mb-3">
                  <div class="card-header">
                      {{ $comment->user->name }} at {{ $comment->created_at->diffForHumans() }}
                  </div>
                  <div class="card-body">
                     {{ $comment->body }}
                  </div>
              </div>
          @endforeach

      </div>
  </div>
</main><!-- /.container -->
@endsection
