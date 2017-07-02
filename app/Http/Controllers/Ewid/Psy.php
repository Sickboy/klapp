<?php

namespace App\Http\Controllers\Ewid;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Psy extends Controller
{
    public function index()
    {
		$psy = DB::select('SELECT p.*, c.imie, c.nazwisko FROM ewid_psy p JOIN ewid_czlonkowie c ON p.wlasciciel = c.id');
		return view('ewid.psy.index',[ 'psy'=>$psy, 'bc'=>' > Ewidencja > Psy', 'Psy' => 'active', 'ewid' => 'active']) ;
	}
	public function show($id)
	{
		$psy = DB::select('SELECT p.*, c.imie, c.nazwisko FROM ewid_psy p JOIN ewid_czlonkowie c ON p.wlasciciel = c.id AND p.id = '.$id.'');
		return view('ewid.psy.show',[ 'psy'=>$psy, 'bc'=>' > Ewidencja > Psy', 'Psy' => 'active', 'ewid' => 'active']) ;
	}
}
