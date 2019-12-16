<?php $__env->startSection('acti','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Xác nhận tham gia hoạt động</h1>
		</div>
	</div>
	<?php echo e(sss('delactivate')); ?>

	<?php echo e(sss('addactivate')); ?>

	<?php echo e(sss('confirmActivate')); ?>

	<div class="row">
		<div class="col-md-12">
			
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Họ và tên</th>
								<th>Ngày sinh</th>
								<th>Giới tính</th>
								<th><a class="btn btn-info" href="admin/activate/add">Thêm</a> </th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($value->getChildrenJoinActivate->fullname); ?></td>
								<td><?php echo e($value->getChildrenJoinActivate->birthday); ?></td>
								<td><?php echo e(gender($value->getChildrenJoinActivate->gender)); ?></td>
								<td><a class="btn btn-success" href="admin/activate/pending/confirm/<?php echo e($value->getChildrenJoinActivate->id); ?>">Xác nhận</a>
									
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/activate/pending.blade.php ENDPATH**/ ?>