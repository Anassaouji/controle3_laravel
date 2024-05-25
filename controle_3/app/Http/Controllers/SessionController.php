<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('session.create');
    }
    public function stocke(Request $request){
        // Storing data in the session
        $request->session()->put('user_id', 1);
        $request->session()->put('user_name', 'John Doe');

    return redirect()->route('dashboard');
    }
    public function recuperer(Request $request){
        // Getting data from the session
        $userId = $request->session()->get('user_id');
        $userName = $request->session()->get('user_name');

        return view('session.index', ['userId' => $userId, 'userName' => $userName]);

    }
    public function suprimer(Request $request){
        // Removing data from the session
        $request->session()->forget('user_id');
        $request->session()->forget('user_name');

        return redirect()->route('login');
    }
}
