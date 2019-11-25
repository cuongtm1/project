@extends('backend.master.masterlayout')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Full_Name</th>
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
                    <td><?=$value->showlop->age ?> Tuổi</td>
                    <td><?=$value->permanent_residence  ?></td>
                    <td><?=$value->place_of_birth  ?></td>
                    <td><?php if($value->gender==0){echo "Nữ";}else{echo "nam";} ?></td>

                    <td><a class="btn btn-success" href="admin/Childrens/Formedit/<?=$value->id  ?>">Sửa</a>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/Childrens/del/<?=$value->id  ?>">xóa</a>
                    <a class="btn btn-warning" href="">Chi tiết</a></td>
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