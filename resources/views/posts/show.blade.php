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
          <div class="card">
              <div class="card-header">
                  User at 20-30-2014
              </div>
              <div class="card-body">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
          </div>
      </div>
  </div>
</main><!-- /.container -->
@endsection
