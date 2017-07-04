<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class Zadania extends Controller
{
    public function index()
    {
	$zad = DB::select('SELECT z.*, c.imie, c.nazwisko, u.numer, u.nazwa, u.typ FROM gosp_zadania z JOIN ewid_czlonkowie c ON z.dla = c.id JOIN gosp_urzadzenia u ON z.urzadzenie=u.id');
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	return view('gosp.zadania.index',[ 'zad'=>$zad,  'bc'=>' > Gospodarka łowiecka > Zadania', 'Zadania' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
    public function show($id)
    {
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	$show = DB::select('SELECT z.*, c.imie, c.nazwisko, u.numer, u.nazwa, u.typ FROM gosp_zadania z JOIN ewid_czlonkowie c ON z.dla = c.id JOIN gosp_urzadzenia u ON z.urzadzenie=u.id AND z.id = '.$id.'');
	return view('gosp.zadania.show',[ 'show'=>$show,  'bc'=>' > Gospodarka łowiecka > Zadania', 'Zadania' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
}
