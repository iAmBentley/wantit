<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
	}
	
    public function edit(User $user)
    {
		return view('users.edit', compact('user'));
	}
	
    public function update(Request $request, $id)
    {
        //
	}
	
    public function destroy($id)
    {
        //
    }
}
