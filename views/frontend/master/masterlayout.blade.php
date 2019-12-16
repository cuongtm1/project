@php
use Illuminate\Database\Capsule\Manager as Capsule;
$setting = Capsule::table('setting')->find(1);
$news = Capsule::table('news')->take(4)->get();
// dd($news);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trường mầm non Ánh Mai Sáng</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{{ BASE_URL }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="public/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/library/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="public/library/slick/css/slick.css">
	<link rel="stylesheet" href="public/library/slick/css/slick-theme.css">
	<link rel="stylesheet" href="public/library/wowjs/animate.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/plan.css">
	<link rel="stylesheet" href="public/css/rent.css">
	<link rel="stylesheet" href="public/css/contact.css">
	<link rel="stylesheet" href="public/css/about-us.css">
	<link rel="stylesheet" href="public/css/plan-detail.css">
	<link rel="stylesheet" href="public/css/news.css">
</head>
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=1166349150203041&autoLogAppEvents=1"></script>
	<div id="header">
		<div class="header">
			<div class="bg-header">

				<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
					<div class="container">
						<a class="navbar-brand" href="">
							<img src="public/image/{{ $setting->logo }}" alt="logo" height="50" class="logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse menu-cus" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="">Trang chủ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="chuong-trinh-hoc">Chương trình học</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="tin-tuc">Tin tức - sự kiện</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="tuyensinh">Tuyển sinh</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="">Giới thiệu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he">Liên hệ</a>
								</li>
							</ul>
							
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	@yield('content')
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row" style="padding-bottom: 20px">
					<div class="col-lg-3">
						<h3 class="footer-title">Thông điệp</h3>
						<hr style="width: 50px;background-color: #18998e;height: 2px;margin: 15px 0;">
						<p class="footer-desc">{{ $setting->message_footer }}</p>
					</div>
					<div class="col-lg-3">
						<h3 class="footer-title">Thông tin liên hệ</h3>
						<hr style="width: 50px;background-color: #18998e;height: 2px;margin: 15px 0;">
						<div class="footer-contact">
							<ul class="footer__wrap-info">                           
								<li>
									<i class="fas fa-map-marker-alt fa-fw check "></i>
									<span class="footer__wrap-info--text special">Địa chỉ: {{ $setting->address }}</span>
								</li>
								<li>
									<i class="fas fa-phone-alt fa-fw check"></i>
									<span class="footer__wrap-info--text">Điện thoại: {{ $setting->phone }}</span>
								</li>
								<li>
									<i class="far fa-envelope fa-fw
									check"></i>
									<span class="footer__wrap-info--text">Email: {{ $setting->email }}</span>
								</li>
{{-- 
								<li>
									<i class="far fa-clock fa-fw check"></i>
									<span class="footer__wrap-info--text">Working Days/Hours: </span>
								</li> --}}
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<h3 class="footer-title">Tin tức mới nhất</h3>

						<hr style="width: 50px;background-color: #18998e;height: 2px;margin: 15px 0;">
						<div class="footer-contact">
							<ul class="footer__wrap-info">            
								@foreach($news as $value)
								<li>
									<i class="fas fa-caret-right fa-fw check"></i>
									<a href="tin-tuc/{{ $value->slug }}.html" class="footer__wrap-info--text footer__wrap-info--text2 special">{{ $value->title }}</a>
								</li>  
								@endforeach

							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<h3 class="footer-title">Kết nối</h3>
						<hr style="width: 50px;background-color: #18998e;height: 2px;margin: 15px 0;">
						<div class="social-footer mb-3">
							{{-- <a href="#" class="icon-button twitter"><i class="icon-twitter fab fa-twitter"></i><span></span></a> --}}
							<a href="{{ $setting->facebook }}" class="icon-button facebook"><i class="fab fa-facebook-f icon-facebook"></i><span></span></a>
							<a href="{{ $setting->google }}" class="icon-button google-plus"><i class="icon-google-plus fab fa-google-plus-g"></i><span></span></a>
							{{-- <a href="#" class="icon-button pinterest"><i class="fab fa-pinterest"></i><span></span></a> --}}
						</div>
						<div class="fb-page" data-href="{{ $setting->facebook }}" data-tabs="timeline" data-width="255" data-height="170" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>
					</div>
				</div>
				<hr style="background-color: #18998e;height: 1px;width: 70%;margin: 20px auto;">
				<p style="text-align: center;">
					<i style="color: #fff" class="far fa-copyright" aria-hidden="true"></i>
					<span style="color: #fff">Nhóm 2</span>
				</p>
			</div>
		</div>

	</footer>
<!-- <div id="social-btns" class="social-btns" style="position: fixed;left: 10px;top: 350px;width: 60px;">
  <a class="btn facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
  <a class="btn twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a>
  <a class="btn google" href="" target="_blank"><i class="fab fa-google-plus-g"></i></i></a>
  <a class="btn linkedin" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</div> -->
<div id="social-btns" class="social-btns" style="position: fixed; left: 10px; top: 350px; width: 60px; opacity: 1;">
	<a href="https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F"><img src="https://cdn.autoads.asia/content/images/widget_icon_zalo.svg"></a>
	<a href="https://www.messenger.com/"><img src="https://cdn.autoads.asia/content/images/widget_icon_messenger.svg" alt=""></a>
	<a href="tel:0812340999"><img src="https://cdn.autoads.asia/content/images/widget_icon_click_to_call.svg" alt=""></a>
	<a href="https://mail.google.com"><img src="http://cdn.autoads.asia/content/images/widget_icon_contact_form.svg" alt=""></a>
</div>

<!-- Back to top -->
<div id="back-to-top">
	<i class="fas fa-chevron-up fa-fw"></i>
</div>
</body>
<script src="public/library/jquery/jquery-3.4.1.min.js"></script>
<script src="public/library/bootstrap/js/bootstrap.min.js"></script>
<script src="public/library/slick/js/slick.min.js"></script>
<script src="public/library/wowjs/wow.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script> -->
<script src="public/js/main.js"></script>
</html>