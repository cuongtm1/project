<?php $__env->startSection('contact','is-expanded'); ?>
<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách liên hệ</h1>
        </div>
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Họ tên</th>
                    <th>Ngày gửi</th>
                    <th>Tiêu đề </th>
                    <th>Email </th>
                    <th>Phone</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list as $key => $value):?>
                  <tr>
                    <td><?=$value->fullname  ?></td>
                    <td><?=$value->created_at  ?></td>
                    <td><?=$value->title  ?></td>
                    <td><?=$value->email  ?></td>
                    <td><?=$value->phone  ?></td>
                    
                    
                      <?php if($value->checked == 0): ?>
                      <td style="color:red; font-weight:bold">
                      <?php echo "Chưa xử lý";?>
                    </td>
                      <?php endif ?>
                       
                      <?php if($value->checked != 0): ?>
                      <td style="color:green; font-weight:bold">
                          <?php echo "đã xử lý";?>
                    </td>
                      <?php endif ?>


                    <td>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/lien-he/del/<?=$value->id  ?>">xóa</a>
                    <a class="btn btn-warning" href="admin/lien-he/detail/<?=$value->id?>">Chi tiết</a></td>
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
<?php echo $__env->make('backend.master.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\views/backend/Contact/listContact.blade.php ENDPATH**/ ?>