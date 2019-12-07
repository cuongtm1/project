@extends('backend.phuhuynh.master.masterlayout')
@section('hoso','active')
@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Thông tin phụ huynh</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-3">
         <div class="tile">
          <div class="col-12" style="border-bottom:1px solid red">
            <center style="margin-bottom: 10px">
              <img src="public/images/NO.png" alt="">
            </center>
            <p>Số điện thoại : <b>{{ $user->phone }}</b></p>
          </div>
          <div class="col-12" style="margin-top:20px">
            <div>
              <p>Email : <b>{{ $user->getParent->email }}</b></p>
            </div>
            <div style="margin-top: 20px">
              <p>Địa chỉ : <b>{{ $user->getParent->address }}</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div style="background: #009688;padding: 10px;color:#fff">
          <h2>Thông tin chi tiết</h2>
        </div>
        <div class="tile">

          <div class="detail-parents">
            <h5>Phụ Huynh</h5>
            <div style="border:1px solid #dadada;padding: 10px">
              <div class="row">
                <div class="col-6">
                  <h6>Thông tin bố</h6>
                  <div class="row">
                    <div class="col-3">
                      <p>Họ tên: </p>
                      <p>Số điện thoại: </p>
                      <p>Nghề nghiệp: </p>
                      <p>Email: </p>
                      <p>Địa chỉ: </p>
                    </div>
                    <div class="col-9">
                      <p>{{ $user->getParent->father_name }}</p>
                      <p>{{ $user->getParent->father_phonenumber }}</p>
                      <p>{{ $user->getParent->father_job }}</p>
                      <p>{{ $user->getParent->email }}</p>
                      <p>{{ $user->getParent->address }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <h6>Thông tin mẹ</h6>
                  <div class="row">
                    <div class="col-3">
                      <p>Họ tên: </p>
                      <p>Số điện thoại: </p>
                      <p>Nghề nghiệp: </p>
                      <p>Email: </p>
                      <p>Địa chỉ: </p>
                    </div>
                    <div class="col-9">
                      <p>{{ $user->getParent->mother_name }}</p>
                      <p>{{ $user->getParent->mother_phonenumber }}</p>
                      <p>{{ $user->getParent->mother_job }}</p>
                      <p>{{ $user->getParent->email }}</p>
                      <p>{{ $user->getParent->address }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-chilrens" style="margin-top: 10px">
            <h5>Học sinh</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="tile-body">
                  <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Lớp học</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- {{ dd(count($user->getParent->getChildren)) }} --}}
                      @foreach($user->getParent->getChildren as $value)
                      <tr>
                        <td>{{ $value->fullname }}</td>
                        <td>{{ $value->birthday }}</td>
                        <td>{{ getGender($value->gender) }}</td>
                        <td>{{ checkClass($value->showlop) }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>
@endsection