@extends('backend.master.masterlayout')
@section('info','is-expanded')
@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i>Sửa phụ huynh</h1>
    </div>
  </div>
  {{ sss('editparent') }}
  <div class="tile">
    <div class="tile-body">
      <form method="post" action="admin/phu-huynh/edit/{{ $user->id }}">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại (Đăng nhập)</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại" name="phone" value="{{ $user->phone }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" placeholder="Nhập địa chỉ email" name="email" value="{{ $user->getParent->email }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="password" placeholder="Nhập mật khẩu" name="password">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nhập lại mật khẩu</label>
              <input class="form-control" type="repassword" placeholder="Nhập mật khẩu" name="repassword">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Tên bố</label>
              <input class="form-control" type="text" placeholder="Nhập tên bố" name="father_name" value="{{ $user->getParent->father_name }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Tên mẹ</label>
              <input class="form-control" type="text" placeholder="Nhập tên mẹ" name="mother_name" value="{{ $user->getParent->mother_name }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại bố</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại bố" name="father_phone" value="{{ $user->getParent->father_phonenumber }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại mẹ</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại mẹ" name="mother_phone" value="{{ $user->getParent->mother_phonenumber }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nghề nghiệp bố</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại mẹ" name="father_job" value="{{ $user->getParent->father_job }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nghề nghiệp mẹ</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại mẹ" name="mother_job" value="{{ $user->getParent->mother_job }}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text" placeholder="Nhập địa chỉ phụ huynh" name="address" value="{{ $user->getParent->address }}">
            </div>
          </div>
        </div>
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Sửa thông tin</button>
        </div>
      </form>
    </div>
    
  </main>
  @endsection