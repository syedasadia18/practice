<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    @if(!auth()->user())
    <h2>Please login to show the blog</h2>
    <p>Sessoin: {{Session::get('test')}}</p>
    @endif


    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{$blog->title}}</h5>
                        <p class="card-text">Description: {{Str::words($blog->description, 5, '.....')}}</p>
                        <p>id: {{$blog->id}}</p>
                        <p>User name: {{$blog->user->name}}</p>
                        <p>User email: {{$blog->user->email}}</p>
                        <a href="{{route('blogdetails', $blog->id)}}" class="card-link">Details</a>
                        <a onClick="return confirm('Delete This account?')" href="{{route('blogdelete', $blog->id)}}" class="card-link">Delete</a>

                        <!-- <a href="{{url('/blogupdate/' . $blog->id)}}" class="card-link">Edit</a> -->
                        <a href="{{route('blogedit', $blog->id)}}" class="card-link">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- 
            {{$blogs->links()}} -->



            {{$blogsecond->links()}}

            <!-- {{ $blogs->links() }} -->
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>