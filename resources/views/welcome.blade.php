@extends('layouts.master')

@section('content')
    @foreach ($posts->chunk(2) as $chunk)
        <div class="row mb-2">
            @foreach ($chunk as $post)
                <div class="col-md-6">
                  <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">mani categori</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('posts.show', $post->id)}}">{{ $post->title }}</a>
                      </h3>
                      <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
                      <p class="card-text mb-auto">{{ substr($post->body, 0, 20) }}</p>
                      <small>By <strong>{{ $post->user->name }}</strong></small>
                      <a href="{{ route('posts.show', $post->id)}}">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                  </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
