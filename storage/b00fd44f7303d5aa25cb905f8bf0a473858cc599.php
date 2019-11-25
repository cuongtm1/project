<?php $__env->startSection('content'); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Edit cate</h1>
          <p>Form Edit cate</p>
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
            <h3 class="tile-title">Form Edit Cate</h3>
            <?php echo e(sss("edit")); ?>

            <div class="tile-body">

              <form action="admin/category/SaveEdit/<?php echo e($cate->id); ?>" method="POST">
                <div class="form-group">
                  <label class="control-label">Cate Name</label>
                  <input class="form-control" name="name" type="text" value="<?php echo e($cate->name); ?>">
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/categories/FormEditCate.blade.php ENDPATH**/ ?>