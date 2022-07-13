<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //return all userswawewawe
    public function index()
    {
        return User::all();
    }
    //show details of user
    public function show($id)
    {
        return User::find($id);
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }
}

