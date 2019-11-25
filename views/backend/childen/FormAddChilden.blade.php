@extends('backend.master.masterlayout')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Add Childen</h1>
          <p>Form Add Childen</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Form Add Childen</h3>
            <div class="tile-body">

              {{-- @csrf --}}
              <form action="admin/Childrens/SaveAdd" method="POST">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" name="name" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label class="control-label">Lớp học</label>
                    <select name="lop" class="form-control" type="text" placeholder="Enter class">
                      <?php foreach ($class as $key => $value):?>
                      <option value="<?=$value->id ?>">Lớp  <?=$value->age ?> Tuổi</option>
                      <?php endforeach?>
                    </select>
                  </div>
                <div class="form-group">
                  <label class="control-label">Ngày sinh</label>
                  <input class="form-control" name="ngaysinh" type="date" placeholder="Enter Birthday">
                </div>
                <div class="form-group">
                    <label class="control-label">Nơi sinh</label>
                    <input class="form-control" name="noisinh" type="text" placeholder="Enter place_of_birth">
                  </div>
                <div class="form-group">
                  <label class="control-label">Địa chỉ</label>
                  <textarea class="form-control" name="diachi" rows="4" placeholder="Enter permanent_residence"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Giới tính</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input name="gioitinh" class="form-check-input" type="radio" value="1" >Nam
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input name="gioitinh" class="form-check-input" type="radio" value="0" >Nữ
                    </label>
                  </div>
                </div>
              
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </main>
    @endsection