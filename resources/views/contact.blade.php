<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Contact</h2>

    @foreach($contact as $con)

    <h2>phone: {{$con->phone}} - Email: {{$con->email}}</h2>

    @endforeach

</body>

</html>