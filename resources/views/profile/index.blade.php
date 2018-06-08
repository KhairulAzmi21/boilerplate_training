@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update', auth()->id())}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ old('name',auth()->user()->name) }}">
                        @if ($errors->has('name'))
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="{{ old('email',auth()->user()->email)}}">
                        @if ($errors->has('email'))
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control" name="avatar" id="avatar" aria-describedby="avatar" value="avatar">
                        @if ($errors->has('avatar'))
                                <strong class="text-danger">{{ $errors->first('avatar') }}</strong>
                        @endif
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
