<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Create GET</h3>
    <form method="post">
       {{ csrf_field() }}
        <input type="text" name="title">:title
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>