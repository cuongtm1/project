@extends('backend.master.masterlayout')
@section('comment','is-expanded')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách Bình luận</h1>
        </div>
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Tiêu Đề Bài Viết</th>
                    <th>SL Bình luận</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($id_new as $value)
                    <tr>
                      <td>{{ $value->getNews->title }}</td>
                      <td>{{ count($value->getNews->getComment) }}</td>
                      <td><a class="btn btn-warning" href="admin/comment/detail/{{ $value->getNews->id }}">Chi tiết</a></td>
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