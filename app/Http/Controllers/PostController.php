<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $name = "contact";

    public function index()
    {
        //Post::all();
        //return Post::where('id', 1)->get();
    }

    public function blog()
    {
        return Post::all(); // select * from posts;
    }

    public function contact()
    {
        $contact = Contact::all();

        //return view('contact', ['contactssssss' => $contact]);

        return view('contact', compact('contact'));

        //return view('contact')->with('contact', $contact);
    }

    public function contactCreate()
    {
        Contact::create([
            'phone' => '6666ddd666',
            'email' => 'new2@gamil.com'
        ]);
    }

    public function contactform()
    {
        return view('contactform');
    }

    public function contactformcreate(Request $request)
    {
        Contact::create([
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return 'created';
    }

    public function edit($id)
    {
        //select * from contact where id=1

        $contact = Contact::findOrfail($id);

        return view('contactedit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        //Update contact set phone=$_post[], email=$_post['email] where id=1;
        $contact = Contact::findOrFail($id);

        $contact->update([
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back();
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return 'Contact is deleted';
    }
}
