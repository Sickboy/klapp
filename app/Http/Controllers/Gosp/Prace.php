<?php

namespace App\Http\Controllers\Gosp;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Prace extends Controller
{
    public function index()
    {
		$prace = DB::select('SELECT p.*, c.imie, c.nazwisko FROM gosp_prace p JOIN ewid_czlonkowie c ON p.prowadzil=c.id');
		return view('gosp.prace.index',[ 'prace'=>$prace, 'bc'=>' > Gospodarka łowiecka > Prace', 'Prace' => 'active', 'gosp' => 'active']) ;
	}
	public function show($id)
	{
		$tab[0]='';
		$prace = DB::select('SELECT p.*, c.imie, c.nazwisko FROM gosp_prace p JOIN ewid_czlonkowie c ON p.prowadzil=c.id');
		foreach ($prace as $praces)
		{
			$ucz = explode(':', $praces->uczestnicy);
			//print_r($ucz);
			for($i=0;$i<count($ucz);$i++)
			{
			$tmp = DB::select('SELECT imie,nazwisko FROM ewid_czlonkowie WHERE id='.$ucz[$i].'');
			foreach ($tmp as $tmps)
			{
				$tab[$i] = $tmps->imie.' '.$tmps->nazwisko;
			}}
		}
		//print_r($tab);
		//$uczest = DB::select('SELECT imie,nazwisko FROM ewid_czlonkowie WHERE');
		return view('gosp.prace.show',[ 'prace'=>$prace, 'tab'=>$tab, 'bc'=>' > Gospodarka łowiecka > Prace', 'Prace' => 'active', 'gosp' => 'active']) ;
	}
}
