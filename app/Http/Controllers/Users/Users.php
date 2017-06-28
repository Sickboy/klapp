<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Users extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users') ;
      	return view('users.index',['users'=>$users, 'bc'=>' > Users', 'Users'=>'activate' ,'ust' => 'activate']) ;
    }
    public function add()
    {
        return view('users.add', ['bc' => " > Users > Add", 'Users'=>'activate' ,'ust' => 'activate']) ;
    }
    public function insert(Request $request)
    {
        //DB::insert('insert into users (name, last_name, email, password, created_at) values(?) ',[$request->input('name'), $request->input('last_name'), $request->input('email'), $request->input('password'), $request->input('created_ad')] );
      	//echo "Record inserted successfully.<br/>";
      	//echo '<a href = "/insert">Click Here</a> to go back.';

	User::create([
            'name' => $request->input('name'),
	    'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
	    'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);
	return Redirect::action('Users\Users@index');
    }
    public function delete($id) 
    {
      DB::delete('delete from users where id = ?',[$id]) ;
      return Redirect::action('Users\Users@index');
    }
    public function edit($id) 
    {
      $users = DB::table('users')->where('id', $id)->first();
      return view('users.edit',['users'=>$users, 'bc'=>" > Users > Edit", 'Users'=>'activate' ,'ust' => 'activate']) ;
    }
    public function update(Request $request)
    {
        //DB::insert('insert into users (name, last_name, email, password, created_at) values(?) ',[$request->input('name'), $request->input('last_name'), $request->input('email'), $request->input('password'), $request->input('created_ad')] );
      	DB::table('users')
            ->where('id', $request->input('id'))
            ->update(array('name' => $request->input('name'), 'last_name' => $request->input('last_name'), 'email' => $request->input('email'), 'role' => $request->input('role')));
	return Redirect::action('Users\Users@index');
    }
}
