<?php $__env->startSection('news','is-expanded'); ?>
<?php $__env->startSection('content'); ?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Danh sách tin tức</h1>
		</div>
	</div>
	<?php echo e(sss('delNews')); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Tiêu đề</th>
								<th>Ảnh</th>
								<th>Mô tả</th>
								<th>Ngày viết bài</th>
								<th>Danh mục</th>
								<th><a class="btn btn-primary" href="admin/tin-tuc/add/" role="button">Thêm</a></th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($value->title); ?></td>
								<td><img src="public/image/<?php echo e($value->image); ?>" alt="" width="200px"></td>
								<td style="max-width: 500px"><?php echo e($value->description); ?></td>
								<td><?php echo e(date_format($value->created_at,'Y/m/d')); ?></td>
								<td><?php echo e($value->getCate->name); ?></td>
								<td>
									<a class="btn btn-success" href="admin/tin-tuc/edit/<?php echo e($value->id); ?>" role="button">Sửa</a>
									<a onclick="return confirm()" class="btn btn-danger" href="admin/tin-tuc/del/<?php echo e($value->id); ?>" role="button">Xóa</a>
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
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/news/news.blade.php ENDPATH**/ ?>