@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ewid
        <small>Mysl</small>
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
            	@foreach ($czl as $czls)
			<div class='row' style='line-height: 15px'><div class='col-md-6'><br><br><center> <z style='font-size:250%;'>{{ $czls->imie }} {{ $czls->imie_2 }} {{$czls->nazwisko }}</z><br><small>imiona, nazwisko</small><br><br></center></div>
			<div class='col-md-6'><br><center><z style='font-size:150%;'>{{ $czls->nr_ewid }}</z><br><small>numer ewidencyjny</small><br><br><z style='font-size:150%;'>{{ $czls->nr_legit }}</z><br><small>numer legitymacji</small></center></div></div>
			<div class='row'><hr /><div  style=' margin-left: 5%; margin-right: 5%;'><div class='col-md-6' ><h4>Dane osobowe</h4>Data urodzenia:&emsp;{{ $czls->data_ur }}<br>Imię ojca:&emsp;{{ $czls->imie_o }}<br>Imię matki:&emsp;{{ $czls->imie_m }}<br>Obywatelstwo:&emsp;{{ $czls->obywatel }}<br>Płeć:&emsp;{{ $czls->plec }}<br>NIP:&emsp;{{ $czls->nip }}<br>PESEL:&emsp;{{ $czls->pesel }}<br>Numer dowodu/paszportu:&emsp;{{ $czls->nr_do }}<br>Data wygaśnięcia uprawnień:&emsp;{{ $czls->data_wup }}<br></div>
			<div class='col-md-6'><h4>Adres do korespondencji</h4>Ulica/numer domu:&emsp;{{ $czls->ulica_nr }}<br>Kod pocztowy:&emsp;{{ $czls->kod_pocztowy }}<br>Miejscowość:&emsp;{{ $czls->miejscowosc }}<br>Województwo:&emsp;{{ $czls->woj }}<br>Kraj:&emsp;{{ $czls->kraj }}<br></div></div></div>
			<div class='row'><div  style=' margin-left: 5%; margin-right: 5%;'><div class='col-md-6' ><h4>Dane kontaktowe</h4>Telefon domowy:&emsp;{{ $czls->tel_d }}<br>Telefon komórkowy:&emsp;{{ $czls->tel_k }}<br>Telefon służbowy:&emsp;{{ $czls->tel_p }}<br>Adres email:&emsp;{{ $czls->email }}<br></div>
			<div class='col-md-6'><h4>Informacje zawodowe</h4>Wykształcenie:&emsp;{{ $czls->wyksztalcenie }}<br>Zawód:&emsp;{{ $czls->zawod }}<br>Firma:&emsp;{{ $czls->firma }}<br>Stanowisko:&emsp;{{ $czls->stanowisko }}<br><br></div></div></div>
				
			</tr>
				@endforeach
			</table></center>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-5">
			<div class="box">
					<div class="box-header">Psy</div>
				<table border="1" class="table table-bordered table-hover"><tr><th>Rasa</th><th>Imię</th><th>Barwa</th><th>Sierść</th></tr>
				@foreach ($psy as $psys)
					<tr  onclick="window.document.location='/ewid/psy/{{ $psys->id }}';"><td>{{ $psys->rasa }}</td><td>{{ $psys->nazwa }}</td><td>{{ $psys->barwa }}</td><td>{{ $psys->siersc }}</td></tr>
				@endforeach</table>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
					<div class="box-header">Broń</div>
				<table border="1" class="table table-bordered table-hover"><tr><th>Typ</th><th>Marka</th><th>Kaliber</th><th>Numer</th><th>Rok prod</th></tr>
				@foreach ($bron as $brons)
					<tr><td>{{ $brons->typ }}</td><td>{{ $brons->marka }}</td><td>{{ $brons->kaliber }}</td><td>{{ $brons->nr }}</td><td>{{ $brons->prod }}</td></tr>
				@endforeach</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="box">
					<div class="box-header">Urządzenia pod opieką</div>
				<table border="1" class="table table-bordered table-hover"><tr><th>Typ</th><th>Numer</th><th>Nazwa</th><th>GPS</th></tr>
				@foreach ($urz as $urzs)
					<tr onclick="window.document.location='/gosp/urzadzenia/{{ $urzs->id }}';"><td>{{ $urzs->typ }}</td><td>{{ $urzs->numer }}</td><td>{{ $urzs->nazwa }}</td><td>{{ $urzs->gps }}</td></tr>
				@endforeach</table>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
					<div class="box-header">Zadania (ostatnie 5)</div>
				<table border="1" class="table table-bordered table-hover"><tr><th>Status</th><th>Utworzone</th><th>Zakończone</th><th>Tytuł</th></tr>
				@foreach ($zad as $zads)
					<tr onclick="window.document.location='/gosp/zadania/{{ $zads->id }}';"><td>{{ $zads->status }}</td><td>{{ $zads->utworzony }}</td><td>{{ $zads->zakonczony }}</td><td>{{ $zads->tytul }}</td></tr>
				@endforeach</table>
			</div>
		</div>
	</div>
</div>
 </section>
@endsection
