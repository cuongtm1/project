<?php $__env->startSection('news','is-expanded'); ?>
<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Add cate</h1>
          <p>Form Add cate</p>
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
            <h3 class="tile-title">Form Add Cate</h3>
            <?php echo e(sss("add")); ?>

            <div class="tile-body">

              <form action="admin/category/FormSaveAdd" method="POST">
                <div class="form-group">
                  <label class="control-label">Cate Name</label>
                  <br>
                  <span style="color: red;"><?php if (isset($tb)) {
                   echo $tb;
                  } ?></span>
                  <input class="form-control" name="name" type="text" placeholder="Enter Cate name">
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\project1\views/backend/categories/FormAddCate.blade.php ENDPATH**/ ?>