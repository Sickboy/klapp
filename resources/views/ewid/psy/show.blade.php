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
        <div class="col-md-5">
	    <div class="box">
         	
                    <table border="1" class="table table-bordered">
            	
            	@foreach ($psy as $psys)
			<tr>
			<td>Rasa</td><td>{{ $psys->rasa }}</td></tr><tr>
			<td>Imię</td><td>{{ $psys->nazwa }}</td></tr><tr>
			<td>Data urodzenia</td><td>{{ $psys->data_ur}}</td></tr><tr>
			<td>Płeć</td><td>{{ $psys->plec }}</td></tr><tr>
			<td>Barwa</td><td>{{ $psys->barwa }}</td></tr><tr>
			<td>Sierść</td><td>{{ $psys->siersc}}</a></td></tr><tr>
			<td>Nr chip</td><td>{{ $psys->nr_chip}}</td></tr><tr>
			<td>Nr tatuażu</td><td>{{ $psys->nr_tat}}</td></tr><tr>
			<td>Właściciel</td><td><a href="/ewid/mysliwi/{{ $psys->wlasciciel}}" index="Pokaż myśliwego">{{ $psys->imie}} {{ $psys->nazwisko}}</a></td>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
	<div class="col-md-7">
	    <div class="box">
		<center><img src='{{ asset('dist/img/'.$psys->zdjecie.'') }}' /></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
