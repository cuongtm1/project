@extends('frontend.master.masterlayout')
@section('content')
<script src="public/js/jquery-3.2.1.min.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/validate.js"></script>
<div class="plan">
	<div class="container">
		<h3 class="plan-text">
		</h3>
		<div class="block-search">
			<form class="search-wrapper cf">
				<input type="text" placeholder="Search..." required="">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
</div>
<div class="content-main" style="padding: 80px 0 !important;">
	<div class="container">
		<div id="map">
			{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.8580470816796!2d105.7853450142462!3d21.07833109146162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aacbe6b051d3%3A0x99154d3da13e19eb!2zNDMgUGjhuqFtIFbEg24gxJDhu5NuZywgWHXDom4gxJDhu4luaCwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1564358693310!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
			{!! $setting->map !!}
		</div>
		<div class="contact__company" style="padding-top: 30px!important;">
			<div class="row">
				<div class="col-lg-6 col-12">
					<p class="contact__company-desc">TRƯỜNG MẦM NON ÁNH MAI SÁNG</p>
					<div class="contact__box">
						<p class="contact__box-location">
							<i class="fas fa-map-marker-alt fa-fw"></i>
							<span>{{ $setting->address }}</span>
						</p>
						<p>
							<i class="fas fa-phone-alt fa-fw"></i>
							<span>{{ $setting->phone }}</span>
						</p>
						<p>
							<i class="fas fa-envelope fa-fw"></i>
							<a href="" style="color: #333"><span>{{ $setting->email }}</span></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<form method="POST" action="lien-he/post-lien-he" id="Contactform">
						<div class="form-group form-group-contact">
							<label for="name" style="margin-top: 5px;">Tên của bạn</label>
							<input type="text" name="name"  class="form-control" id="name" placeholder="Tên của bạn">
						</div>
						<div class="form-group form-group-contact">
							<label for="exampleInputEmail1">Địa chỉ email</label>
							<input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Địa chỉ email">
						</div>
						<div class="form-group form-group-contact">
							<label for="exampleInputPassword1">Số điện thoại</label>
							<input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
						</div>
						<div class="form-group form-group-contact">
							<label for="exampleInputEmail1">Tiêu đề</label>
							<input type="text" name="title" class="form-control" id="exampleInputEmail1"  placeholder="Tiêu đề">
						</div>
						<div class="form-group form-group-contact">
							<label for="exampleFormControlTextarea1">Nội dung</label>
							<textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Thông điệp"></textarea>
						</div>
						<button style="background-color: #18998e;border-color: #fff;box-shadow: none;outline: none;" type="submit" class="btn btn-primary" onclick="window.alert('Gửi thành công!')">Gửi</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	document.querySelector('iframe').style.width = '100%';
<<<<<<< HEAD
	jQuery(document).ready(function($) {
		$("#contactForm").validate({
			rules: {
				title: "required",
				description: "required",
				editor1: "required",
			},
			messages: {
				title: "Chưa nhập tiêu đề",
				description: "Chưa nhập mô tả",
				editor1: "Chưa nhập nội dung",
			}
		});
	});
=======

	// validate form
	$(document).ready(function() {
            $("#Contactform").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 6,
                    }
                },
                messages: {
                    name: {
                        required: "Vui lòng nhập tên",
                        minlength: "không nhập dưới 6 ký tự"
                    }
                }
            });
        });


>>>>>>> af1595b4d9dfa532f209be0064c20ea918325932
</script>
@endsection