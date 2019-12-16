<?php $__env->startSection('info','is-expanded'); ?>
<?php $__env->startSection('content'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-file-text-o"></i> Thông tin chi tiết phụ huynh</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Invoice</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              
            </div>
          </div>
          <div class="row invoice-info">
            <div class="col-4">Thông tin bố<br>
              <address><strong><?php echo e($parent->father_name); ?></strong><br>SĐT: <?php echo e($parent->father_phonenumber); ?><br>Nghề nghiệp : <?php echo e($parent->father_job); ?><br>Địa chỉ: <?php echo e($parent->address); ?><br>Email: <?php echo e($parent->email); ?></address>
            </div>
            <div class="col-4">Thông tin mẹ<br>
              <address><strong><?php echo e($parent->mother_name); ?></strong><br>SĐT: <?php echo e($parent->mother_phonenumber); ?><br>Nghề nghiệp : <?php echo e($parent->mother_job); ?><br>Địa chỉ: <?php echo e($parent->address); ?><br>Email: <?php echo e($parent->email); ?></address>
            </div>
            <div class="col-4"></div>
          </div>
          <h3>Thông tin các con đang theo học</h3>
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Tên học sinh</th>
                    <th>Ngày sinh</th>
                    <th>Thường trú</th>
                    <th>Nơi sinh</th>
                    <th>Giới tính</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  ?>
                  <?php $__currentLoopData = $parent->getChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                    <td><?php echo e($children->fullname); ?></td>
                    <td><?php echo e($children->birthday); ?></td>
                    <td><?php echo e($children->permanent_residence); ?></td>
                    <td><?php echo e($children->place_of_birth); ?></td>
                    <td><?php echo e(gender($children->gender)); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/parents/detail.blade.php ENDPATH**/ ?>