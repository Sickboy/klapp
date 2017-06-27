@extends('layouts.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>edit</small>
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
            		
		 		<form action = "/users/update" method = "post">
			 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

			
		          <input type="hidden" class="form-control" id="id" name="id" value="{{ $users->id }}" >
		        

			<div class="form-group">
		          <label for="exampleInputEmail1">Name</label>
		          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $users->name }}">
		        </div>

			<div class="form-group">
		          <label for="exampleInputEmail1">Last name</label> 
		          <input type="text" class="form-control" id="exampleInputEmail1" name="last_name" value="{{ $users->last_name }}">
		        </div>

			<div class="form-group">
		          <label for="exampleInputEmail1">Email</label>
		          <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $users->email }}">
		        </div>
		      
                	  <button type="submit" class="btn btn-primary">Submit</button>
              		
			
      			</form>
         		
			
		     </div>
    		 </div>
	      </div>
	   </div>
 	</section>
@endsection
