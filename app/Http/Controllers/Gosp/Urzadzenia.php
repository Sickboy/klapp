<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Urzadzenia extends Controller
{
    public function index()
    {
	$urz = DB::select('SELECT u.*, c.imie, c.nazwisko FROM gosp_urzadzenia u JOIN ewid_czlonkowie c ON u.opiekun = c.id ');
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	return view('gosp.urzadzenia.index',[ 'urz'=>$urz,  'bc'=>' > Gospodarka łowiecka > Urządzenia', 'Urzadzenia' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
    public function show($id)
    {
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
	$show = DB::select('SELECT u.*, c.imie, c.nazwisko FROM gosp_urzadzenia u JOIN ewid_czlonkowie c ON u.opiekun = c.id  WHERE u.id = '.$id.'');
	return view('gosp.urzadzenia.show',[ 'show'=>$show,  'bc'=>' > Gospodarka łowiecka > Urządzenia', 'Urzadzenia' => 'active', 'gosp' => 'active', 'task'=>$task]) ;
    }
}
