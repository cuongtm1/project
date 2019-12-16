<?php $__env->startSection('album','active'); ?>
<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Chi tiết album ảnh</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active"><a href="#"></a></li>
        </ul>
      </div>
      <?php echo e(sss('xoapicture')); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>IMAGE</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><img src="public/beautifuls/<?php echo e($value->image); ?>" alt="" style="max-width: 200px"></td>
                    <td>
                      <a onclick="return del()" href="admin/image/beautifuls/del/<?php echo e($value->id); ?>" class="btn btn-danger">Xóa</a>
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/image/chitiet.blade.php ENDPATH**/ ?>