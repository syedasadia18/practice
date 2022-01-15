<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Blog Create</h2>

    <br>

    <form action="{{route('blogupdate', $blog->id)}}" method="POST">
        @csrf

        <label for="">Title</label>
        <input name="title" type="title" value="{{$blog->title}}">
        <label for="">Description</label>
        <input name="description" type="description" value="{{$blog->description}}">
        <br>

        <button type="submit">Update</button>

    </form>

</body>

</html>