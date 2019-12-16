<?php $__env->startSection('album','active'); ?>
<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách ảnh đẹp</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active"><a href="#"></a></li>
        </ul>
      </div>
      <?php echo e(sss('delImage')); ?>

      <?php echo e(sss('addAlbum')); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th> Tiêu đề</th>
                    <th> Số lượng ảnh</th>
                    <th><a class="btn btn-info" href="admin/image/add">Thêm Album</a> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($value->title); ?></td>
                    <td><?php echo e(count($value->getPicture)); ?></td>
                    <td><a class="btn btn-success" href="admin/image/chi-tiet/<?php echo e($value->id); ?>">chi tiết</a>
                    <a onclick="return del()" class="btn btn-danger" href="admin/image/del/<?php echo e($value->id); ?>">xóa</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php $__env->stopSection(); ?>

    <script>
      function del(){
        let comf=confirm("Bạn có muốn xóa không");
        return comf;
      }
    </script>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/image/listimage.blade.php ENDPATH**/ ?>