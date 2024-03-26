<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class eventController extends Controller
{
    public function event(){
        $request=Http::get('https://apiv3.apifootball.com/?action=get_events&from=2023-03-05&to=2023-04-05&league_id=152&APIkey=407c41be624929d4411851795b172079a8115dc5f3e75dd3d22001f4fa655640');
        $eventdata=$request->json();
        return view ('event', ['eventdata'=>$eventdata]);
    }
}
