@extends('backend.master.masterlayout')
@section('acti','active')
@section('content')
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Thêm hoạt động</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				{{ sss("editactivate") }}
				<div class="tile-body">

					<form action="" method="POST">
						<div class="form-group">
							<label class="control-label">Tên hoạt động</label>
							<input class="form-control" name="name" type="text" placeholder="Nhập tên hoạt động" value="{{ $editActivate->activate }}">
						</div>
						<div class="row">
							<div class="col-6"><div class="form-group">
							<label class="control-label">Thời gian bắt đầu</label>
							<input class="form-control" name="start" type="date" placeholder="Nhập tên hoạt động" value="{{ $editActivate->start }}">
						</div></div>
							<div class="col-6"><div class="form-group">
							<label class="control-label">Thời gian kết thúc</label>
							<input class="form-control" name="stop" type="date" placeholder="Nhập tên hoạt động" value="{{ $editActivate->stop }}">
						</div></div>
						</div>
						<div class="form-group">
							<label class="control-label">Mô tả hoạt động</label>
							<textarea class="form-control" name="description" placeholder="Mô tả ngắn hoạt động">{{ $editActivate->description }}</textarea>
							
						</div>
					</div>
					<div class="tile-footer">
						<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Sửa</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</main>
@endsection 