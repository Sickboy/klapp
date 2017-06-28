@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosp
        <small>Plan</small>
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
			@foreach ($plans as $plan)
         	<center>Plan łowiecki na rok {{ $plan->rok }} - wersja uproszczona<br>
			<a href="#"><u>przejdź do wersji pełnej</u></a><br><br>
                    <table border="1" class="table table-bordered">
            		<tr>
			<td>L.p.</td>
			<td colspan="2">Gatunek</td>
			<td>Stan w łowisku</td>
			<td>Planowane pozyskanie</td>
			<td>Pozyskano</td>
			<td>Upadki</td>
			<td>Pozostało</td>
			</tr>
            		<tr>
			<td>1</td>
			<td rowspan="3">Jelenie</td>
			<td>Byki</td>
			<td>{{ $stan->jelenByk }}</td>
			<td>{{ $planp->jelenByk }}</td>
			<td>{{ $pozysk->jelenByk }}</td>
			<td>{{ $upadki->jelenByk }}</td>
			<td>@php echo $planp->jelenByk - ($pozysk->jelenByk + $upadki->jelenByk); @endphp</td>
			</tr>
            		<tr>
			<td>2</td>
			<td>Łanie</td>
			<td>{{ $stan->jelenLania }}</td>
			<td>{{ $planp->jelenLania }}</td>
			<td>{{ $pozysk->jelenLania }}</td>
			<td>{{ $upadki->jelenLania }}</td>
			<td>@php echo $planp->jelenLania - ($pozysk->jelenLania + $upadki->jelenLania); @endphp</td>
			</tr>
            		<tr>
			<td>3</td>
			<td>Cielaki</td>
			<td>{{ $stan->jelenCielak }}</td>
			<td>{{ $planp->jelenCielak }}</td>
			<td>{{ $pozysk->jelenCielak }}</td>
			<td>{{ $upadki->jelenCielak }}</td>
			<td>@php echo $planp->jelenCielak - ($pozysk->jelenCielak + $upadki->jelenCielak); @endphp</td>
			</tr>
            		<tr>
			<td>4</td>
			<td rowspan="3">Sarny</td>
			<td>Kozły</td>
			<td>{{ $stan->sarnaKoziol }}</td>
			<td>{{ $planp->sarnaKoziol }}</td>
			<td>{{ $pozysk->sarnaKoziol }}</td>
			<td>{{ $upadki->sarnaKoziol }}</td>
			<td>@php echo $planp->sarnaKoziol - ($pozysk->sarnaKoziol + $upadki->sarnaKoziol); @endphp</td>
			</tr>
            		<tr>
			<td>5</td>
			<td>Kozy</td>
			<td>{{ $stan->sarnaKoza }}</td>
			<td>{{ $planp->sarnaKoza }}</td>
			<td>{{ $pozysk->sarnaKoza }}</td>
			<td>{{ $upadki->sarnaKoza }}</td>
			<td>@php echo $planp->sarnaKoza - ($pozysk->sarnaKoza + $upadki->sarnaKoza); @endphp</td>
			</tr>
            		<tr>
			<td>6</td>
			<td>Koźlęta</td>
			<td>{{ $stan->sarnaKozle }}</td>
			<td>{{ $planp->sarnaKozle }}</td>
			<td>{{ $pozysk->sarnaKozle }}</td>
			<td>{{ $upadki->sarnaKozle }}</td>
			<td>@php echo $planp->sarnaKozle - ($pozysk->sarnaKozle + $upadki->sarnaKozle); @endphp</td>
			</tr>
            		<tr>
			<td>7</td>
			<td colspan="2">Dziki</td>
			<td>{{ $stan->Dzik }}</td>
			<td>{{ $planp->Dzik }}</td>
			<td>{{ $pozysk->Dzik }}</td>
			<td>{{ $upadki->Dzik }}</td>
			<td>@php echo $planp->Dzik - ($pozysk->Dzik + $upadki->Dzik); @endphp</td>
			</tr>
            		<tr>
			<td>8</td>
			<td colspan="2">Lisy</td>
			<td>{{ $stan->Lis }}</td>
			<td>{{ $planp->Lis }}</td>
			<td>{{ $pozysk->Lis }}</td>
			<td>{{ $upadki->Lis }}</td>
			<td>@php echo $planp->Lis - ($pozysk->Lis + $upadki->Lis); @endphp</td>
			</tr>
         		@endforeach 
			</table></center>
            </div>
        </div>
    </div>
 
</div>
 </section>
@endsection
