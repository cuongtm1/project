<?php $__env->startSection('news','is-expanded'); ?>
<?php $__env->startSection('content'); ?>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Thêm tin tức mới</h1>
		</div>
	</div>
	<div class="tile">
		<div class="tile-body">
			<form method="post" action="admin/tin-tuc/add" id="addNewsForm" enctype="multipart/form-data">
				<div class="row">
					<div class="col-8">
						<div class="form-group">
							<label class="control-label">Tiêu đề</label>
							<input class="form-control" type="text" placeholder="Nhập tiêu đề bài viết" name="title">
						</div>
						<div class="form-group">
							<label class="control-label">Đường dẫn(Nếu bỏ trống sẽ tự điền)</label>
							<input class="form-control" type="text" placeholder="Nhập đường dẫn sẽ hiển thị bài viết" name="slug">
						</div>
						<div class="form-group">
							<label class="control-label">Danh mục bài viết</label>
							<select class="custom-select" name="cate">
								<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Mô tả  ngắn</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label class="control-label">Ảnh bài viết</label>
							<img src="public/images/import-img.png" alt="" style="max-height: 300px;cursor: pointer;" id="imagenews">
							<input class="form-control" type="file" name="image" onchange="changeImg(this)" id="img" style="display: none">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Nội dung bài viết</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="editor1"></textarea>
							<script>
								CKEDITOR.replace( 'editor1' );
							</script>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck1" name="featured" value="1">
								<label class="form-check-label" for="gridCheck1">
									Bài viết nổi bật ( slider trang chủ)
								</label>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Ảnh slider</label>
							<input class="form-control" type="file" name="slider">
						</div>
					</div>
				</div>
				<div class="tile-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
				</div>
			</form>
		</div>
	</div>
</main>
<script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
	function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
            	var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#imagenews').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
        	$('#imagenews').click(function(){
        		$('#img').click();
        	});
        });

    </script>
    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/news/add.blade.php ENDPATH**/ ?>