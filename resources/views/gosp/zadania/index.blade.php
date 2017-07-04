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

@section('task')
<li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
             <span class="label label-danger">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Twoje zadania</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
@foreach ($task as $tasks)
                  <li><!-- Task item -->
                    <a href="/gosp/zadania/{{ $tasks->id }}">
                      <h3>
                        {{ $tasks->tytul }}
                        @if($tasks->status=='Nowe')<span class="label pull-right label-danger">{{ $tasks->status }}</span>@endif
                        @if($tasks->status=='W toku')<span class="label pull-right label-warning">{{ $tasks->status }}</span>@endif
                      </h3>
                    </a>
                  </li>
@endforeach
                   <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="/gosp/zadania">Wszystkie zadania</a>
              </li>
            </ul>
          </li>
@endsection
