<?php $__env->startSection('content'); ?>
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>list</small>
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
		    <div class="box">
			<table class="table table-bordered">
			<tr><td>ID</td><td>Name</td><td>Last name</td><td>Email</td><td>Create at</td></tr>
            		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 		<tr>
		    		<td valign="baseline"><?php echo e($user->id); ?></td>
		    		<td valign="middle"><?php echo e($user->name); ?></td>
				<td valign="middle"><?php echo e($user->last_name); ?></td>
				<td valign="middle"><?php echo e($user->email); ?></td>
				<td valign="middle"><?php echo e($user->created_at); ?></td>
				<td><a href="/users/add"><i class="fa fa-plus-square-o fa-2x"></i></a>&nbsp<a href="/users/edit/<?php echo e($user->id); ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
&nbsp<a href="/users/delete/<?php echo e($user->id); ?>"><i class="fa fa-minus-square-o fa-2x"></i></a></td>
         			</tr>
         		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		     </div>
    		 </div>
	      </div>
	   </div>
 	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>