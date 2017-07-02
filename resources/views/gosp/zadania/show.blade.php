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
	    <div class="box">@foreach ($show as $shows)
         	<div class='box-header'>Zadanie numer {{ $shows->id }}: {{ $shows->tytul }}</div>
                    <table border="1" class="table table-bordered">
            	
            	
			<tr>
			<td>Wykonujący</td><td>{{ $shows->imie }} {{ $shows->nazwisko }}</td></tr><tr>
			<td>Status</td><td>{{ $shows->status }}</td></tr><tr>
			<td>Utworzony</td><td>{{ $shows->utworzony }}</td></tr><tr>
			<td>Zakończony</td><td>{{ $shows->zakonczony }}</td></tr><tr>
			<td>Zlecił</td><td>{{ $shows->przez}}</td></tr><tr>
			<td>Treść</td><td>{{ $shows->tresc }}</td></tr><tr>
			<td>Urządzenie</td><td>{{ $shows->typ}} {{ $shows->numer}} {{ $shows->nazwa}}</td></tr><tr>
			<td>Przepracowane godziny</td><td>{{ $shows->godzin }}</td></tr><tr>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
	<div class="col-md-7">
	    <div class="box">
			<div class='box-header'>Protokół z wykonania prac</div>
            </div>
            
        </div>
    </div>
 
</div>
 </section>
@endsection
