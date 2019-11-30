<?php $__env->startSection('content'); ?>
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
<div class="project plan-project" style="background-color: #f7f7f7;margin-top: 0; padding-top: 50px;">
			<div class="container" style="background-color: #fff; padding: 15px;box-shadow: 0 0 10px rgba(0,0,0,0.1)">
				<div class="row">
					<div class="col-12 col-lg-8 plan-detail-text">
						<h4 style="text-shadow: 0px 0px 1px;
						"><?php echo e($newsDetail->title); ?></h4>

						<?php echo $newsDetail->content; ?>

					</div>
					<div class="col-lg-4">
						<div class="news-transfer-list">
							<div class="news-transfer-title">
								<i class="fas fa-caret-right"></i>
								<h4 class="news-transfer-text">Tin liên quan</h4>
							</div>
							<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
							<div class="news-transfer">
								<div class="news-transfer-block">
									<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
									<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/frontend/news/details.blade.php ENDPATH**/ ?>