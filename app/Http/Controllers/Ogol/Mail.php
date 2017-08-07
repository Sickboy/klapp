<?php

namespace App\Http\Controllers\Ogol;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class Mail extends Controller
{
    public function index()
    {
    	$mail = DB::select('SELECT p.*, c.name, c.last_name FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' ORDER BY p.id DESC '); 
    	$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
    	return view('ogol.mail.index',['mail' => $mail, 'bc'=>' > Ogólne > @mail',  'Mail' => 'active','ogol' => 'active', 'task'=>$task]) ; 
    }
    public function read($id)
	{
		$mail = DB::select('SELECT p.*, c.name, c.last_name FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' AND p.id='.$id.' '); 
    	$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
    	DB::table('ogol_mail')->where('id', $id)->update(['read' => 1]);
    	return view('ogol.mail.read',['mail' => $mail, 'bc'=>' > Ogólne > @mail',  'Mail' => 'active','ogol' => 'active', 'task'=>$task]) ; 
    }
}
