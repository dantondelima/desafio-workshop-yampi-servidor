<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        return User::create([
                'username' => $request->username,
                'name' => $request->name
        ])->toArray();
    }

    public function index(UserRequest $request)
    {
        return User::all()->toArray();
    }
}
