<?php

namespace App\Http\Controllers;
// use App\Models\TblList;
// use App\Models\Tpno;

use Illuminate\Http\Request;

class chatController extends Controller
{
    public function chatInterface()
    {
        return view('chat');
    }
}
