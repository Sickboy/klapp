<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Zwierzyna extends Controller
{
    public function index()
    {
	$rok = "2017/2018";
	$stanid = DB::table('gosp_plan')->where('rok', $rok)->value('stan');
	$stan = DB::table('gosp_zwierzyna')->where('id', $stanid)->first();
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	return view('gosp.zwierzyna.index',[ 'stan'=>$stan,  'bc'=>' > Gospodarka łowiecka > Zwierzyna', 'Zwierzyna' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
    public function jelen(){
	$rok = "2017/2018";
	$stanid = DB::table('gosp_plan')->where('rok', $rok)->value('stan');
	$stan = DB::table('gosp_zwierzyna')->where('id', $stanid)->first();
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	return view('gosp.zwierzyna.jelen',[ 'stan'=>$stan,  'bc'=>' > Gospodarka łowiecka > Zwierzyna > Jeleń', 'Zwierzyna' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
    public function sarna(){

    }
}
