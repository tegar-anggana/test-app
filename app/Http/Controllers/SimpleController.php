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

    public function profileMethod()
    {
        $age = 20;
        $address = 'Jl. Merdeka No. 123';
        $nickname = ''; // untuk contoh @empty
        $hobbies = ['Reading', 'Swimming', 'Traveling'];

        return view('profile', [
            'age' => $age,
            'address' => $address,
            'nickname' => $nickname,
            'hobbies' => $hobbies,
        ]);
    }
}
