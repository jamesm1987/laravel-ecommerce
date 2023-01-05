<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __invoke()
    {
        return view('admin.roles.index');
    }
}
