<?php

namespace App\Http\Controllers\template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TestController extends Controller
{
    //
    public function test(){
        return view('template.pages.test');
    }
}
