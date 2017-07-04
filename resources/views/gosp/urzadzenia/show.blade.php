@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gospodarka łowiecka
        <small>Urządzenia</small>
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
			<td>Koordynaty</td><td><a href="#" title="Pokaż na mapie">{{ $shows->gps}}</a></td></tr><tr>
			<td>Zadania</td><td>{{ $shows->taskId}}</td>
			</tr>
		@endforeach
			</table></center>
            </div>
        </div>
	<div class="col-md-6">
	    <div class="box">
		<center><img src='{{ asset('dist/img/'.$shows->zdjecie.'') }}' width="60%" height="60%" /></center>
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
