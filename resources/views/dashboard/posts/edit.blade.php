<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Edit Post</h3>
    <form method="post">
       {{ csrf_field() }}
        <label for="">Title</label>
        <br>
        <input type="text" name="title" value="{{ $post->title }}">
        <br>
        <label for="">Content</label>
        <br>
        <textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>