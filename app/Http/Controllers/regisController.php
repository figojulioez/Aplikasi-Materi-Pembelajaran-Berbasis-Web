<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\soal;


class regisController extends Controller
{
    public static function store () {
        $data = request()->validate([
            'username' => ['max:7, min:1', 'required'],
            'email' => ['email:rfc,dns', 'required', 'unique:users'],
            'password' => ['required', 'min:7']
        ]);
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        $id = User::where('email', $data['email'])->first()->id;

        soal::create([
            'user_id' => $id 
        ]);

        return redirect('/login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
