<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Contact form</h2>

    <form action="{{route('createform')}}" method="POST">
        @csrf
        <label for="">Phone</label>
        <input type="text" name="phone">
        <br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br>
        <br>

        <button type="submit">Submit</button>

    </form>
</body>

</html>