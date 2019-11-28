@extends('backend.master.masterlayout')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách học sinh có trong lớp</h1>
          <p></p>
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
            <p><h4>Lớp {{ $class->name }} ({{ $class->age }} Tuổi)</h4></p>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Tên học sinh</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ </th>
                    <th>Giới tính</th>
                    <th><a class="btn btn-info" href="admin/class/addtoclass/{{ $class->id }}">Thêm học sinh vào lớp</a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($childrens as $key => $value):?>
                  <tr>
                    <td><?=$value->fullname  ?></td>
                    <td><?=$value->birthday  ?></td>
                    <td><?=$value->permanent_residence  ?></td>
                    <td><?php if($value->gender==0){echo "Nữ";}else{echo "nam";} ?></td>

                    <td>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/class/delchildren/<?=$value->id  ?>/{{ $class->id }}">xóa</a>
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
    @endsection

    <script>
      function del(){
        let comf=confirm("Bạn có muốn xóa không");
        return comf;
      }
    </script>