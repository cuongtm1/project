@extends('backend.master.masterlayout')
@section('image','is-expanded')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Thêm tin tức mới</h1>
		</div>
  </div>
	<div class="tile">
    {{ sss("ok") }}
		<div class="tile-body">
			<form method="post" action="admin/image/edit"  enctype="multipart/form-data">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Ảnh Cũ</label>
              <img src="public/image/{{ $image->image }}" alt="">
              <input type="hidden"  name="id" value="{{ $image->id }}">
						</div>
          </div>
          
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Chọn Ảnh Mới</label>
							<img src="public/images/import-img.png" alt="" style="max-height: 300px;cursor: pointer;" id="imagenews">
							<input class="form-control" type="file" name="image" onchange="changeImg(this)" id="img" style="display: none">
						</div>
					</div>
        </div>
        
				<div class="tile-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Lưu</button>
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