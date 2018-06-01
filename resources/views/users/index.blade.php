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
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                          </tr>
                        </tbody>
                      </table>
                      <span class="float-right">
                          Link
                      </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
