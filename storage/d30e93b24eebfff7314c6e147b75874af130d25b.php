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



						<br><br>
						<h1 style="color:white;background-color:#0b446d;padding: 10px;font-weight: bold">Comment</h1>
						<table  class="table table-striped" style="margin-top: -9px">
							<thead>
							  <tr>
								<th scope="col">Người Gửi</th>
								<th scope="col">Nội dung</th>
								<th scope="col">Ngày gửi</th>
							  </tr>
							</thead>
							<tbody>
							  
								<tr>
								<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($vl->id_user == $ten->id): ?>
								<tr>
								<td><?php echo e($ten->phone); ?></td>
								<td><?php echo e($vl->content); ?></td>
								<td><?php echo e($vl->created_at); ?></td>
							</tr> 
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							  </tr> 

							</tbody>
						  </table>
						  <br>
						  <br>
						  <br>
						<?php if(isset($_SESSION['user'])): ?>
						<form action="comment" method="POST">
						<textarea name="content" placeholder="  Nhập ý kiến của bạn ...." cols="102" rows="5"></textarea>
						<input name="id_new" type="hidden" value="<?php echo e($newsDetail->id); ?>">
						<input name="slug" type="hidden" value="<?php echo e($newsDetail->slug); ?>">
						<br>
						<button class="btn btn-info" >Gửi</button>
						</form>
						<?php else: ?>
						<h1 style="color:blue">Bạn cần đăng nhập để có thể comment.</h1>
						<?php endif; ?>
						









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
<?php echo $__env->make('frontend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/frontend/news/details.blade.php ENDPATH**/ ?>