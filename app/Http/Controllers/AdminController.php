<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
