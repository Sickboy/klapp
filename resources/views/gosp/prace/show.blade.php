@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosp
        <small>Prace</small>
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
         	<div class="box-header">Szczegół prac</div>
                    <table border="1" class="table table-bordered">
            	
            	@foreach ($prace as $praces)
			<tr>
			<td>Kiedy</td><td>{{ $praces->kiedy }}</td></tr><tr>
			<td>Gdzie</td><td>{{ $praces->gdzie }}</td></tr><tr>
			<td>Prowadzil</td><td>{{ $praces->imie}} {{ $praces->nazwisko}}</td></tr><tr>
			<td>Ilość godzin</td><td>{{ $praces->godzin }}</td></tr><tr>
			<td>Początek</td><td>{{ $praces->poczatek }}</td></tr><tr>
			<td>Koniec</td><td>{{ $praces->koniec}}</a></td></tr><tr>
			<td>Opis</td><td>{{ $praces->opis}}</td></tr><tr>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
	<div class="col-md-6">
	    <div class="box">
         	<div class="box-header">Uczestnicy</div>
		<table border="1" class="table table-bordered">
            	
            	@foreach ($tab as $tabs)
			<tr><td>{{ $tabs }}</td></tr>
				@endforeach
			</table>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
