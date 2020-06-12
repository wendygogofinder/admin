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
      <h4>留言板管理&emsp;<small class="text-muted">Content Blocks</small><a href="board_add" class="btn btn-info mr-2 title_float"><i class="fas fa-plus"></i>&nbsp;新增留言</a> </h4>
    </div>
    <!-- //card heading -->

    <!-- content block style 2-->
    @foreach($board as $show)
    <div class="card card_border p-lg-5 p-3 mb-4 ">
      <div class="card-body py-3 p-0">
        <div class="row">
          <div class="col-lg-3 pr-lg-4 text-center">
          <img src="assets/images/face/{{$show['board_pic']}}" alt="" class=" rounded" /><br><br>
            <h5 >wendy</h5><br>
              {{-- 刪除 --}}
              <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal"
                  data-target="#board">
                  刪除
                </button>
                <!-- Modal -->
                <div class="modal fade" id="board" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$show['board_name']}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        您確定要刪除嗎?
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-success" onclick="location.href='board_delete/{{$show['id']}}/board'">確定</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-7 align-self pl-lg-4 mt-lg-0 mt-4 test-center">
          <div class=" mb-lg-4 text-right"><h5 >留言時間:{{$show['board_date']}}</h5></div>
            <p class="mb-3"><textarea name="board" cols="120" rows="5" readonly>{{$show['board_content']}}</textarea></p>
          <div class="mb-lg-3">
            <a href="mailto:{{$show['board_email']}}"><img src="../images/board_email.gif" width="40" height="19" border="0" /></a>
            IP位置：{{$show['board_ip']}}
          </div>
          <div class="mb-lg-2">
           <hr class="bg-dark">
          </div>
              </tr>
            </table>
            <h5 class=" mb-lg-4">管理員回覆:</h5>
            <form action="board_edit" method="post">
              @csrf
              @foreach($board_r[$show['id']] as $show_r)
                <span class="text-right"><h5 >留言時間:{{$show_r['board_date']}}</h5></span>
                <textarea name="board_content[]" cols="120" rows="3" required>{{$show_r['board_content']}}</textarea>
                <input type="hidden" name="board_r_id[]" value="{{$show_r['id']}}">
                  {{-- 刪除 --}}
                <!-- Button trigger modal -->
                <div>
                <button type="button" class="btn btn-danger align-items-start" data-toggle="modal"
                  data-target="#board_R">
                  刪除
                </button>
                <!-- Modal -->
                <div class="modal fade" id="board_R" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$show['board_name']}}留言</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        您確定要刪除嗎?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="location.href='board_delete/{{$show_r['id']}}/1'">確定</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                @endforeach<br>
              <a href="board_R/{{$show['id']}}" class="btn btn-primary mr-2"> 回覆留言</a>
              <input type="submit"class="btn border-btn" value="修改留言">
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @if(empty($show['id']))
    <div class="row cards__heading text-center">
      <div class="col-lg-12 pr-lg-4 ">
        <h4 class="text-danger "><strong> 目前資料庫中沒有任何資料!</strong></h4>
      </div>
    </div>
    @endif
    <!-- //content block style 2-->
  </div>
  <!-- //content -->
@endsection