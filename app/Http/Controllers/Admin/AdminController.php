<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   public function index()
   {
      dd(1111);
   }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
