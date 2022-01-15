<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        //$blogs = Blog::all(); //select * from Blogs

        //for pagiantion
        // $blogs = Blog::simplePaginate(1);

        $blogsecond = Blog::paginate(1);

        // $_SESSION['test'] = 'test data';

        Session::put('test', 'test data');

        return view('blog', compact('blogs', 'blogsecond'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:10',
            'description' => [
                'required',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ]
        ]);

        Blog::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return 'Blog created successfully';
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogdetails', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id); //select * from blog where id =1;
        return view('blogedit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('blog');
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->back();
    }
}
