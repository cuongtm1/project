<?php $__env->startSection('content'); ?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Thêm học sinh</h1>
    </div>
    
  </div>

  <div class="tile">
    
    <div class="tile-body">
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo e($parent->id); ?>">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Tên bố</label>
              <input class="form-control" type="text" readonly="" value="<?php echo e($parent->father_name); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Tên mẹ</label>
              <input class="form-control" type="text" readonly="" value="<?php echo e($parent->mother_name); ?>">
            </div>
          </div>
          <div class="col-md-4"><div class="form-group">
            <label class="control-label">Họ tên</label>
            <input class="form-control" name="name" type="text" placeholder="Nhập họ tên">
          </div></div>
          <div class="col-md-4"><div class="form-group">
            <label class="control-label">Lớp học</label>
            <select name="lop" class="form-control" type="text" placeholder="Enter class">
              <?php foreach ($class as $key => $value):?>
              <option value="<?=$value->id ?>">Lớp  <?=$value->age ?> Tuổi</option>
              <?php endforeach?>
            </select>
          </div></div>
          <div class="col-md-4"><div class="form-group">
            <label class="control-label">Ngày sinh</label>
            <input class="form-control" name="ngaysinh" type="date" placeholder="Enter Birthday">
          </div></div>
          <div class="col-md-12"><div class="form-group">
            <label class="control-label">Nơi sinh</label>
            <input class="form-control" name="noisinh" type="text" placeholder="Nhập nơi sinh">
          </div></div>
          <div class="col-md-12"><div class="form-group">
            <label class="control-label">Địa chỉ</label>
            <textarea class="form-control" name="diachi" rows="4" placeholder="Nhập địa chỉ"></textarea>
          </div></div>
          <div class="col-md-12"><div class="form-group">
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
      </div>
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
        </div>
    </div>
  </div>
</form>
</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/childen/FormAddChilden.blade.php ENDPATH**/ ?>