@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    List All User
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Avatar</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Number Of Posts</th>
                                  <th>Number Of Comments</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                      <td>{{ $user->id }}</td>
                                      <td class="text-center"><img src="{{ asset('images/anonymous.jpg') }}" class="rounded-circle" width="50px" height="50px" alt="">  </td>
                                      <td>{{ $user->name}}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>100</td>
                                      <td>100</td>
                                    </tr>
                                @endforeach

                              </tbody>
                          </table>
                        </div>
                </div>

            </div>
            <span class="float-right mt-3">
                {{ $users->links() }}
            </span>
        </div>
    </div>
</div>
@endsection
