<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $records = User::latest()->get();
        return view('admin.users.index', compact('records'));
    }

    public function store() {

    }

    public function edit(User $user) {
        return
    }

    public function destroy(User $user) {
        $user->delete();
    }
}
