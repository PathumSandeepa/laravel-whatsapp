<?php

namespace App\Http\Controllers;

use App\Models\TblList;
use App\Models\User;
// use Twilio\Rest\Client;
// use App\Models\TblList;
// use App\Models\Tpno;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Client as HttpClient;

class chatController extends Controller
{
    public function chatInterface()
    {
        $lists = TblList::with('tableListRelation')->get();
        return view('chat', ['lists' => $lists]);
    }


}
