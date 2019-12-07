<?php $__env->startSection('acti','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động</h1>
		</div>
	</div>
	<?php echo e(sss('delactivate')); ?>

	<?php echo e(sss('addactivate')); ?>


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
								<th>Số lượng tham gia</th>
								<th><a class="btn btn-info" href="admin/activate/add">Thêm hoạt động</a> </th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $activate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($value->activate); ?></td>
								<td><?php echo e($value->start); ?></td>
								<td><?php echo e($value->stop); ?></td>
								<td><?php echo e(count($value->getChildren)); ?></td>
								<td><a class="btn btn-success" href="admin/activate/edit/<?php echo e($value->id); ?>">Sửa</a>
									<a onclick=" return del()" class="btn btn-danger" href="admin/activate/del/<?php echo e($value->id); ?>">xóa</a>
									<a class="btn btn-warning" href="admin/activate/join/<?php echo e($value->id); ?>">Đã tham gia</a>
									<a class="btn btn-warning" href="admin/activate/pending/<?php echo e($value->id); ?>">Danh sách chờ</a>
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/activate/list.blade.php ENDPATH**/ ?>