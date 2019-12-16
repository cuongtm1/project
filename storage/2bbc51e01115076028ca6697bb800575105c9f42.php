<?php $__env->startSection('infomationstudents','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động tham gia</h1>
		</div>
	</div>
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
								<th>Mô tả</th>
								<th>Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $hoatdong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($value->getActivatefromChildren->activate); ?></td>
								<td><?php echo e($value->getActivatefromChildren->start); ?></td>
								<td><?php echo e($value->getActivatefromChildren->stop); ?></td>
								<td><?php echo e($value->getActivatefromChildren->description); ?></td>
								<td><?php echo e(status_activate($value->status)); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="public/js/validate.js" type="text/javascript" charset="utf-8"></script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.phuhuynh.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/phuhuynh/students/hoatdong.blade.php ENDPATH**/ ?>