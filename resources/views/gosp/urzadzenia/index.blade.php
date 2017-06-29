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
        <div class="col-md-11">
	    <div class="box">
         	
                    <table border="1" class="table table-bordered table-hover">
            		<tr>
			<td>Numer</td>
			<td>Nazwa</td>
			<td>Typ</td>
			<td>Rok budowy</td>
			<td>Opiekun</td>
			</tr>
            	@foreach ($urz as $urzs)
			<tr onclick="window.document.location='/gosp/urzadzenia/{{ $urzs->id }}';">
			<td>{{ $urzs->numer }}</td>
			<td>{{ $urzs->nazwa }}</td>
			<td>{{ $urzs->typ}}</td>
			<td>{{ $urzs->rokBudowy }}</td>
			<td>{{ $urzs->imie }} {{ $urzs->nazwisko }}</td>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
