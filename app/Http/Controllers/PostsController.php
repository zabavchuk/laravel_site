<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        $data['image'] = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$data['image']}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create($data);

        return redirect('/profile/'. auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts/show', compact('post'));
    }
}
