@extends('backend.master.masterlayout')
@section('image','is-expanded')
@section('content')
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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th> Hình Ảnh</th>
                    <th><a class="btn btn-info" href="admin/image/add">Thêm Ảnh</a> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($show as $key => $value):?>
                  <tr>
                    <td><img width="150px" src="public/image/{{ $value->image }}" alt=""></td>
                    

                    <td><a class="btn btn-success" href="admin/image/edit/<?=$value->id  ?>">Sửa</a>
                    <a onclick=" return del()" class="btn btn-danger" href="admin/image/del/<?=$value->id  ?>">xóa</a>
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