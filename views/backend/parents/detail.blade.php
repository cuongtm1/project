@extends('backend.master.masterlayout')
@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-file-text-o"></i> Thông tin chi tiết phụ huynh</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Invoice</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              {{-- <h2 class="page-header"><i class="fa fa-globe"></i> Vali Inc</h2> --}}
            </div>
          </div>
          <div class="row invoice-info">
            <div class="col-4">Thông tin bố<br>
              <address><strong>{{ $parent->father_name }}</strong><br>SĐT: {{ $parent->father_phonenumber }}<br>Nghề nghiệp : {{ $parent->father_job }}<br>Địa chỉ: {{ $parent->address }}<br>Email: {{ $parent->email }}</address>
            </div>
            <div class="col-4">Thông tin mẹ<br>
              <address><strong>{{ $parent->mother_name }}</strong><br>SĐT: {{ $parent->mother_phonenumber }}<br>Nghề nghiệp : {{ $parent->mother_job }}<br>Địa chỉ: {{ $parent->address }}<br>Email: {{ $parent->email }}</address>
            </div>
            <div class="col-4"></div>
          </div>
          <h3>Thông tin các con đang theo học</h3>
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Ngày sinh</th>
                    <th>Thường trú</th>
                    <th>Nơi sinh</th>
                    <th>Giới tính</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach($parent->getChildren as $children)

                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $children->birthday }}</td>
                    <td>{{ $children->permanent_residence }}</td>
                    <td>{{ $children->place_of_birth }}</td>
                    <td>{{ gender($children->gender) }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
@endsection