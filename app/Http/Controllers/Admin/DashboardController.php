<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
    //    return 'I am the dashboard';
       return view('admin.dashboard');
   }
}
