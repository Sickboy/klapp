<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Urzadzenia extends Controller
{
    public function index()
    {
	$urz = DB::select('SELECT u.*, c.imie, c.nazwisko FROM gosp_urzadzenia u JOIN ewid_czlonkowie c ON u.opiekun = c.id ');
	return view('gosp.urzadzenia.index',[ 'urz'=>$urz,  'bc'=>' > Gospodarka łowiecka > Urządzenia', 'Urzadzenia' => 'active', 'gosp' => 'active']) ;
    }
    public function show($id)
    {
	$show = DB::select('SELECT u.*, c.imie, c.nazwisko FROM gosp_urzadzenia u JOIN ewid_czlonkowie c ON u.opiekun = c.id  WHERE u.id = '.$id.'');
	return view('gosp.urzadzenia.show',[ 'show'=>$show,  'bc'=>' > Gospodarka łowiecka > Urządzenia', 'Urzadzenia' => 'active', 'gosp' => 'active']) ;
    }
}
