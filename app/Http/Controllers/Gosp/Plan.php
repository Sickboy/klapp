<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class Plan extends Controller
{
    public function index()
    {
	$rok = '2017/2018';
        $plans = DB::select('SELECT p.*, c.* FROM gosp_plan p JOIN ewid_czlonkowie c ON p.przez = c.id AND p.rok ="'.$rok.'" ');
	$stanid = DB::table('gosp_plan')->where('rok', $rok)->value('stan');
	$stan = DB::table('gosp_zwierzyna')->where('id', $stanid)->first();
	$planid = DB::table('gosp_plan')->where('rok', $rok)->value('planowane');
	$plan = DB::table('gosp_zwierzyna')->where('id', $planid)->first();
	$upadkid = DB::table('gosp_plan')->where('rok', $rok)->value('upadki');
	$upadki = DB::table('gosp_zwierzyna')->where('id', $upadkid)->first();
	$pozyskid = DB::table('gosp_plan')->where('rok', $rok)->value('pozyskano');
	$pozysk = DB::table('gosp_zwierzyna')->where('id', $pozyskid)->first();
	$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
		      	
      	return view('gosp.plan.index',['task'=>$task,'plans'=>$plans, 'stan'=>$stan, 'planp'=>$plan, 'upadki'=>$upadki, 'pozysk'=>$pozysk, 'bc'=>' > Gospodarka łowiecka > Plan łowiecki', 'PlanLowiecki' => 'active', 'gosp' => 'active']) ;
    }
}
