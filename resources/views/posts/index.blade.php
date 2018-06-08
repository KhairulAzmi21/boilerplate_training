@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    List All Posts
                    <span class="float-right">
                        <a href="/posts/create" class="btn btn-outline-primary btn-sm">New Post</a>
                    </span>
                </div>

                <div class="card-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created By</th>
                            <th>Category</th>
                            <th>Created At</th>     
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($posts as $key => $post)
                         
                          <tr>                        
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->created_at->toDayDateTimeString() }}</td>
                            <th>
                                <a href="{{ route('posts.show', $post->id )}}" class="btn btn-outline-secondary btn-sm">Show</a>
                                <a href="{{ route('posts.edit', $post->id )}}" class="btn btn-outline-info btn-sm">Edit</a>
                                <a href="{{ route('posts.destroy', $post->id )}}" data-title="Title" class="btn btn-outline-danger btn-sm delete-rekod">Delete</a>
                            </th>
                          </tr>
                          @endforeach
                          
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="label-delete"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this post ? this action cannot be undone
                </div>
                <div class="modal-footer">
                    <form id="delete-form" action="" method="POST" style="display:inline">
                        {{-- {{ csrf_field() }}
                        {{ method_field('DELETE') }} --}}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Confirm</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function () {
        $('.delete-rekod').on('click', function (event) {
            event.preventDefault();
            var button = $(this);
            var title  = button.data('title');
            var modal  = $('#modal-delete');
            modal.find('#label-delete').text("Title: "+title);
            var href   = button.attr('href');
            modal.find('#delete-form').attr('action', href)
            modal.modal('show');
        });
    });
</script>
@endsection
