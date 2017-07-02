<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        Home <?php echo e($bc); ?>

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
              <h3><?php  echo round(($pozysk->jelenByk+$upadki->jelenByk+$pozysk->jelenLania+$upadki->jelenLania+$pozysk->jelenCielak+$upadki->jelenCielak)/($plan->jelenByk+$plan->jelenLania+$plan->jelenCielak)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/jelenByk.gif")); ?>' />
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
              <h3><?php  echo round(($pozysk->sarnaKoziol+$upadki->sarnaKoziol+$pozysk->sarnaKoza+$upadki->sarnaKoza+$pozysk->sarnaKozle+$upadki->sarnaKozle)/($plan->sarnaKoziol+$plan->sarnaKoza+$plan->sarnaKozle)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/sarnaKoziol.png")); ?>' />
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
              <h3><?php  echo round(($pozysk->Dzik+$upadki->Dzik)/($plan->Dzik)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/dzik.gif")); ?>' />
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
              <h3><?php  echo round(($pozysk->Lis+$upadki->Lis)/($plan->Lis)*100);  ?>%</h3>
            </div>
            <div class="icon">
              <img src='<?php echo e(asset("dist/img/ico/lis.gif")); ?>' />
            </div>
            <a href="/gosp/plan" class="small-box-footer">Więcej informacji <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div>
</div>
 </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('task'); ?>
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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>