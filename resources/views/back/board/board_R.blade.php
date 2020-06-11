@extends('layouts.master')
@section('content')
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">留言板管理</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>回覆留言 &emsp;</h3> 
    </div>
    <!-- //card heading -->

    <!-- content block style 2-->
    <div class="card card_border p-lg-5 p-3 mb-4 ">
      <div class="card-body py-3 p-0">
        <div class="row">
          <div class="col-lg-3 pr-lg-4 text-center">
          <img src="../assets/images/face/{{$board['board_pic']}}" alt="" class=" rounded" /><br><br>
            <h5 >{{$board['board_name']}}</h5><br>
          </div>
          <div class="col-lg-7 align-self pl-lg-4 mt-lg-0 mt-4 test-center">
          <div class=" mb-lg-4 text-right"><h5 >留言時間:&emsp;{{$board['created_at']}}</h5></div>
            <form action="../board_R_Add" method="post">
              @csrf
              <p class="mb-3"><textarea name="board" cols="120" rows="5" readonly>{{$board['board_content']}}</textarea></p>
              <h5 class=" mb-lg-4">管理員回覆:</h5>
                <textarea cols="120" rows="5" name="board_content"></textarea><br>
                  <input type="hidden" name="board_date" value="{{date("Y-m-d H:i:s")}}">
                  <input type="hidden" name="board_email" value="{{$board['board_email']}}">
                  <input type="hidden" name="board_title" value="{{$board['board_title']}}">
                  <input type="hidden" name="board_pic" value="{{$board['board_pic']}}">
                  <input type="hidden" name="board_r_id" value="{{$board['id']}}" />
              <input type="submit"class="btn btn-style btn-primary mr-2" value="回覆">
              <a href="../board" class="btn btn-style border-btn">返回</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- //content block style 2-->
  </div>
  <!-- //content -->
@endsection