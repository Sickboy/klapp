@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gosp
        <small>Zwierz</small>
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
      data: [["Byk", {{ $stan->jelenByk }}], ["Łania", {{ $stan->jelenLania }}], ["Cielak", {{ $stan->jelenCielak }}]],
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
