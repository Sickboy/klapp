@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        @mail
        <small></small>
      </h1>
      <ol class="breadcrumb">
        Home {{ $bc }}
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Utwórz</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Foldery</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="/ogol/mail/odbiorcza"><i class="fa fa-inbox"></i> Odbiorcza
                <li><a href="/ogol/mail/nadawcza"><i class="fa fa-envelope-o"></i> Nadawcza</a></li>
                 <li><a href="/ogol/mail/kosz"><i class="fa fa-trash-o"></i> Kosz</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Oznaczenia</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-envelope text-red"></i> Nieprzeczytana</a></li>
                <li><a href="#"><i class="fa fa-envelope-open text-green"></i> Przeczytana</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        @foreach ($mail as $mails)
        <div class="col-md-9">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>{{ $mails->tytul }}</h3>
                <h5>od: {{ $mails->name }} {{ $mails->last_name }}
                  <span class="mailbox-read-time pull-right">{{ $mails->data }}</span></h5>
              </div>
              <div class="mailbox-read-message">
                {{ $mails->tresc }}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Odpowiedz</button>
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Przekaż</button>
              </div>
              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Usuń</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Drukuj</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        @endforeach
      </div>
    </section>
    
    
    <!-- /.content -->
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
