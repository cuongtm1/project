<?php $__env->startSection('info','is-expanded'); ?>
<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Edit Childen</h1>
          <p>Form Edit Childen</p>
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
            <h3 class="tile-title">Form Edit Childen</h3>
            <?php echo e(sss("edit")); ?>

            <div class="tile-body">

              <form action="admin/Childrens/SaveEdit/<?php echo e($childen->id); ?>" method="POST">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" name="name" type="text" value="<?php echo e($childen->fullname); ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Lớp học</label>
                    <select name="lop" class="form-control" type="text">
                      <?php foreach ($class as $key => $value):?>
                      <option <?php  if ($childen->class_id == $value->id):?> selected <?php endif ?>
                      value="<?=$value->id ?>">Lớp  <?=$value->age ?> Tuổi</option>
                      <?php endforeach?>
                    </select>
                  </div>
                <div class="form-group">
                  <label class="control-label">Ngày sinh</label>
                  <input class="form-control" name="ngaysinh" type="date" value="<?php echo e($childen->birthday); ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Nơi sinh</label>
                    <input class="form-control" name="noisinh" type="text" value="<?php echo e($childen->place_of_birth); ?>">
                  </div>
                <div class="form-group">
                  <label class="control-label">Địa chỉ</label>
                  <textarea class="form-control" name="diachi" rows="4"><?php echo e($childen->permanent_residence); ?></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Giới tính</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input name="gioitinh" <?php if ($childen->gender == 1):?> checked <?php endif ?>class="form-check-input" type="radio" value="1" >Nam
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input name="gioitinh" <?php if ($childen->gender == 0):?> checked <?php endif ?> class="form-check-input" type="radio" value="0" >Nữ
                    </label>
                  </div>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/childen/FormeditChilden.blade.php ENDPATH**/ ?>