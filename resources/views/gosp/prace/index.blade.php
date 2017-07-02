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
			<th>Kiedy</th>
			<th>Gdzie</th>
			<th>Prowadzący</th>
			<th>Ile godzin</th>
			</tr>
            	@foreach ($prace as $praces)
			<tr onclick="window.document.location='/gosp/prace/{{ $praces->id }}';">
			<td>{{ $praces->kiedy }}</td>
			<td>{{ $praces->gdzie }}</td>
			<td>{{ $praces->imie }} {{ $praces->nazwisko }}</td>
			<td>{{ $praces->godzin}}</td>
			</tr>
				@endforeach
			</table></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
