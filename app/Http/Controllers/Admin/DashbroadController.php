<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbroadController extends Controller
{
    //Dashboard
    public function dashboard()
    {
      // code...
      return view('admin.dashboard');
    }
}
