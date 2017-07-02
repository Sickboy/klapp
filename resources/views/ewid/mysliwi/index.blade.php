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
			<th>Numer ewid</th>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>Członek</th>
			<th>W kole od</th>
			</tr>
            	@foreach ($czl as $czls)
			<tr onclick="window.document.location='/ewid/mysliwi/{{ $czls->id }}';">
			<td>{{ $czls->nr_ewid }}</td>
			<td>{{ $czls->imie }}</td>
			<td>{{ $czls->nazwisko }}</td>
			<td>@if ($czls->czlonek == 1)
				<center><i class="fa fa-check-square-o" aria-hidden="true"></i></center>
				@endif
			</td>
			<td>{{ $czls->w_kole_od }}</td>
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
             <!-- <span class="label label-danger">1</span> -->
            </a>
            <ul class="dropdown-menu">
              <li class="header">Twoje zadania</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
@foreach ($task as $tasks)
                  <li><!-- Task item -->
                    <a href="/gosp/zadania/{{ $tasks->id }}">
                        {{ $tasks->tytul }} <span class="label label-danger">NOWE</span>
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
