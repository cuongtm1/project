@extends('backend.master.masterlayout')
@section('info','is-expanded')
@section('content')
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Thông tin phụ huynh</h1>
		</div>
		{{-- <ul class="app-breadcrumb breadcrumb side">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item">Tables</li>
			<li class="breadcrumb-item active"><a href="#">Data Table</a></li>
		</ul> --}}
	</div>
	<div class="row">
		<div class="col-md-12">
			{{ sss('addparent') }}
			{{ sss('delparent') }}
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Số điện thoại</th>
								<th>Tên bố</th>
								<th>Tên mẹ</th>
								<th>Địa chỉ</th>
								<th>Email</th>
								<th><a class="btn btn-primary" href="admin/phu-huynh/add/" role="button">Thêm</a></th>
							</tr>
						</thead>
						<tbody>
							@foreach($parents as $value)
							<tr>
								<td>{{ $value->getUser->phone }}</td>
								<td>{{ $value->father_name}}</td>
								<td>{{ $value->mother_name }}</td>
								<td>{{ $value->address }}</td>
								<td>{{ $value->email }}</td>
								<td>
									<a class="btn btn-success" href="admin/phu-huynh/edit/{{ $value->getUser->id }}" role="button">Sửa</a>
									<a class="btn btn-success" href="admin/phu-huynh/chi-tiet/{{ $value->getUser->id }}" role="button">Chi tiết</a>
									<a class="btn btn-success" href="admin/Childrens/FormAdd/{{ $value->id }}" role="button">Thêm con</a>
									<a onclick="return confirmDelete()" class="btn btn-danger" href="admin/phu-huynh/del/{{ $value->getUser->id }}" role="button">Xóa</a>
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
<script>
	function confirmDelete(){
		let com = confirm('Bạn có muốn xóa không?');
		return com;
	}
</script>
@endsection