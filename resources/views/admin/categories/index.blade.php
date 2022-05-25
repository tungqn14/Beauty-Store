@extends("admin.master")
@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Danh mục</h1>
        </div>
        <div class="col-lg-6 text-right">
            <a href="#" class="page-header btn btn-success "> Thêm mới</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Thuộc danh mục</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>




</div>


  @endsection
