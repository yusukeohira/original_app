<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  //ログイン後インデックス画面にいく//
    public function add()
    {
      return view('top');
    }
}
