<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basic extends Controller
{
    public function index()
    {
        return [
            "name" => "nitish",
            "email" => "nsniteshsharma47@gmail.com"
        ];
    }
}
