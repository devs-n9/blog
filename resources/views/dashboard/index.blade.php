@extends('templates.dashboard')

@section('content')
    <a class="btn btn-success" href="/dashboard/post/create">Create new Post</a>
    
    <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Categories</th>
                  <th>Edit</th>
                  <th>delete</th>
                </tr>
              </thead>
              <tbody>
               @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>
                    @foreach($post->categories as $cat)
                    {{ $cat->category }} 
                    @endforeach
                   </td>
                   <td><a class="glyphicon glyphicon-pencil" href="/dashboard/post/edit/{{ $post->id }}"></a></td>
                   <td><a class="glyphicon glyphicon-remove" href="/dashboard/post/delete/{{ $post->title }}"></a></td>
                </tr>
                @endforeach
        </tbody>
</table>
@endsection