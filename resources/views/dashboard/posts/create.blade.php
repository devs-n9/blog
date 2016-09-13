@extends('templates.dashboard')

@section('content')
    <h3>Create new Post</h3>
    <form method="post">
       {{ csrf_field() }}
        <label for="">Title</label>
        <br>
        <input type="text" name="title">
        <br>
        <br>
        @foreach($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category->id }}" > : {{ $category->category }} <br>
        @endforeach
        <br>
        <label for="">Content</label>
        <br>
        <textarea name="content" cols="30" rows="10"></textarea>
        @if(!empty($errors))
        
        @foreach($errors as $error)
            <p>{{ $error }}</p>
        @endforeach
        
        @endif
        <br>
        <input type="submit" value="Save">
        
    </form>
@endsection