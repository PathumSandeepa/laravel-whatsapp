<?php

namespace App\Http\Controllers;

use App\Models\TblList;
use App\Models\Tpno;
use App\Models\TpnoList;
use App\Models\WPMSG;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Http\Client as HttpClient;
use Illuminate\Support\Facades\Http;
use League\CommonMark\Extension\Table\Table;

class chatController extends Controller
{
    public function chatInterface()
    {
        $lists = TblList::with('tableListRelation')->get();
        return view('chat', ['lists' => $lists]);
    }


    public function sendMessage(Request $request)
    {
        $selectNumber = DB::table('tbl_list AS TL')
            ->leftJoin('tbl_tpno_list AS PTL', 'TL.IL_ID', '=', 'PTL.IL_ID')
            ->leftJoin('tbl_tpno AS TP', 'PTL.ITP_ID', '=', 'TP.ITP_ID')
            ->where('TL.IL_ID',  $request->dropdownOptions)
            ->get()
            ->pluck('ITP_TPNO')
            ->toArray();

        $post = new WPMSG;
        $post->IWP_GROUPNO = $request->dropdownOptions;
        $post->VWP_GROUPTPNO_LIST  = implode("\n", $selectNumber);
        $post->VWP_MSG = $request->chatArea;
        $post->save();
        return redirect()->route('interface');
    }
}
