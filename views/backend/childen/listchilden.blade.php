@extends('backend.master.masterlayout')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách học sinh</h1>
        </div>
       
      </div>
      {{ sss('addchildren') }}
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Lớp học</th>
                    <th>Địa chỉ </th>
                    <th>Nơi sinh</th>
                    <th>Giới tính</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($childens as $key => $value):?>
                  <tr>
                    <td><?=$value->fullname  ?></td>
                    <td><?=$value->birthday  ?></td>
                    {{-- Kiểm tra có lớp hay chưa --}}
                    {{-- chưa có --}}
                      <?php if($value->class_id == null): ?>
                      <td>
                      <?php echo "Chưa vào lớp nào";?>
                    </td>
                      <?php endif ?>
                       {{-- có rồi thì in ra --}}
                      <?php if($value->class_id != null): ?>
                      <td>
                      <?=$value->showlop->name ?> (<?=$value->showlop->age ?> Tuổi)
                    </td>
                      <?php endif ?>
                
                    <td><?=$value->permanent_residence  ?></td>
                    <td><?=$value->place_of_birth  ?></td>
                    <td><?php if($value->gender==0){echo "Nữ";}else{echo "nam";} ?></td>
                    <td><a class="btn btn-success" href="admin/Childrens/Formedit/<?=$value->id  ?>">Sửa</a>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/Childrens/del/<?=$value->id  ?>">xóa</a>
                    <a class="btn btn-warning" href="admin/Childrens/Detail/<?=$value->id  ?>">Chi tiết</a></td>
                  </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection

    <script>
      function del(){
        let comf=confirm("Bạn có muốn xóa không");
        return comf;
      }
    </script>