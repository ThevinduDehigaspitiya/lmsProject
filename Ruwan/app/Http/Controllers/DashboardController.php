<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends ParentController
{
    public function index()
    {
        return view('admin.dashboard.pages.index');
    }
}
