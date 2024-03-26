<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class teamController extends Controller
{
    public function team(){
        $request=Http::get('https://apiv3.apifootball.com/?action=get_teams&league_id=302&APIkey=407c41be624929d4411851795b172079a8115dc5f3e75dd3d22001f4fa655640');
        $teamdata=$request->json();
        return view ('team', ['teamdata'=>$teamdata]);
    }
}
