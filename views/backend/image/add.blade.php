@extends('backend.master.masterlayout')
@section('album','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Thêm Album</h1>
		</div>
	</div>
	<div class="tile">
		{{ sss("ok") }}
		<div class="tile-body">
			<form method="post" action="admin/image/saveadd"  enctype="multipart/form-data">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Tiêu đề album</label>
							<input class="form-control" type="text" placeholder="Nhập tiêu đề bài viết" name="title">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Ảnh album (Chọn được nhiều ảnh) : </label>
							<input type="file" name="image[]" multiple>
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
    @endsection 