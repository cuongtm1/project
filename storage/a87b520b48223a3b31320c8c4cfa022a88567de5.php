<?php $__env->startSection('content'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Thêm phụ huynh</h1>
    </div>
  </div>
  <div class="tile">
    <div class="tile-body">
      <form method="post" action="admin/phu-huynh/add" id="addParentForm">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại (Đăng nhập)</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại" name="phone">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" placeholder="Nhập địa chỉ email" name="email">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="password" placeholder="Nhập mật khẩu" id="password" name="password">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nhập lại mật khẩu</label>
              <input class="form-control" type="repassword" placeholder="Nhập lại mật khẩu" name="repassword">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Tên bố</label>
              <input class="form-control" type="text" placeholder="Nhập tên bố" name="father_name">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Tên mẹ</label>
              <input class="form-control" type="text" placeholder="Nhập tên mẹ" name="mother_name">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại bố</label>
              <input class="form-control" type="number" placeholder="Nhập số điện thoại bố" name="father_phone">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Số điện thoại mẹ</label>
              <input class="form-control" type="number" placeholder="Nhập số điện thoại mẹ" name="mother_phone">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nghề nghiệp bố</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại mẹ" name="father_job">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="control-label">Nghề nghiệp mẹ</label>
              <input class="form-control" type="text" placeholder="Nhập số điện thoại mẹ" name="mother_job">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text" placeholder="Nhập địa chỉ phụ huynh" name="address">
            </div>
          </div>
        </div>
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Đăng ký</button>
        </div>
      </form>
    </div>
    
  </main>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/parents/add.blade.php ENDPATH**/ ?>