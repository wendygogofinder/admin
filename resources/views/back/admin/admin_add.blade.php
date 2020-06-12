@extends('layouts.master')
@section('content')
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">新增會員</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>新增會員 &emsp;</h3> 
    </div>
    <!-- //card heading -->
    <!-- forms 3 -->
    <form action="admin_add" method="post">
        @csrf
        <div class="card card_border py-2 mb-4 contentbox">
            <div class="cards__heading">
                <h6 class="text-primary">歡迎您填妥資料，加入成為網站會員~~ <span></span></h6 text-info>
            </div>
            <div class="card-body">
                <form action="board_add" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputuname" class="col-sm-2 col-form-label input__label">姓名:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-style" id="inputuname" name="uname" required
                                placeholder="請輸入...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputusername" class="col-sm-2 col-form-label input__label">帳號</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-style" id="inputusername" name="username" required
                                placeholder="請輸入...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label input__label">密碼</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control input-style" id="inputPassword" name="password" required
                                placeholder="請輸入...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputrpassword" class="col-sm-2 col-form-label input__label">確認密碼</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control input-style" id="inputrpassword" name="repassword" required
                                placeholder="請輸入...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputemail" class="col-sm-2 col-form-label input__label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control input-style" id="inputemail" name="email" required
                                placeholder="請輸入...">
                                請勿使用會檔信的yahoo、pchome信箱，以免收不到註冊信及訂閱之會員電子報。
                        </div>
                    </div>
                    <fieldset class="form-group py-3">
                        <div class="row">
                            <legend  for="inputsex" class="col-form-label col-sm-2 pt-0 input__label">性別</legend>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="inputsex" value="man" name="sex" checked>男
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="inputsex" value="woman" name="sex">女
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inputsex" value="Y" name="orderPaper" checked>訂閱
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="inputdate" class="col-sm-2 col-form-label input__label">生日</label>
                        <div class="col-sm-10">
                            <select name="year" id="year" class="select" required>
                                <option>年</option>
                                <script>
                                  var watch = new Date();
                                  var thisYear = watch.getFullYear();
                                  for (y = 1900; y <= thisYear; y++) {
                                    document.write("<option value='" + y + "'>" + y + "</option>")
                                  }
                                </script>
                              </select>
                              <select name="month" id="month" class="select" required>
                                <option>月</option>
                                <script>
                                   for(m=01;m<=12;m++){
                                       document.write("<option value='"+m+"'>"+m+"</option>")
                                      }
                               </script>
                              </select>
                              <select name="day" id="day" class="select" required>
                                <option>日</option>
                                <script>
                                   for(d=01;d<=31;d++){
                                       document.write("<option value='"+d+"'>"+d+"</option>")
                                      }
                               </script>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputphone" class="col-sm-2 col-form-label input__label">電話</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-style" id="inputphone" name="phone" required
                                placeholder="請輸入...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputArea" class="col-sm-2 col-form-label input__label">郵遞區號</label>
                        <div class="col-sm-10">
                            <select onChange="citychange(this.form)" name="Area" class="select" required>
                                <option value="基隆市">基隆市</option>
                                <option value="臺北市" selected="selected">臺北市</option>
                                <option value="新北市">新北市</option>
                                <option value="桃園縣">桃園縣</option>
                                <option value="新竹市">新竹市</option>
                                <option value="新竹縣">新竹縣</option>
                                <option value="苗栗縣">苗栗縣</option>
                                <option value="臺中市">臺中市</option>
                                <option value="彰化縣">彰化縣</option>
                                <option value="南投縣">南投縣</option>
                                <option value="雲林縣">雲林縣</option>
                                <option value="嘉義市">嘉義市</option>
                                <option value="嘉義縣">嘉義縣</option>
                                <option value="臺南市">臺南市</option>
                                <option value="高雄市">高雄市</option>
                                <option value="屏東縣">屏東縣</option>
                                <option value="臺東縣">臺東縣</option>
                                <option value="花蓮縣">花蓮縣</option>
                                <option value="宜蘭縣">宜蘭縣</option>
                                <option value="澎湖縣">澎湖縣</option>
                                <option value="金門縣">金門縣</option>
                                <option value="連江縣">連江縣</option>
                              </select>
                              <select onChange="areachange(this.form)" name="cityarea" class="select" required>
                                <option value="中正區" selected="selected">中正區</option>
                                <option value="大同區">大同區</option>
                                <option value="中山區">中山區</option>
                                <option value="松山區">松山區</option>
                                <option value="大安區">大安區</option>
                                <option value="萬華區">萬華區</option>
                                <option value="信義區">信義區</option>
                                <option value="士林區">士林區</option>
                                <option value="北投區">北投區</option>
                                <option value="內湖區">內湖區</option>
                                <option value="南港區">南港區</option>
                                <option value="文山區">文山區</option>
                              </select>
                              <input type="hidden" value="100" name="Mcode" />
                              <input name="cuszip" value="100" size="5" maxlength="5" readonly="readOnly" class="select" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcusadr" class="col-sm-2 col-form-label input__label">完整地址</label>
                        <div class="col-sm-10">
                            <span class="bs">
                                <label><input name="cusadr" type="address" id="cusadr" size="60" class="select" required/></label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcheckword" class="col-sm-2 col-form-label input__label ">驗證碼</label>
                        <div class="col-sm-10">
                            <label>
                                <img id="imgcode" src="../captcha.php" onclick="refresh_code()"class="checkimg"/>
                                <input name="checkword" type="text" id="checkword" size="10"  maxlength="5" class="select" required/>
                                <span class="font_red"><?php if(!empty($_GET['check'])){echo "驗證碼錯誤";}?></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row title_float">
                        <div class="col-sm-12 ">
                            <input type="hidden" name="date" value="{{date("Y-m-d H:i:s")}}">
                            <button type="submit" class="btn btn-primary btn-style ">送出留言</button>
                            <input type="button" class="btn btn-primary btn-style " onclick="location.href='admin'" value="返回">
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