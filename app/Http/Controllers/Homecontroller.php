<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function sayhello()
    {
        return response("hello world");
    }
}
