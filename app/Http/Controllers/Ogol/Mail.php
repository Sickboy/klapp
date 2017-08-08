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
    	$task_ile = DB::table('gosp_zadania')->where('dla', Auth::user()->id)->where('status', 'Nowe')->orwhere('status', 'W toku')->count();
    	$unread = DB::select('SELECT p.*, c.name, c.last_name, c.image FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' AND p.read=0 ORDER BY p.id DESC');
    	$unread_ile = DB::table('ogol_mail')->where('do', Auth::user()->id)->where('read', 0)->count();
    	return view('ogol.mail.index',['mail' => $mail, 'bc'=>' > Ogólne > @mail > Skrzynka odbiorcza',  'Mail' => 'active','ogol' => 'active', 'task'=>$task, 'task_ile'=>$task_ile ,'unread'=>$unread, 'unread_ile'=>$unread_ile]) ; 
    }
    public function read($id)
	{
		DB::table('ogol_mail')->where('id', $id)->update(['read' => 1]);		
		$mail = DB::select('SELECT p.*, c.name, c.last_name FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' AND p.id='.$id.' '); 
    	$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
    	$task_ile = DB::table('gosp_zadania')->where('dla', Auth::user()->id)->where('status', 'Nowe')->orwhere('status', 'W toku')->count();
    	$unread = DB::select('SELECT p.*, c.name, c.last_name, c.image FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' AND p.read=0 ORDER BY p.id DESC');
    	$unread_ile = DB::table('ogol_mail')->where('do', Auth::user()->id)->where('read', 0)->count();
    	
    	return view('ogol.mail.read',['mail' => $mail, 'bc'=>' > Ogólne > @mail > Podgląd wiadomości',  'Mail' => 'active','ogol' => 'active', 'task'=>$task, 'task_ile'=>$task_ile ,'unread'=>$unread, 'unread_ile'=>$unread_ile]) ; 
    }
    public function write()
	{
		$user = DB::select('SELECT * from users');		
		$task = DB::select('SELECT * FROM gosp_zadania WHERE dla='.Auth::user()->id.' AND status="Nowe" OR status="W toku" ');
    	$task_ile = DB::table('gosp_zadania')->where('dla', Auth::user()->id)->where('status', 'Nowe')->orwhere('status', 'W toku')->count();
    	$unread = DB::select('SELECT p.*, c.name, c.last_name, c.image FROM ogol_mail p JOIN users c ON p.od=c.id WHERE p.do='.Auth::user()->id.' AND p.read=0 ORDER BY p.id DESC');
    	$unread_ile = DB::table('ogol_mail')->where('do', Auth::user()->id)->where('read', 0)->count();
    	return view('ogol.mail.write',['user'=>$user, 'bc'=>' > Ogólne > @mail -> Utwórz',  'Mail' => 'active','ogol' => 'active', 'task'=>$task, 'task_ile'=>$task_ile ,'unread'=>$unread, 'unread_ile'=>$unread_ile]) ; 
    }
		public function send(Request $request)
    {
    	DB::table('ogol_mail')->insert(['read'=>0,'tytul'=>$request->input('tytul'),'do'=>$request->input('do'), 'od' => Auth::user()->id, 'tresc' => $request->input('tresc'), 'data'=> date('H:i:s d.m.Y')]);
		return Redirect::action('Ogol\Mail@index');    
    }
}
