<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$rok = '2017/2018';
        $planid = DB::table('gosp_plan')->where('rok', $rok)->value('planowane');
		$plan = DB::table('gosp_zwierzyna')->where('id', $planid)->first();
		$upadkid = DB::table('gosp_plan')->where('rok', $rok)->value('upadki');
		$upadki = DB::table('gosp_zwierzyna')->where('id', $upadkid)->first();
		$pozyskid = DB::table('gosp_plan')->where('rok', $rok)->value('pozyskano');
		$pozysk = DB::table('gosp_zwierzyna')->where('id', $pozyskid)->first();
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
		$czat = DB::select('SELECT p.*, c.name, c.last_name, c.image FROM ogol_czat p JOIN users c ON p.autor=c.id ORDER BY p.id DESC LIMIT 15');      
      return view('home', [ 'czat'=>$czat, 'plan'=>$plan, 'upadki'=>$upadki, 'pozysk'=>$pozysk, 'bc' => '', 'Dashboard' => 'active', 'task'=>$task]);
    }
    public function insert(Request $request)
    {
    	DB::table('ogol_czat')->insert(['autor' => Auth::user()->id, 'tresc' => $request->input('tresc'), 'data'=> date('H:i:s d.m.Y')]);
		return Redirect::action('HomeController@index');    
    }
}
