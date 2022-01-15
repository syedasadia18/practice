<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Setting</h2>

    @foreach($settings as $setting)
    <h2>{{ $setting->logo }}</h2>
    <h2>{{ $setting->footer }}</h2>
    @endforeach

</body>

</html>