@extends('backend.master.masterlayout')
@section('acti','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động</h1>
		</div>
	</div>
	{{ sss('delactivate') }}
	{{ sss('addactivate') }}

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
								<th>Số lượng tham gia</th>
								<th><a class="btn btn-info" href="admin/activate/add">Thêm hoạt động</a> </th>
							</tr>
						</thead>
						<tbody>
							@foreach($activate as $value)
							<tr>
								<td>{{ $value->activate }}</td>
								<td>{{ $value->start }}</td>
								<td>{{ $value->stop }}</td>
								<td>{{ count($value->getChildren) }}</td>
								<td><a class="btn btn-success" href="admin/activate/edit/{{ $value->id }}">Sửa</a>
									<a onclick=" return del()" class="btn btn-danger" href="admin/activate/del/{{ $value->id }}">xóa</a>
									<a class="btn btn-warning" href="admin/activate/join/{{ $value->id }}">Đã tham gia</a>
									<a class="btn btn-warning" href="admin/activate/pending/{{ $value->id }}">Danh sách chờ</a>
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
<script src="public/js/validate.js" type="text/javascript" charset="utf-8" async defer></script>
@endsection 