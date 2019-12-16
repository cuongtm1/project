@extends('backend.master.masterlayout')
@section('album','active')
@section('content')
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
      {{ sss('xoapicture') }}
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>IMAGE</th>
                    <th>{{-- <a class="btn btn-info" href="admin/image/beautifuls/add/{{ $id }}">Thêm ảnh</a> --}}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($image as $value)
                  <tr>
                    <td><img src="public/beautifuls/{{ $value->image }}" alt="" style="max-width: 200px"></td>
                    <td>
                      <a onclick="return del()" href="admin/image/beautifuls/del/{{ $value->id }}" class="btn btn-danger">Xóa</a>
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