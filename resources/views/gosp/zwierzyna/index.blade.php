@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosppodarka łowiecka
        <small>Zwierzyna</small>
      </h1>
      <ol class="breadcrumb">
        Home {{ $bc }}
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-4">
	    <div class="box">
         	
                    <table border="1" class="table table-bordered">
            		<tr>
			<th>L.p.</th>
			<th colspan="2">Gatunek</th>
			<th>Stan w łowisku</th>
			</tr>
            		<tr>
			<td>1</td>
			<td rowspan="3">Jelenie <a href="/gosp/zwierzyna/jelen"><i class="fa fa-line-chart"></i></a></td>
			<td>Byki</td>
			<td>{{ $stan->jelenByk }}</td>
			</tr>
            		<tr>
			<td>2</td>
			<td>Łanie</td>
			<td>{{ $stan->jelenLania }}</td>
			</tr>
            		<tr>
			<td>3</td>
			<td>Cielaki</td>
			<td>{{ $stan->jelenCielak }}</td>
			</tr>
            		<tr>
			<td>4</td>
			<td rowspan="3">Sarny <a href="#"><i class="fa fa-line-chart"></i></a></td>
			<td>Kozły</td>
			<td>{{ $stan->sarnaKoziol }}</td>
			</tr>
            		<tr>
			<td>5</td>
			<td>Kozy</td>
			<td>{{ $stan->sarnaKoza }}</td>
			</tr>
            		<tr>
			<td>6</td>
			<td>Koźlęta</td>
			<td>{{ $stan->sarnaKozle }}</td>
			</tr>
            		<tr>
			<td>7</td>
			<td colspan="2">Dziki <a href="#"><i class="fa fa-line-chart"></i></a></td>
			<td>{{ $stan->Dzik }}</td>
			</tr>
            		<tr>
			<td>8</td>
			<td colspan="2">Lisy <a href="#"><i class="fa fa-line-chart"></i></a></td>
			<td>{{ $stan->Lis }}</td>
			</tr>
			</table></center>
            </div>
        </div>
	<div class="col-md-7">
	    <div class="box">
            
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
	
        </div>
    </div>
 
</div>
 </section>
@endsection

@section('js')
<!-- flot chart -->
<script src="{{ asset('plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('plugins/flot/jquery.flot.categories.min.js') }}"></script>
<script>   
/*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [["Jeleń", @php echo $stan->jelenByk + $stan->jelenLania + $stan->jelenCielak @endphp], ["Sarna", @php echo $stan->sarnaKoziol + $stan->sarnaKoza + $stan->sarnaKozle @endphp], ["Dzik", @php echo $stan->Dzik @endphp], ["Lis", @php echo $stan->Lis @endphp]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END BAR CHART */



</script>
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
