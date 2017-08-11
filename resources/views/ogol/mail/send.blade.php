@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        @mail
        <small>Elementy wysłane</small>
      </h1>
      <ol class="breadcrumb">
        Home {{ $bc }}
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-3">
          <a href="/mail/utworz/0" class="btn btn-primary btn-block margin-bottom">Utwórz</a>

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
                <li><a href="/mail/odbiorcza"><i class="fa fa-inbox"></i> Odbiorcza
                <li><a href="/mail/nadawcza"><i class="fa fa-envelope-o"></i> Nadawcza</a></li>
                 <li><a href="/mail/kosz"><i class="fa fa-trash-o"></i> Kosz</a></li>
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
 <div class="col-md-9">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  @foreach ($mail as $mails)
                  <tr onclick="window.document.location='/mail/czytaj/{{ $mails->id }}';">
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star">
							@php if($mails->read == 0)
										{echo '<i class="fa fa-envelope text-red"></i>';}
									else
										{echo '<i class="fa fa-envelope-open text-green"></i>';}
							@endphp
                    <td class="mailbox-name">{{ $mails->name }} {{ $mails->last_name }}</td>
                    <td class="mailbox-subject">{{ $mails->tytul }}</td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{ $mails->data }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
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
