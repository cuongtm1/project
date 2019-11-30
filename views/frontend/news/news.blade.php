@extends('frontend.master.masterlayout')
@section('content')
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
<div class="news" style="padding-top: 80px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="news-list">
					<div class="row">
						@foreach($news as $value)
						<div class="news-list-block">
							<div class="col-4">
								<a href="tin-tuc/{{ $value->slug }}.html"><img class="news-img" src="public/image/{{ $value->image }}" alt="" width="223" height="149"></a>
							</div>
							<div class="col-8 news-text">
								<h4 class="news-list-title"><a href="tin-tuc/{{ $value->slug }}.html">{{ $value->title }}</a></h4>
								<i class="far fa-calendar-alt"></i>
								<span>{{ date_format($value->created_at,'d/m/Y') }}</span>
								<p>{!! $value->description !!}</p>
							</div>
						</div>
						<hr style="width: 100%;background-color: #ccc">
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news-transfer-list">
					<div class="news-transfer-title">
						<i class="fas fa-caret-right"></i>
						<h4 class="news-transfer-text">TIN TỨC HOT</h4>
					</div>
					<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
				</div>
				<div class="news-transfer-list">
					<div class="news-transfer-title">
						<i class="fas fa-caret-right"></i>
						<h4 class="news-transfer-text">SỰ KIỆN HOT</h4>
					</div>
					<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="https://truongmamnonbambi.edu.vn/wp-content/uploads/2019/09/68995827_2018928868208534_7624622812275146752_o.jpg" alt="" width="90" height="90"></a>
							<p><a href="">NGÀY HỘI TỔNG KẾT – SUMMER FAIR 2019</a></p>
						</div>
					</div>
				</div>
			</div>
			<!---- end lien quan -->
		</div>

		<!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item mx-1 page-item-fights">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item active mx-1 page-item-fights"><a class="page-link" href="#">1</a></li>
				<li class="page-item mx-1 page-item-fights"><a class="page-link" href="#">2</a></li>
				<li class="page-item mx-1 page-item-fights"><a class="page-link" href="#">3</a></li>
				<li class="page-item mx-1 page-item-fights">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
@endsection