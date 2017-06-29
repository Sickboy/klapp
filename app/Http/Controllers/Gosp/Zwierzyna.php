<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Zwierzyna extends Controller
{
    public function index()
    {
	$rok = "2017/2018";
	$stanid = DB::table('gosp_plan')->where('rok', $rok)->value('stan');
	$stan = DB::table('gosp_zwierzyna')->where('id', $stanid)->first();
	return view('gosp.zwierzyna.index',[ 'stan'=>$stan,  'bc'=>' > Gospodarka łowiecka > Zwierzyna', 'Zwierzyna' => 'active', 'gosp' => 'active']) ;
    }
    public function jelen(){
	$rok = "2017/2018";
	$stanid = DB::table('gosp_plan')->where('rok', $rok)->value('stan');
	$stan = DB::table('gosp_zwierzyna')->where('id', $stanid)->first();
	return view('gosp.zwierzyna.jelen',[ 'stan'=>$stan,  'bc'=>' > Gospodarka łowiecka > Zwierzyna > Jeleń', 'Zwierzyna' => 'active', 'gosp' => 'active']) ;
    }
    public function sarna(){

    }
}
