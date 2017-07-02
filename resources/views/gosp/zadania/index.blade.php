@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosp
        <small>Prac</small>
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
			<th>Utworzony</th>
			<th>Przez</th>
			<th>Dla</th>
			<th>Status</th>
			<th>Tytuł</th>
			<th>Urządzenie</th>
			<th>Zakończony</th>
			</tr>
            	@foreach ($zad as $zads)
			<tr onclick="window.document.location='/gosp/zadania/{{ $zads->id }}';">
			<td>{{ $zads->utworzony }}</td>
			<td>{{ $zads->przez }}</td>
			<td>{{ $zads->imie }} {{ $zads->nazwisko }}</td>
			<td>{{ $zads->status}}</td>
			<td>{{ $zads->tytul}}</td>
			<td>{{ $zads->typ}} {{ $zads->numer}} {{ $zads->nazwa}}</td>
			<td>{{ $zads->zakonczony}}</td>
			</tr>
				@endforeach
			</table></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
