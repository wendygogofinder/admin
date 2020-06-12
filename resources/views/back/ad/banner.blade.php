@extends('layouts.master')
@section('content')
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">會員管理</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h4>會員管理&emsp;<small class="text-muted">Member Management</small><a href="admin_add" class="btn btn-info mr-2 title_float"> <i class="fas fa-plus"></i>&nbsp;新增會員</a> </h4>
    </div>
    <!-- //card heading -->
    <!-- content admin-->
    <div class="card card_border py-2 mb-4 contentbox col-lg-12 col-sm-3">
      <table class="table table-hover" id="admin" >
        <thead >
          <tr>
            <th>#</th>
            <th>啟用</th>
            <th>排序</th>
            <th>會員名稱&emsp;(帳號)</th>
            <th>信箱</th>
            <th>加入日期</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th></th>
            <td>@if($a['sh']=='1') <a href="admin_sh/{id}">啟用</a>  @else <a href="">停用</a>  @endif</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <button type="button" class="btn-sm btn-danger" data-toggle="modal"
              data-target="#admin_button"><i class="far fa-trash-alt"></i></button>
              <button class="btn-sm btn-primary" onclick="location.href='admin_edit/'"><i class="fas fa-edit"></i></button>
                  <!-- Modal -->
                  <div class="modal fade" id="admin_button" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><span class="text-danger"></span>會員資料您確定你要刪除? </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          刪除後無法復原
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" onclick="location.href='admin_delete/'">確定</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- //content admin-->
  </div>
  <!-- //content -->
@endsection
