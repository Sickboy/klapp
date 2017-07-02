@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ewid
        <small>Psy</small>
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
			<th>Rasa</th><th>Imię</th><th>Płeć</th><th>Barwa</th><th>Właściciel</th>
			</tr>
            	@foreach ($psy as $psys)
			<tr onclick="window.document.location='/ewid/psy/{{ $psys->id }}';">
			<td>{{ $psys->rasa }}</td>
			<td>{{ $psys->nazwa }}</td>
			<td>{{ $psys->plec }}</td>
			<td>{{ $psys->barwa}}</td>
			<td>{{ $psys->imie }} {{ $psys->nazwisko }}</td>
			</tr>
				@endforeach
			</table></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
