<?php

namespace App\Http\Controllers;

use App\User;
//use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {

//        $template = [
//            'user' => User::findOrFail($user_id)
//        ];
//
//        return view('profiles/index', $template);
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postsCount = Cache::remember(
            'counts.posts'. $user->id,
            now()->addSecond(30),
            function () use ($user) {
                return $user->posts->count();
            }
        );
        $followersCount = Cache::remember(
            'counts.followers'. $user->id,
            now()->addSecond(30),
            function () use ($user) {
                return $user->profile->followers->count();
            }
        );
        $followingCount = Cache::remember(
            'counts.following'. $user->id,
            now()->addSecond(30),
            function () use ($user) {
                return $user->following->count();
            }
        );

        return view('profiles/index', compact('user', 'follows', 'postsCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles/edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
//            'image' => ['required', 'image']
            'image' => ''
        ]);

        $imagePath = '';

        if (request('image')){

            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile()->update(array_merge(
            $data,
            $imageArray ?? []
            ));

        return redirect("/profile/{$user->id}");
    }
}
