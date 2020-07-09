<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function roleChange(){
        User::find(\request('user_id'))->update([
            'type' => \request('role')
        ]);

        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/index');
    }
}
