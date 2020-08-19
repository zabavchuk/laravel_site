<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user_id)
    {

        $template = [
            'user' => User::findOrFail($user_id)
        ];

        return view('profiles/index', $template);
    }
}
