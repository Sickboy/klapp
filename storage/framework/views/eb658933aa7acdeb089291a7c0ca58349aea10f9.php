<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel kontrolny</small>
      </h1>
      <ol class="breadcrumb">
        Home <?php echo e($bc); ?>

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
              <h3><?php  echo round(($pozysk->jelenByk+$upadki->jelenByk+$pozysk->jelenLania+$upadki->jelenLania+$pozysk->jelenCielak+$upadki->jelenCielak)/($plan->jelenByk+$plan->jelenLania+$plan->jelenCielak)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/jelenByk.gif")); ?>' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p>Pozyskano</p>
              <h3><?php  echo round(($pozysk->sarnaKoziol+$upadki->sarnaKoziol+$pozysk->sarnaKoza+$upadki->sarnaKoza+$pozysk->sarnaKozle+$upadki->sarnaKozle)/($plan->sarnaKoziol+$plan->sarnaKoza+$plan->sarnaKozle)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/sarnaKoziol.png")); ?>' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p>Pozyskano</p>
              <h3><?php  echo round(($pozysk->Dzik+$upadki->Dzik)/($plan->Dzik)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/dzik.gif")); ?>' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p>Pozyskano</p>
              <h3><?php  echo round(($pozysk->Lis+$upadki->Lis)/($plan->Lis)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/lis.gif")); ?>' />
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
              <?php $__currentLoopData = $czat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $czats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item">
                <img src="dist/img/<?php echo e($czats->image); ?>" alt="user image">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo e($czats->data); ?></small>
                    <?php echo e($czats->name); ?> <?php echo e($czats->last_name); ?>

                  </a>
                  <?php echo e($czats->tresc); ?>

                </p>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('task'); ?>
<li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
             <?php if($task_ile!='0'): ?><span class="label label-danger"><?php echo e($task_ile); ?></span><?php endif; ?>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Masz <?php echo e($task_ile); ?> aktywne zadania</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
<?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tasks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><!-- Task item -->
                    <a href="/gosp/zadania/<?php echo e($tasks->id); ?>">
                      <h3>
                        <?php echo e($tasks->tytul); ?>

                        <?php if($tasks->status=='Nowe'): ?><span class="label pull-right label-danger"><?php echo e($tasks->status); ?></span><?php endif; ?>
                        <?php if($tasks->status=='W toku'): ?><span class="label pull-right label-warning"><?php echo e($tasks->status); ?></span><?php endif; ?>
                      </h3>
                    </a>
                  </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="/gosp/zadania">Wszystkie zadania</a>
              </li>
            </ul>
          </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mail'); ?>
<li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <?php if($unread_ile!='0'): ?><span class="label label-danger"><?php echo e($unread_ile); ?></span><?php endif; ?>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Masz <?php echo e($unread_ile); ?> nieprzeczytane wiadomości</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
<?php $__currentLoopData = $unread; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unreads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><!-- start message -->
                    <a href="/mail/czytaj/<?php echo e($unreads->id); ?>">
                      <div class="pull-left">
                        <img src="<?php echo e(asset('dist/img/'.$unreads->image)); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php echo e($unreads->name); ?> <?php echo e($unreads->last_name); ?>

                        <small><i class="fa fa-clock-o"></i><?php echo e($unreads->data); ?></small>
                      </h4>
                      <p><?php echo e($unreads->tytul); ?></p>
                    </a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  </ul>
              </li>
              <li class="footer"><a href="/mail/odbiorcza">Zobacz wszystkie wiadomości</a></li>
            </ul>
          </li>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>