<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function index()
    {
        $params = ['current_user' => auth()->user()];

        if (auth()->guest()) {
            return view('auth.login');
        }


        if (auth()->user()->role === 'admin') {
            $params += ['users' => User::all()];
            $params += ['columns' => []];
        }

        return view('home', $params);
    }
}
