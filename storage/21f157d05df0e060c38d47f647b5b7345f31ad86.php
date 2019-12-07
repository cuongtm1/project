<?php $__env->startSection('hoso','active'); ?>
<?php $__env->startSection('content'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Thông tin phụ huynh</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-3">
         <div class="tile">
          <div class="col-12" style="border-bottom:1px solid red">
            <center style="margin-bottom: 10px">
              <img src="public/images/NO.png" alt="">
            </center>
            <p>Số điện thoại : <b><?php echo e($user->phone); ?></b></p>
          </div>
          <div class="col-12" style="margin-top:20px">
            <div>
              <p>Email : <b><?php echo e($user->getParent->email); ?></b></p>
            </div>
            <div style="margin-top: 20px">
              <p>Địa chỉ : <b><?php echo e($user->getParent->address); ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div style="background: #009688;padding: 10px;color:#fff">
          <h2>Thông tin chi tiết</h2>
        </div>
        <div class="tile">

          <div class="detail-parents">
            <h5>Phụ Huynh</h5>
            <div style="border:1px solid #dadada;padding: 10px">
              <div class="row">
                <div class="col-6">
                  <h6>Thông tin bố</h6>
                  <div class="row">
                    <div class="col-3">
                      <p>Họ tên: </p>
                      <p>Số điện thoại: </p>
                      <p>Nghề nghiệp: </p>
                      <p>Email: </p>
                      <p>Địa chỉ: </p>
                    </div>
                    <div class="col-9">
                      <p><?php echo e($user->getParent->father_name); ?></p>
                      <p><?php echo e($user->getParent->father_phonenumber); ?></p>
                      <p><?php echo e($user->getParent->father_job); ?></p>
                      <p><?php echo e($user->getParent->email); ?></p>
                      <p><?php echo e($user->getParent->address); ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <h6>Thông tin mẹ</h6>
                  <div class="row">
                    <div class="col-3">
                      <p>Họ tên: </p>
                      <p>Số điện thoại: </p>
                      <p>Nghề nghiệp: </p>
                      <p>Email: </p>
                      <p>Địa chỉ: </p>
                    </div>
                    <div class="col-9">
                      <p><?php echo e($user->getParent->mother_name); ?></p>
                      <p><?php echo e($user->getParent->mother_phonenumber); ?></p>
                      <p><?php echo e($user->getParent->mother_job); ?></p>
                      <p><?php echo e($user->getParent->email); ?></p>
                      <p><?php echo e($user->getParent->address); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-chilrens" style="margin-top: 10px">
            <h5>Học sinh</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="tile-body">
                  <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Lớp học</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php $__currentLoopData = $user->getParent->getChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($value->fullname); ?></td>
                        <td><?php echo e($value->birthday); ?></td>
                        <td><?php echo e(getGender($value->gender)); ?></td>
                        <td><?php echo e(checkClass($value->showlop)); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.phuhuynh.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/phuhuynh/index.blade.php ENDPATH**/ ?>