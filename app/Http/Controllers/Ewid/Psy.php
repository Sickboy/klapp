<?php

namespace App\Http\Controllers\Ewid;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Psy extends Controller
{
    public function index()
    {
		$psy = DB::select('SELECT p.*, c.imie, c.nazwisko FROM ewid_psy p JOIN ewid_czlonkowie c ON p.wlasciciel = c.id');
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
		return view('ewid.psy.index',[ 'psy'=>$psy, 'bc'=>' > Ewidencja > Psy', 'Psy' => 'active', 'ewid' => 'active', 'task'=>$task]) ;
	}
	public function show($id)
	{
		$psy = DB::select('SELECT p.*, c.imie, c.nazwisko FROM ewid_psy p JOIN ewid_czlonkowie c ON p.wlasciciel = c.id AND p.id = '.$id.'');
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
		return view('ewid.psy.show',[ 'psy'=>$psy, 'bc'=>' > Ewidencja > Psy', 'Psy' => 'active', 'ewid' => 'active', 'task'=>$task]) ;
	}
}
