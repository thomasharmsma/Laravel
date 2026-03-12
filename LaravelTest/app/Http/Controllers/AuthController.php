<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            return redirect('/admin');
        } else {
            return redirect('/login');
        }
    }
}