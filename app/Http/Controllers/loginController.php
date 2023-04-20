<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Login;
use App\Models\TblList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginValidate(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get user by username
        $tbl_login = Login::where('VLOG_NAME', $request->name)->first();
        if (isset($tbl_login) && Hash::check($request->password, $tbl_login->VLOG_PASSWORD)) {
            // dd('success');
            // Auth::login($tbl_login);
            // return view('chat');
            $lists = TblList::get();
            return view('chat', ['lists' => $lists]);
        } else {
            return back()->withErrors([
                'password' => 'Invalid Password',
            ]);
        }
    }
}
