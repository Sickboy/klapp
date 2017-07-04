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
