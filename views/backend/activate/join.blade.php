@extends('backend.master.masterlayout')
@section('acti','active')
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Xác nhận tham gia hoạt động</h1>
		</div>
	</div>
	{{ sss('delactivate') }}
	{{ sss('addactivate') }}
	{{ sss('confirmActivate') }}
	{{ sss('delconfirmActivate') }}
	<div class="row">
		<div class="col-md-12">
			{{-- {{ sss("addchildren") }} --}}
			<div class="tile">
				<div class="tile-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Họ và tên</th>
								<th>Ngày sinh</th>
								<th>Giới tính</th>
								<th><a class="btn btn-info" href="admin/activate/add">Thêm</a> </th>
							</tr>
						</thead>
						<tbody>
							@foreach($activate as $value)
							<tr>
								<td>{{ $value->getChildrenJoinActivate->fullname }}</td>
								<td>{{ $value->getChildrenJoinActivate->birthday }}</td>
								<td>{{ gender($value->getChildrenJoinActivate->gender) }}</td>
								<td><a class="btn btn-success" href="admin/activate/pending/delconfirm/{{ $value->getChildrenJoinActivate->id }}">Hủy tham gia</a>
									
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