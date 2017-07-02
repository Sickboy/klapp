<?php

namespace App\Http\Controllers\Ewid;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Mysliwi extends Controller
{
    public function index()
    {
		$czl = DB::select('SELECT * FROM ewid_czlonkowie ');
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" ');
		return view('ewid.mysliwi.index',[ 'czl'=>$czl, 'bc'=>' > Ewidencja > Myśliwi', 'Mysliwi' => 'active', 'ewid' => 'active', 'task'=>$task]) ;
	}
	public function show($id)
	{
		$czl = DB::select('SELECT * FROM ewid_czlonkowie WHERE id like '.$id.'');
		$psy = DB::select('SELECT * FROM ewid_psy WHERE wlasciciel like '.$id.'');
		$bron = DB::select('SELECT * FROM ewid_bron WHERE wlasciciel like '.$id.'');
		$urz = DB::select('SELECT u.*FROM gosp_urzadzenia u WHERE opiekun like '.$id.'');
		$zad = DB::select('SELECT * FROM gosp_zadania WHERE dla like '.$id.'');
		return view('ewid.mysliwi.show',[ 'czl'=>$czl,'psy'=>$psy, 'bron'=>$bron, 'urz'=>$urz, 'zad'=>$zad, 'bc'=>' > Ewidencja > Myśliwi', 'Mysliwi' => 'active', 'ewid' => 'active']) ;
	}
}
