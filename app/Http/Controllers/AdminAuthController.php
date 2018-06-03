<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }

    protected function login() {

    }
}
