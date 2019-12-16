@extends('backend.master.masterlayout')
@section('album','active')
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
      {{ sss('delImage') }}
      {{ sss('addAlbum') }}
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
                  @foreach($show as $value)
                  <tr>
                    <td>{{ $value->title }}</td>
                    <td>{{ count($value->getPicture) }}</td>
                    <td><a class="btn btn-success" href="admin/image/chi-tiet/{{ $value->id }}">chi tiết</a>
                    <a onclick="return del()" class="btn btn-danger" href="admin/image/del/{{ $value->id }}">xóa</a>
                    </td>
                  </tr>
                  @endforeach
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