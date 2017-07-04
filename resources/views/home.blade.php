@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel kontrolny</small>
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p>Pozyskano</p>
              <h3>@php echo round(($pozysk->jelenByk+$upadki->jelenByk+$pozysk->jelenLania+$upadki->jelenLania+$pozysk->jelenCielak+$upadki->jelenCielak)/($plan->jelenByk+$plan->jelenLania+$plan->jelenCielak)*100); @endphp%</h3>
            </div>
            <div class="icon">
              <img src='{{ asset("dist/img/ico/jelenByk.gif") }}' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p>Pozyskano</p>
              <h3>@php echo round(($pozysk->sarnaKoziol+$upadki->sarnaKoziol+$pozysk->sarnaKoza+$upadki->sarnaKoza+$pozysk->sarnaKozle+$upadki->sarnaKozle)/($plan->sarnaKoziol+$plan->sarnaKoza+$plan->sarnaKozle)*100); @endphp%</h3>
            </div>
            <div class="icon">
              <img src='{{ asset("dist/img/ico/sarnaKoziol.png") }}' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p>Pozyskano</p>
              <h3>@php echo round(($pozysk->Dzik+$upadki->Dzik)/($plan->Dzik)*100); @endphp%</h3>
            </div>
            <div class="icon">
              <img src='{{ asset("dist/img/ico/dzik.gif") }}' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p>Pozyskano</p>
              <h3>@php echo round(($pozysk->Lis+$upadki->Lis)/($plan->Lis)*100); @endphp%</h3>
            </div>
            <div class="icon">
              <img src='{{ asset("dist/img/ico/lis.gif") }}' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
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
