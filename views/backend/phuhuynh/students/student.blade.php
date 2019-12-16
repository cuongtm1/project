@extends('backend.phuhuynh.master.masterlayout')
@section('infomationstudents','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách học sinh</h1>
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
								<th>Tên học sinh</th>
								<th>Ngày sinh</th>
								<th>Giới tính</th>
								<th>Lớp học</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user->getParent->getChildren as $value)
							<tr>
								<td>{{ $value->fullname }}</td>
								<td>{{ $value->birthday }}</td>
								<td>{{ getGender($value->gender) }}</td>
								<td>{{ checkClass($value->showlop) }}</td>
								<td>
									<a class="btn btn-success" href="phu-huynh/hoc-sinh/hoat-dong/{{ $value->id }}">Hoạt động</a>
									{{-- <a class="btn btn-info" href="phu-huynh/hoc-sinh/lich-hoc/{{ $value->id }}">Lịch học</a> --}}
									{{-- <a class="btn btn-primary" href="phu-huynh/hoc-sinh/an-uong/{{ $value->id }}">Lịch ăn uống</a> --}}
								</td>
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