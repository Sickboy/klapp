@extends('layouts.app')

@section('content')
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
<div class="row">	
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
</div>
<div class="row">
<section class="col-lg-12">
<div class="box">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>
              <h3 class="box-title">Chat</h3>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              @foreach ($czat as $czats)
              <div class="item">
                <img src="dist/img/{{ $czats->image }}" alt="user image">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ $czats->data }}</small>
                    {{ $czats->name }} {{ $czats->last_name }}
                  </a>
                  {{ $czats->tresc }}
                </p>
              </div>
              @endforeach
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              
              <form action = "/czat/insert" method = "post">
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">
					<div class="input-group">                
                <input name="tresc" class="form-control" placeholder="Napisz wiadomość...">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success" ><i class="fa fa-plus"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
          </section>
</div>
    </section>
    
    
    <!-- /.content -->
@endsection

@section('task')
<li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
             @if($task_ile!='0')<span class="label label-danger">{{ $task_ile }}</span>@endif
            </a>
            <ul class="dropdown-menu">
              <li class="header">Masz {{ $task_ile }} aktywne zadania</li>
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

@section('mail')
<li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              @if($unread_ile!='0')<span class="label label-danger">{{ $unread_ile }}</span>@endif
            </a>
            <ul class="dropdown-menu">
              <li class="header">Masz {{ $unread_ile }} nieprzeczytane wiadomości</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
@foreach ($unread as $unreads)
						<li><!-- start message -->
                    <a href="/mail/czytaj/{{ $unreads->id }}">
                      <div class="pull-left">
                        <img src="{{ asset('dist/img/'.$unreads->image) }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        {{ $unreads->name }} {{ $unreads->last_name }}
                        <small><i class="fa fa-clock-o"></i>{{ $unreads->data }}</small>
                      </h4>
                      <p>{{ $unreads->tytul }}</p>
                    </a>
                  </li>
                @endforeach                  </ul>
              </li>
              <li class="footer"><a href="/mail/odbiorcza">Zobacz wszystkie wiadomości</a></li>
            </ul>
          </li>

@endsection
