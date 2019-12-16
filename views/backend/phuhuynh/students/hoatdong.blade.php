@extends('backend.phuhuynh.master.masterlayout')
@section('infomationstudents','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động tham gia</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{-- {{ sss("addchildren") }} --}}
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Tên hoạt động</th>
								<th>Ngày bắt đầu</th>
								<th>Ngày kết thúc</th>
								<th>Mô tả</th>
								<th>Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							@foreach($hoatdong as $value)
							<tr>
								<td>{{ $value->getActivatefromChildren->activate }}</td>
								<td>{{ $value->getActivatefromChildren->start }}</td>
								<td>{{ $value->getActivatefromChildren->stop }}</td>
								<td>{{ $value->getActivatefromChildren->description }}</td>
								<td>{{ status_activate($value->status) }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="public/js/validate.js" type="text/javascript" charset="utf-8"></script>
@endsection 