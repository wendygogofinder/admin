@extends('layouts.master')
@section('content')
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">編輯會員</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
        <h4>編輯會員&emsp;<small class="text-muted">Edit Member</small></h4>
      </div>
    <!-- //card heading -->
    <!-- forms 3 -->
    <form action="../admin_edit" method="post">
        @csrf
        <div class="card card_border py-2 mb-4 contentbox">
            <div class="cards__heading">
            <h6>親愛的管理員，您正在編輯&emsp;<span class="text-danger" text-lg>{{$name}}</span>&emsp;會員的資料,「<span class="text-danger">*</span>」為必填欄位</h6 text-info>
            </div>
            <div class="card-body">
                <form action="board_add" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputusername" class="col-sm-2 col-form-label input__label">帳號<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                        &emsp;{{$admin['username']}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputuname" class="col-sm-2 col-form-label input__label">姓名<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-style" id="inputuname" name="uname" required value="{{$admin['uname']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnewpassword" class="col-sm-2 col-form-label input__label">變更密碼</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control input-style" id="inputnewpassword" name="Newpassword">
                            <span class="text-danger">*如需變更密碼才輸入!</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputemail" class="col-sm-2 col-form-label input__label">E-mail<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control input-style" id="inputemail" name="email" required value="{{$admin['email']}}">
                            <span class="text-danger">*請勿使用會檔信的yahoo、pchome信箱，以免收不到註冊信及訂閱之會員電子報。</span>
                        </div>
                    </div>
                    <fieldset class="form-group py-3">
                        <div class="row">
                            <legend  for="inputsex" class="col-form-label col-sm-2 pt-0 input__label">性別</legend>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="inputsex" value="man" name="sex" @if($admin['sex']=="man")checked @endif>男
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="inputsex" value="woman" name="sex" @if($admin['sex']=="woman")checked @endif>女
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inputsex" value="Y" name="orderPaper" @if($admin['orderPaper']=="Y")checked @endif>訂閱
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="inputdate" class="col-sm-2 col-form-label input__label">生日</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control input-style" id="inputdate" name="birthday" required value="{{$admin['birthday']}}">
                        <span class="text-danger">*格式為：YYYY-MM-DD</span> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputphone" class="col-sm-2 col-form-label input__label">電話</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control input-style" id="inputphone" name="phone" required value="{{$admin['phone']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputArea" class="col-sm-2 col-form-label input__label">郵遞區號</label>
                        <div class="col-sm-10">
                            <select onChange="citychange(this.form)" name="Area" class="select" required>
                                <option value="基隆市" @if($admin['Area']=="基隆市")selected @endif>基隆市</option>
                                <option value="臺北市" @if($admin['Area']=="臺北市")selected @endif>臺北市</option>
                                <option value="新北市" @if($admin['Area']=="新北市")selected @endif>新北市</option>
                                <option value="桃園縣" @if($admin['Area']=="桃園縣")selected @endif>桃園縣</option>
                                <option value="新竹市" @if($admin['Area']=="新竹市")selected @endif>新竹市</option>
                                <option value="新竹縣" @if($admin['Area']=="新竹縣")selected @endif>新竹縣</option>
                                <option value="苗栗縣" @if($admin['Area']=="苗栗縣")selected @endif>苗栗縣</option>
                                <option value="臺中市" @if($admin['Area']=="臺中市")selected @endif>臺中市</option>
                                <option value="彰化縣" @if($admin['Area']=="彰化縣")selected @endif>彰化縣</option>
                                <option value="南投縣" @if($admin['Area']=="南投縣")selected @endif>南投縣</option>
                                <option value="雲林縣" @if($admin['Area']=="雲林縣")selected @endif>雲林縣</option>
                                <option value="嘉義市" @if($admin['Area']=="嘉義市")selected @endif>嘉義市</option>
                                <option value="嘉義縣" @if($admin['Area']=="嘉義縣")selected @endif>嘉義縣</option>
                                <option value="臺南市" @if($admin['Area']=="臺南市")selected @endif>臺南市</option>
                                <option value="高雄市" @if($admin['Area']=="高雄市")selected @endif>高雄市</option>
                                <option value="屏東縣" @if($admin['Area']=="屏東縣")selected @endif>屏東縣</option>
                                <option value="臺東縣" @if($admin['Area']=="臺東縣")selected @endif>臺東縣</option>
                                <option value="花蓮縣" @if($admin['Area']=="花蓮縣")selected @endif>花蓮縣</option>
                                <option value="宜蘭縣" @if($admin['Area']=="宜蘭縣")selected @endif>宜蘭縣</option>
                                <option value="澎湖縣" @if($admin['Area']=="澎湖縣")selected @endif>澎湖縣</option>
                                <option value="金門縣" @if($admin['Area']=="金門縣")selected @endif>金門縣</option>
                                <option value="連江縣" @if($admin['Area']=="連江縣")selected @endif>連江縣</option>
                              </select>
                              <select onChange="areachange(this.form)" name="cityarea" class="select" required>
                                <option value="中正區" @if($admin['cityarea']=="中正區")selected @endif>中正區</option>
                                <option value="大同區" @if($admin['cityarea']=="大同區")selected @endif>大同區</option>
                                <option value="中山區" @if($admin['cityarea']=="中山區")selected @endif>中山區</option>
                                <option value="松山區" @if($admin['cityarea']=="松山區")selected @endif>松山區</option>
                                <option value="大安區" @if($admin['cityarea']=="大安區")selected @endif>大安區</option>
                                <option value="萬華區" @if($admin['cityarea']=="萬華區")selected @endif>萬華區</option>
                                <option value="信義區" @if($admin['cityarea']=="信義區")selected @endif>信義區</option>
                                <option value="士林區" @if($admin['cityarea']=="士林區")selected @endif>士林區</option>
                                <option value="北投區" @if($admin['cityarea']=="北投區")selected @endif>北投區</option>
                                <option value="內湖區" @if($admin['cityarea']=="內湖區")selected @endif>內湖區</option>
                                <option value="南港區" @if($admin['cityarea']=="南港區")selected @endif>南港區</option>
                                <option value="文山區" @if($admin['cityarea']=="文山區")selected @endif>文山區</option>
                              </select>
                              <input type="hidden" value="100" name="Mcode" />
                            <input name="cuszip" value="100" size="5" maxlength="5" readonly="readOnly" class="select" required value="{{$admin['cuszip']}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcusadr" class="col-sm-2 col-form-label input__label">完整地址</label>
                        <div class="col-sm-10">
                            <span class="bs">
                            <label><input name="cusadr" type="address" id="cusadr" size="60" class="select" required value="{{$admin['cusadr']}}"/></label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group row title_float">
                        <div class="col-sm-12">
                        <input type="hidden" name="id" value="{{$admin['id']}}">
                            <input type="hidden" name="date" value="{{date("Y-m-d H:i:s")}}">
                            <button type="submit" class="btn btn-primary btn-style">送出留言</button>
                            <input type="button" class="btn border-primary btn-style" onclick="location.href='../admin'" value="返回">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- //forms 3 -->

  </div>
  <!-- //content -->
  <script>
    function refresh_code() {
      document.getElementById("imgcode").src = "../captcha.php";
    } 
  $(document).ready(function(){
	$("#memberadd").validate({
    submitHandler: function(form) {
			form.submit();
		},
		errorPlacement: function(error, element) {
			element.closest('.board_add').append(error);
		},
		rules: {
			repassword: {
				equalTo : '#pw'
			}
		}
	});
});
</script>
@endsection