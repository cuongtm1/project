<?php $__env->startSection('content'); ?>
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
			
			<?php echo $setting->map; ?>

		</div>
		<div class="contact__company" style="padding-top: 30px!important;">
			<div class="row">
				<div class="col-lg-6 col-12">
					<p class="contact__company-desc">TRƯỜNG MẦM NON ÁNH MAI SÁNG</p>
					<div class="contact__box">
						<p class="contact__box-location">
							<i class="fas fa-map-marker-alt fa-fw"></i>
							<span><?php echo e($setting->address); ?></span>
						</p>
						<p>
							<i class="fas fa-phone-alt fa-fw"></i>
							<span><?php echo e($setting->phone); ?></span>
						</p>
						<p>
							<i class="fas fa-envelope fa-fw"></i>
							<a href="" style="color: #333"><span><?php echo e($setting->email); ?></span></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<form id="contactForm1" method="POST" action="lien-he/post-lien-he">
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
						<button style="background-color: #18998e;border-color: #fff;box-shadow: none;outline: none;" type="submit" class="btn btn-primary">Gửi</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="public/js/validate.js" type="text/javascript" charset="utf-8"></script>
<script>
	document.querySelector('iframe').style.width = '100%';
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/frontend/contact/contact.blade.php ENDPATH**/ ?>