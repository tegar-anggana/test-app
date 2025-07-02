<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function aboutMethod()
    {
        return view('simple.view_about');
    }

    public function showMethod($data)
    {
        return "show: " . $data;
    }

    public function namedMethod()
    {
        return view('simple.named');
    }

    public function myBladeMethod()
    {
        return view('greeting', ['nama' => 'Euy']);
    }
}
