<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/posts">
        @csrf
        <label for="title" >title</label><br>
        <input type="text" name="titel"><br>
        <label for="author" >author</label><br>
        <input type="text" name="author"><br>
        <label for="released_at" >released</label><br>
        <input type="text" name="released_at"><br>
        <label for="discription" >discriptione</label><br>
        <input type="text" name="discription"><br>
        <input type="submit" value="submit"><br>

    </form>
</body>
</html>