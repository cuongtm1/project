<?php $__env->startSection('content'); ?>
<div class="slide-wrap">
	<div class="slides">
		<div class="slideshow slide-1">
			<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/banner-home-2.jpg" alt="">
			<div class="slider-text">
				<img class="slide-img-2 wow slideInLeft" src="https://themes.muffingroup.com/be/webdesign/wp-content/uploads/2016/11/home_webdesign_slide1_cover3.png" alt="">
				<img class="slide-img-1 wow slideInLeft" data-wow-delay="0.5s" src="https://themes.muffingroup.com/be/webdesign/wp-content/uploads/2016/11/home_webdesign_slide1_cover3.png" alt="">
				<div class="slider-text-note">
					<p class="title wow flipInX" data-wow-delay="1.5s">Trường mầm non Ánh mai sáng</p>
					<div class="line wow flipInX" data-wow-delay="2s"></div>
					<p class="description wow flipInX" data-wow-delay="2.5s">Được phát triển bởi Fieldwork Education, 
						IEYC là chương trình học quốc tế mang tính<br> đột phá dành cho trẻ từ 2 đến 5 tuổi, hướng đến khai thác tối đa năng lực của trẻ trong <br> “giai đoạn vàng” của sự phát triển. <br><br>
						Hiện tại, IEYC được áp dụng cho 140 trường mầm non ở 47 quốc gia trên thế giới<br> như Anh, Thụy Điển, Nga….</p>
						<!-- <a class="view-more wow tada" data-wow-delay="3s" href=""></a> -->
						<a href="" class="view-more animated flipInX delay-3s">Xem chi tiết</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="container">
			<div class="about-title">
				<h2 style="padding-top: 30px;">Về chúng tôi</h2>
				<img class="about-icon" src="image/about-icon.png" alt="">
				<p>Chúng tôi là Trường mầm non Ánh Mai Sáng</p>
			</div>
			<div class="about-block">
				<div class="row">

					<?php $__currentLoopData = $vechungtoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div style="line-height: 2;text-align:justify" class="col-12 col-sm-12 col-md-12 col-lg-4 about-block-detail">
							<img height="250px" width="100%" src="public/image/<?php echo e($vl->image); ?>">
							<div class="ribbon-wrapper-green">
								<div class="ribbon-green">NEW</div>
							</div>
						<h3 class="about-block-detail-title"><?php echo e($vl->title); ?></h3>
						<p class="about-block-detail-desc"><?php echo $vl->content; ?></p>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					

				</div>
			</div>
		</div>

		<div class="field-full">
			<div class="field">
				<div class="container">
					<div class="field-title">
						<h2>LĨNH VỰC HOẠT ĐỘNG</h2>
						<img class="about-icon" src="image/about-icon.png" alt="">
						<p>Lĩnh vực hoạt động chuyên nghiệp tích luỹ qua nhiều năm kinh nghiệm.</p>
					</div>
					<div class="row">

						<?php $__currentLoopData = $muctieugiaoduc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-4 field-block">
							<i class="fab fa-empire"></i>
							<span><?php echo e($vl->title); ?></span>
							<p><?php echo $vl->content; ?></p>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					
					</div>
				</div>
			</div>
		</div>

		<div class="project">
			<div class="container">
				<div class="about-title">
					<h2>Ảnh đẹp</h2>
					<img class="about-icon" src="image/about-icon.png" alt="">
					<p>Ảnh đẹp các sự kiện của trường mầm non Ánh Mai Sáng</p>
				</div>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-2.jpg" alt="" width="350" height="246">
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>			
							</figure>
						</div>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-3.jpg" alt="" width="350" height="246">
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>			
							</figure>
						</div>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-7.jpg" alt="" width="350" height="246">
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>			
							</figure>
						</div>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-5.jpg" alt="" width="350" height="246">
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>		
							</figure>
						</div>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-6.jpg" alt="" width="350" height="246">
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>			
							</figure>
							
						</div>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 project-block">
						<div class="grid">
							<figure class="effect-jazz">
								<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/04/anh-bambi-8.jpg" alt="" width="350" height="246"></a>
								<figcaption>
									<h2><a href="">Khai giảng trường mầm non Ánh Mai Sáng</a></h2>
								</figcaption>		
							</figure>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="news">
			<div class="container">
				<div class="about-title">
					<h2>TIN TỨC & SỰ KIỆN</h2>
					<img class="about-icon" src="image/about-icon.png" alt="">
					<!-- <p>Chúng tôi luôn mang đến cho bạn những tin tức mới nhất từ thị trường Bất động sản.</p> -->
				</div>
				<div class="row"> <!-- container -->
					<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-12 col-md-6 col-lg-3 news-block"> <!-- card -->
						<div class="news-list news-1">
							<div class="news-content"> 
								<div class="news-content-div-img">
									<img class="news-content-div-img-img" src="public/image/<?php echo e($value->image); ?>" alt="" height="250">
									<a href="tin-tuc/<?php echo e($value->slug); ?>.html" class="news-read-more">Chi tiết</a>
								</div>

								<h3><a class="news-title" href="tin-tuc/<?php echo e($value->slug); ?>.html">
									<?php if(strlen($value->title)>=50): ?>
									<?php echo e(substr($value->title,0,50)); ?>...
									<?php else: ?>
									<?php echo e($value->title); ?>

									<?php endif; ?>
								</a></h3>
								<div class="news-content">
									<?php if(strlen($value->description)>=150): ?>
									<p><?php echo e(substr($value->description,0,150)); ?>...</p>
									<?php else: ?>
									<p><?php echo e($value->description); ?></p>
									<?php endif; ?>
								</div>
							</div>					
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/frontend/index.blade.php ENDPATH**/ ?>