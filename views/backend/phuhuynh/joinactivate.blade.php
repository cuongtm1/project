@extends('backend.phuhuynh.master.masterlayout')
@section('joinactivate','active')
@section('content')acti
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Danh sách hoạt động</h1>
		</div>
	</div>
	{{ sss('joinactive') }}
	{{ sss('joinactive-False') }}

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
								<th>Học sinh tham gia</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							

							@foreach($activate as $value)
							@if($value->stop >= $date)
							<form action="phu-huynh/tham-gia-hoat-dong/{{ $value->id }}" method="post" accept-charset="utf-8">
								<tr>
									<td>{{ $value->activate }}</td>
									<td>{{ $value->start }}</td>
									<td>{{ $value->stop }}</td>
									<td>
										<select name="children" class="form-control">
											@foreach($user->getChildren as $valueChil)
											<option value="{{ $valueChil->id }}">{{ $valueChil->fullname }}</option>
											@endforeach
										</select>
									</td>
									<td>
										<button class="btn btn-success" type="submit">Tham gia</button>
									</td>
								</tr>
							</form>
							@endif
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