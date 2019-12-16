<?php $__env->startSection('contact','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Trả lời liên hệ</h1>
		</div>
	</div>
	
	<div class="tile">
		<div class="tile-body">
			<form method="post" action="admin/lien-he/send-ok">
				<div class="row">
					<div class="col-8">
                            <div class="form-group">
                                    <label class="control-label">Tiêu đề</label>
                                    <input class="form-control" type="text" placeholder="Nhập tiêu đề bài viết" name="title" >
                                </div>
                        <input type="hidden"  name="id" value="<?php echo e($email->id); ?>">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Nội dung</label>
							<textarea class="form-control"  placeholder="Nhập nội dung trả lời" rows="10" name="content"></textarea>
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/Contact/send.blade.php ENDPATH**/ ?>