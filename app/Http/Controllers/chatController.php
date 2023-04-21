<?php

namespace App\Http\Controllers;

use App\Models\TblList;
use App\Models\User;
// use App\Models\TblList;
// use App\Models\Tpno;

use Illuminate\Http\Request;

class chatController extends Controller
{
    public function chatInterface()
    {
        $lists = TblList::with('tableListRelation')->get();
        dd($lists);
        return view('chat', ['lists' => $lists]);

    }
}
