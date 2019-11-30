@extends('backend.master.masterlayout')
@section('info','is-expanded')
@section('content')

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Edit class</h1>
          <p>Form Edit class</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Form Edit class</h3>
            {{ sss("edit") }}
            <div class="tile-body">

              <form action="admin/class/SaveEdit/{{ $class->id }}" method="POST">
                <div class="form-group">
                  <label class="control-label">Tên lớp học</label>
                  <input class="form-control" name="name" type="text" value="{{ $class->name }}">
                </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Sửa</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </main>
    @endsection