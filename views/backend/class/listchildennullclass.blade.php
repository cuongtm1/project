@extends('backend.master.masterlayout')
@section('content')
<script type="text/javascript">
  $(document).ready(function() {
      $('#select_all').change(function() {
        var checkboxes = $(this).closest('form').find(':checkbox');
        checkboxes.prop('checked', $(this).is(':checked'));
      });
  });
</script>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách học sinh chưa có lớp</h1>
        </div>
       
      </div>
      <form action="admin/class/addcheckbox" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="select_all" name="select_all"></th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ </th>
                    <th>Nơi sinh</th>
                    <th>Giới tính</th>
                  </tr>
                </thead>
                <input type="hidden" name="class" value="{{ $class->id }}">
                <tbody>
                  <?php foreach ($test as $value):?>
                  <tr>
                    <td><input type="checkbox" name="select[]" value="<?=$value['id']  ?>" class="checkbox"></td>
                    <td><?=$value['fullname']  ?></td>
                    <td><?=$value['birthday']  ?></td>
                    <td><?=$value["permanent_residence"]  ?></td>
                    <td><?=$value["place_of_birth"]  ?></td>
                    <td><?php if($value["gender"]==0){echo "Nữ";}else{echo "nam";} ?></td>
                  </tr>
                  <?php endforeach?>
                </tbody>
                
              </table>
            </div>
            <td><button onclick="return add()" class="btn btn-success">Thêm</button></td>
          </div>
        </form>
        </div>
     
      </div>
    </main>
    @endsection

    <script>
      function del(){
        let comf=confirm("Bạn có muốn xóa không");
        return comf;
      }

      function add(){
        let comf=confirm("Bạn có muốn thêm học sinh không?");
        return comf;
      }
    </script>