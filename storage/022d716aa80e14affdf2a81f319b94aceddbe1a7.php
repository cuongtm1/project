<?php $__env->startSection('content'); ?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Thông tin phụ huynh</h1>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php echo e(sss('addparent')); ?>

			<?php echo e(sss('delparent')); ?>

			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Số điện thoại</th>
								<th>Tên bố</th>
								<th>Tên mẹ</th>
								<th>Địa chỉ</th>
								<th>Email</th>
								<th><a class="btn btn-primary" href="admin/phu-huynh/add/" role="button">Thêm</a></th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($value->getUser->phone); ?></td>
								<td><?php echo e($value->father_name); ?></td>
								<td><?php echo e($value->mother_name); ?></td>
								<td><?php echo e($value->address); ?></td>
								<td><?php echo e($value->email); ?></td>
								<td>
									<a class="btn btn-success" href="admin/phu-huynh/edit/<?php echo e($value->getUser->id); ?>" role="button">Sửa</a>
									<a class="btn btn-success" href="admin/phu-huynh/chi-tiet/<?php echo e($value->getUser->id); ?>" role="button">Chi tiết</a>
									<a class="btn btn-success" href="admin/Childrens/FormAdd/<?php echo e($value->id); ?>" role="button">Thêm con</a>
									<a onclick="return confirm()" class="btn btn-danger" href="admin/phu-huynh/del/<?php echo e($value->getUser->id); ?>" role="button">Xóa</a>
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
<script>
	function confirmDelete(){
		return confirm('Bạn có muốn xóa không?')
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/parents/show.blade.php ENDPATH**/ ?>