@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosp
        <small>Urz</small>
      </h1>
      <ol class="breadcrumb">
        Home {{ $bc }}
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-5">
	    <div class="box">
         	
                    <table border="1" class="table table-bordered">
            	
            	@foreach ($show as $shows)
			<tr>
			<td>Numer</td><td>{{ $shows->numer }}</td></tr><tr>
			<td>Nazwa</td><td>{{ $shows->nazwa }}</td></tr><tr>
			<td>Typ</td><td>{{ $shows->typ}}</td></tr><tr>
			<td>Rok budowy</td><td>{{ $shows->rokBudowy }}</td></tr><tr>
			<td>Opiekun</td><td>{{ $shows->imie }} {{ $shows->nazwisko }}</td></tr><tr>
			<td>Koordynaty</td><td>{{ $shows->gps}}</td></tr><tr>
			<td>Zadania</td><td>{{ $shows->taskId}}</td>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
	<div class="col-md-7">
	    <div class="box">
		<center><img src='{{ asset('dist/img/'.$shows->zdjecie.'') }}' /></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
