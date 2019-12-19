<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commentcontroller extends Controller
{
    public function add()
    {
      return view('threads.comment');
    }
}
