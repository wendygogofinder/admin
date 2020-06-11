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
      <h3>會員管理/Member Management &emsp;<a href="admin_add" class="btn  btn-info mr-2"> 新增會員</a></h3> 
    </div>
    <!-- //card heading -->
    <!-- content admin-->
    <div class="card card_border py-2 mb-4 contentbox">
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
          @foreach($admin as $k=>$a)
          <tr>
            <th>{{$k+1}}</th>
            <td>@if($a['sh']=='1')啟用 @else 停用 @endif</td>
            <td></td>
            <td>{{$a['uname']}}&emsp;({{$a['username']}})</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['date']}}</td>
            <td>
              <button class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
              <button  class="btn-sm btn-info"><i class="fas fa-edit"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @if(empty($a['id']))
    <div class="row cards__heading text-center">
      <div class="col-lg-12 pr-lg-4 ">
        <h4 class="text-danger "><strong> 目前資料庫中沒有任何資料!</strong></h4>
      </div>
    </div>
    @endif
    <!-- //content admin-->
  </div>
  <!-- //content -->
@endsection
