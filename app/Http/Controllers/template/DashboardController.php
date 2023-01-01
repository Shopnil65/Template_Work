<?php

namespace App\Http\Controllers\template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller  
{
    public function shopnil(){
        return view('template.master');
    }
    public function analytics(){
        return view('template.pages.analytics');
    }
}
