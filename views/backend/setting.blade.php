@extends('backend.master.masterlayout')
@section('setting','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Setting</h1>
		</div>
	</div>
	{{ sss('editSetting') }}
	<div class="tile">
		<div class="tile-body">
			<form method="post" action="admin/setting" id="addNewsForm" enctype="multipart/form-data">
				<div class="row">
					<div class="col-8">
						<div class="form-group">
							<label class="control-label">Số điện thoại</label>
							<input class="form-control" type="text" placeholder="Nhập số điện thoại" name="phonenumber" value="{{ $setting->phone }}">
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" type="text" placeholder="Nhập email" name="email" value="{{ $setting->email }}">
						</div>
						<div class="form-group">
							<label class="control-label">Facebook</label>
							<input class="form-control" type="text" placeholder="Nhập Facebook" name="facebook" value="{{ $setting->facebook }}">
						</div>
						<div class="form-group">
							<label class="control-label">Google</label>
							<input class="form-control" type="text" placeholder="Nhập Google" name="google" value="{{ $setting->google }}">
						</div>
						<div class="form-group">
							<label class="control-label">Zalo</label>
							<input class="form-control" type="text" placeholder="Nhập Zalo" name="zalo" value="{{ $setting->zalo }}">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label class="control-label">Logo</label>
							<img src="public/image/{{ $setting->logo }}" alt="" style="max-height: 300px;cursor: pointer;" id="imagenews">
							<input class="form-control" type="file" name="image" onchange="changeImg(this)" id="img" style="display: none">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Address</label>
							<input class="form-control" type="text" placeholder="Nhập địa chỉ trường học" name="address" value="{{ $setting->address }}">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Google Map</label>
							{{-- <input class="form-control" type="text" placeholder="Nhập link google map" name="googlemap" value="{{ $setting->map }}"> --}}
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="googlemap" placeholder="Nhập iframe google map">{{ $setting->map }}</textarea>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Thông điệp</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message_footer" placeholder="Nhập thông điệp">{{ $setting->message_footer }}</textarea>
						</div>
					</div>
					{{-- <div class="col-12">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Nội dung bài viết</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="editor1">{{ $setting->email }}</textarea>
							<script>
								CKEDITOR.replace( 'editor1' );
							</script>
						</div>
					</div> --}}
				</div>
				<div class="tile-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Sửa</button>
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