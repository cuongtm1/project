@extends('backend.master.masterlayout')
@section('content')
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Thông tin phụ huynh</h1>
		</div>
	</div>
	<div class="row">



		<div class="col-md-6">
			<div class="tile">
				<div class="tile-body">
					<h5>Thông tin bố</h5>
					<br>
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Số điện thoại</th>
								<th>Tên bố</th>
								<th>Nghề nghệp</th>
								<th>Địa chỉ</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>{{ $childen->father_phonenumber }}</td>
								<td>{{ $childen->father_name}}</td>
								<td>{{ $childen->father_job}}</td>
								<td>{{ $childen->address }}</td>
								<td>{{ $childen->email }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>






		<div class="col-md-6">
			<div class="tile">
				<div class="tile-body">
						<h5>Thông tin mẹ</h5>
						<br>
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
							<tr>
								<th>Số điện thoại</th>
								<th>Tên mẹ</th>
								<th>Nghề nghệp</th>
								<th>Địa chỉ</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>{{ $childen->mother_phonenumber }}</td>
								<td>{{ $childen->mother_name }}</td>
								<td>{{ $childen->mother_job }}</td>
								<td>{{ $childen->address }}</td>
								<td>{{ $childen->email }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>










	</div>
</main>
<script>
	function confirmDelete(){
		return confirm('Bạn có muốn xóa không?')
	}
</script>
@endsection