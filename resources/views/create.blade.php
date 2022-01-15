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

    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <br>

    <form action="{{route('blogcreate')}}" method="POST">
        @csrf

        <label for="">Title</label>
        <input name="title" type="title">

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="">Description</label>
        <input name="description" type="description">

        @error('description')
        <div class="alert alert-danger">Your description must contain one small letter, one capital letter, one special character </div>
        @enderror
        <br>



        <button type="submit">Submit</button>

    </form>

</body>

</html>