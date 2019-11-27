<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách lớp học</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active"><a href="#"></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Tên lớp học</th>
                    <th> Độ tuổi </th>
                    <th><a class="btn btn-info" href="admin/class/FormAdd">Thêm</a> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($class as $key => $value):?>
                  <tr>
                    <td><?=$value->name ?></td>
                    <td><?=$value->age  ?></td>
                    <td><a class="btn btn-success" href="admin/class/Formedit/<?=$value->id  ?>">Sửa</a>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/class/del/<?=$value->id  ?>">xóa</a>
                    <a class="btn btn-warning" href="admin/class/detail/<?=$value->id  ?>">Chi tiết</a>
                    </td>
                  </tr>
                  <?php endforeach?>
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/class/listclass.blade.php ENDPATH**/ ?>