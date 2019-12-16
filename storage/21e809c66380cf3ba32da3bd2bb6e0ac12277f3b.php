<?php $__env->startSection('contact','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Chi tiết liên hệ</h1>
		</div>
	</div>
	<?php echo e(sss('editnews')); ?>

	<div class="tile">
		<div class="tile-body">
			<form method="post" action="admin/lien-he/send">
				<div class="row">
					<div class="col-8">
						<div class="form-group">
							<label class="control-label">Tiêu đề</label>
							<input class="form-control" type="text" placeholder="Nhập tiêu đề bài viết" name="title" value="<?php echo e($contact->title); ?>">
						</div>
						<input type="hidden"  name="id" value="<?php echo e($contact->id); ?>">
						<div class="form-group">
							<label class="control-label">Tên người gửi</label>
							<input class="form-control" type="text" placeholder="Nhập đường dẫn sẽ hiển thị bài viết" name="slug" value="<?php echo e($contact->fullname); ?>">
						</div>
						<div class="form-group">
							<label class="control-label">số điện thoại</label>
							<input class="form-control" type="text" placeholder="Nhập đường dẫn sẽ hiển thị bài viết" name="slug" value="<?php echo e($contact->phone); ?>">
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Nội dung</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description"><?php echo e($contact->content); ?></textarea>
						</div>
					</div>

				</div>
				<div class="tile-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Trả lời</button>
				</div>
			</form>
		</div>
	</div>
</main>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/Contact/detail.blade.php ENDPATH**/ ?>