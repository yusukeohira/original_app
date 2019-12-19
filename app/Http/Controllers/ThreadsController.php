<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function add()
    {
      return view('threads.create');
    }
    public function index()
    {
      return view('threads.index');
    }
    public function edit()
    {
      return view('threads.edit');
    }
}
