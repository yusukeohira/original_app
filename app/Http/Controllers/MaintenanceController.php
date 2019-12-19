<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;//追加
use App\User;

class MaintenanceController extends Controller
{
    public function add()
    {
      return view('maintenance.index');
    }
    public function adduser()
    {
      return view('maintenance.register');
    }
    public function create(array $data)
    {
        $user = new User;
        $form = $request->all();
        
        $user->fill($form);
        $user->save();
        
        return redirect('maintenance/index');
    }
}


