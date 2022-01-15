<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Contact form</h2>

    <form action="{{url('/contactupdate/'. $contact->id)}}" method="POST">
        @csrf
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{$contact->phone}}">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{$contact->email}}">
        <br>
        <br>

        <button type="submit">Submit</button>
        <div>
            <h2>Delete this Contact</h2>
            <a href="{{url('/contactdelete/' . $contact->id)}}">Delete</a>
        </div>
    </form>
</body>

</html>