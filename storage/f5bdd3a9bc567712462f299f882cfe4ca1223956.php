<?php $__env->startSection('joinactivate','active'); ?>
<?php $__env->startSection('content'); ?>acti
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động</h1>
		</div>
	</div>
	<?php echo e(sss('joinactive')); ?>

	<?php echo e(sss('joinactive-False')); ?>


	<div class="row">
		<div class="col-md-12">
			
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Tên hoạt động</th>
								<th>Ngày bắt đầu</th>
								<th>Ngày kết thúc</th>
								<th>Học sinh tham gia</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							

							<?php $__currentLoopData = $activate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($value->stop >= $date): ?>
							<form action="phu-huynh/tham-gia-hoat-dong/<?php echo e($value->id); ?>" method="post" accept-charset="utf-8">
								<tr>
									<td><?php echo e($value->activate); ?></td>
									<td><?php echo e($value->start); ?></td>
									<td><?php echo e($value->stop); ?></td>
									<td>
										<select name="children" class="form-control">
											<?php $__currentLoopData = $user->getChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valueChil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($valueChil->id); ?>"><?php echo e($valueChil->fullname); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</td>
									<td>
										<button class="btn btn-success" type="submit">Tham gia</button>
									</td>
								</tr>
							</form>
							<?php endif; ?>
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
<?php echo $__env->make('backend.phuhuynh.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/phuhuynh/joinactivate.blade.php ENDPATH**/ ?>