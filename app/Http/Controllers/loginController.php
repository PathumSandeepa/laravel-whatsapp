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

    /**
     * @param  Request  $request
     * @return Response
     */

    public function loginValidate(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get name in input field
        $tbl_login = Login::where('VLOG_NAME', $request->name)->first();

        //get password and hash. check dp hash pw and user inputted hashed pw
        if (isset($tbl_login) && Hash::check($request->password, $tbl_login->VLOG_PASSWORD)) {
            
            $lists = TblList::with(['tableListRelation'])->get();
            $users = TblList::get();
            return view('chat', ['lists' => $lists]);

        } else {
            return back()->withErrors([
                'password' => 'Invalid Password',
            ]);
        }
    }
}