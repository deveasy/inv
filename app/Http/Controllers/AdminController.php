<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function settings()
    {
        return view('admin.settings');
    }

    public function support()
    {
        return view('admin.support');
    }
}
