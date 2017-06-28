@extends('layouts.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>add</small>
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
			<div class="box-body">
		    <form action = "/users/insert" method = "post">
			 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

			<div class="form-group">
		          <label for="exampleInputEmail1">Name</label>
		          <input type="text" class="form-control" id="exampleInputEmail1" name='name'>
		        </div>

			<div class="form-group">
		          <label for="exampleInputEmail1">Last name</label>
		          <input type="text" class="form-control" id="exampleInputEmail1" name='last_name'>
		        </div>

			<div class="form-group">
		          <label for="exampleInputEmail1">Email</label>
		          <input type="email" class="form-control" id="exampleInputEmail1" name='email'>
		        </div>

			<div class="form-group">
		          <label>Role</label>
		          <select name='role' class="form-control">
		            <option>S</option>
		            <option>A</option>
		          </select>
                	</div>

			<div class="form-group">
		          <label for="exampleInputEmail1">Password</label>
		          <input type="password" class="form-control" id="exampleInputEmail1" name='password'>
		        </div>
		      
                	  <button type="submit" class="btn btn-primary">Submit</button>
              		
			
      </form>	   </div>
    		 </div>
	      </div>
	   </div>
 	</section>
@endsection
