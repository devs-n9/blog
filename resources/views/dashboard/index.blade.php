<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h3>Dashboard</h3>
    <p>Welcome {{ Auth::user()->name }}</p>
    <ul>
        @foreach($posts as $post)
        <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</body>
</html>