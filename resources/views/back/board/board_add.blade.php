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
      <h3>新增留言 &emsp;</h3> 
    </div>
    <!-- //card heading -->
 <!-- horizontal forms-->
            <!-- forms 3 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h6 class="text-primary">任何與網站相關的問題，都歡迎留言喔~~ <span></span></h6 text-info>
                </div>
                <div class="card-body">
                    <form action="board_add" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label input__label">標題</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-style" id="inputEmail3" name="board_title" required
                                    placeholder="標題">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">姓名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-style" id="inputPassword3" name="board_name" required
                                    placeholder="姓名">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-style" id="inputPassword3" name="board_email" required
                                    placeholder="email">
                            </div>
                        </div>
                        <fieldset class="form-group py-3 text-center">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 input__label">圖示</legend>
                                <div class="col-sm-2">
                                    <div id="board_pic"><img src="assets/images/face/face1.gif" width="80" height="80" /></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" value="face1.gif" name="board_pic" checked>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div id="board_pic"><img src="assets/images/face/face2.gif" width="80" height="80" /></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" value="face2.gif" name="board_pic">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div id="board_pic"><img src="assets/images/face/face3.gif" width="80" height="80" /></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" value="face3.gif" name="board_pic">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div id="board_pic"><img src="assets/images/face/face4.gif" width="80" height="80" /></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" value="face4.gif" name="board_pic">
                                    </div>
                                </div>
                            </div>
                            
                        </fieldset>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">留言</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control input-style" name="board_content" id="inputPassword3" cols="30" rows="10" placeholder="留言" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="hidden" name="board_date" value="{{date("Y-m-d H:i:s")}}">
                                <input name="board_ip" type="hidden" id="board_ip" value="
                                    @if(!empty($_SERVER['HTTP_CLIENT_IP']))
                                    {{$myip = $_SERVER['HTTP_CLIENT_IP']}}
                                    @elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                                      {{$myip = $_SERVER['HTTP_X_FORWARDED_FOR']}}
                                    @else
                                      {{$myip= $_SERVER['REMOTE_ADDR']}}
                                    @endif" />
                                <button type="submit" class="btn btn-primary btn-style">送出留言</button>
                                <button type="reset" class="btn btn-primary btn-style">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //forms 3 -->
            <!-- //horizontal forms-->

  </div>
  <!-- //content -->
@endsection