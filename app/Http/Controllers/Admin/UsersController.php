<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }
}
