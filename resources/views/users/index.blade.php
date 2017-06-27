@extends('layouts.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>list</small>
		</h1>
		<ol class="breadcrumb">
			Home {{ $bc }}
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	   <div class="container">
	      <div class="row">
		 <div class="col-md-11">
		    <div class="box">
			<table class="table table-bordered">
			<tr><td>ID</td><td>Name</td><td>Last name</td><td>Email</td><td>Create at</td></tr>
            		@foreach ($users as $user)
		 		<tr>
		    		<td valign="baseline">{{ $user->id }}</td>
		    		<td valign="middle">{{ $user->name }}</td>
				<td valign="middle">{{ $user->last_name }}</td>
				<td valign="middle">{{ $user->email }}</td>
				<td valign="middle">{{ $user->created_at }}</td>
				<td><a href="/users/add"><i class="fa fa-plus-square-o fa-2x"></i></a>&nbsp<a href="/users/edit/{{ $user->id }}"><i class="fa fa-pencil-square-o fa-2x"></i></a>
&nbsp<a href="/users/delete/{{ $user->id }}"><i class="fa fa-minus-square-o fa-2x"></i></a></td>
         			</tr>
         		@endforeach
			</table>
		     </div>
    		 </div>
	      </div>
	   </div>
 	</section>
@endsection
