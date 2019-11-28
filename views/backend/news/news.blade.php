@extends('backend.master.masterlayout')
@section('content')
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Danh sách tin tức</h1>
		</div>
	</div>
	{{ sss('delNews') }}
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Tiêu đề</th>
								<th>Ảnh</th>
								<th>Mô tả</th>
								<th>Ngày viết bài</th>
								<th>Danh mục</th>
								<th><a class="btn btn-primary" href="admin/tin-tuc/add/" role="button">Thêm</a></th>
							</tr>
						</thead>
						<tbody>
							@foreach($news as $value)
							<tr>
								<td>{{ $value->title }}</td>
								<td>{{ $value->image}}</td>
								<td>{{ $value->description }}</td>
								<td>{{ date_format($value->created_at,'Y/m/d') }}</td>
								<td>{{ $value->getCate->name }}</td>
								<td>
									<a class="btn btn-success" href="admin/tin-tuc/edit/{{ $value->id }}" role="button">Sửa</a>
									<a onclick="return confirm()" class="btn btn-danger" href="admin/tin-tuc/del/{{ $value->id }}" role="button">Xóa</a>
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
@endsection 