@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="name">
                        <small id="emailHelp" class="form-text text-muted">Post Title</small>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" aria-describedby="age" placeholder="age">
                      </div>
                      <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" aria-describedby="gender" placeholder="gender">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
