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
            {{ sss("ok") }}
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Người gửi</th>
                    <th>nội dung</th>
                    <th>Ngày gửi </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($show as $value1)
                    <tr>
                      @foreach ($user as $value)
                      @if($value->id == $value1->id_user)
                      <td>{{ $value->phone }}</td>
                      @endif
                      @endforeach
                      <td>{{ $value1->content }}</td>
                      <td>{{ $value1->created_at }}</td>
                      <td><a onclick="return del()" class="btn btn-danger" href="admin/comment/del/{{ $value1->id }}/{{ $value1->id_news }}">Xóa</a></td>
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