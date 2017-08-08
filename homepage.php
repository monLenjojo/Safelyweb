<!DOCTYPE html>
<HTML>
<head>
	<meta charset="utf8">
	<title>Best-Safely</title>
	<!--bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dist/plug/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">


  	<style>
  		.中文字體{
  			font-family: "微軟正黑體";
  		}
  		.英文字體{
  			font-family: "Edwardian Script ITC";
  		}
  	
  	</style>
</head>

<body>

    <div class="container">
    	<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="padding:20px">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="#"><div class="英文字體" style="font-size: 1.5em;">安心碟 Safely</div></a>
        	</div>
        	<div id="navbar" class="navbar-collapse collapse  has-feedback">
          		<ul class="nav navbar-nav navbar-right">
            		<li class="active"><a href="#homepage" class="glyphicon glyphicon-home"> 首頁</a></li>
            		<li><a href="#login" data-target="#login" data-toggle="modal" class="glyphicon glyphicon-log-in" id="loginbutt"> 登入</a></li>
            		<li><a href="#logout" data-target="#logout" class="glyphicon glyphicon-log-out" id="logoutbutt"> 登出</a></li>
            		<li><a href="#register" data-target="#register" data-toggle="modal" class="glyphicon glyphicon-edit" id="registerbutt"> 註冊</a></li>
            		<li><a href="#addusb" data-target="#addusb" data-toggle="modal" class="glyphicon glyphicon glyphicon-plus" id="addusbbutt"> 新增USB</a></li>
          		</ul>
        	</div><!--/.nav-collapse -->
      	</nav>
	</div>
	
    <div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		    	<li data-target="#myCarousel" data-slide-to="3"></li>
		  	</ol>

		  <!-- Wrapper for slides -->
		  	<div class="carousel-inner">
		    	<div class="item active">
			      	<img src="dist/img/maker.jpg" width="100%" alt="Los Angeles">
			      	<div class="container">
            			<div class="carousel-caption">
				            <b><h1>Safely</h1></b>
				            <p>Note:If you have not yet purchased a safe flash drive please buy and then use</p>
				            <p><a class="btn btn-lg btn-primary" href="https://hackmd.io/c/Bkm88zSmb/https%3A%2F%2Fhackmd.io%2FGwJhwQwBgIwdgLQ2ARhAgLAVigTgRABwCmECAJlseSsPLrgMwDGQA%3D%3D%3D" role="button">Buy now</a></p>
				        </div>
				    </div>
        		</div>
		  		<div class="item">
		  			<img src="dist/img/bg2.jpg" width="100%" alt="web">
		  		</div>
			    <div class="item">
			    	<img src="dist/img/1.jpg" width="100%" alt="Chicago">
			    </div>
		  		<div class="item">
		  			<img src="dist/img/2.jpg" width="100%" alt="風景">
		  		</div>
		  	</div>

		  <!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>	
	</div>

	<div class="container">
    	<div class="row">
    		<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="dist/img/watch.jpg" data-src="holder.js/300x300" alt="dist/img/maker.jpg" class="img-htumbnail">
					<div class="caption">
						<h3 style="color:#0000ff ; text-align:center;">安全</h3>
						<p>使用安心碟讓你的資料也安心；公司機密資料、私密檔案、照片、想留存紀念卻害怕別人看到內容；重現在起再也不必擔心，使用安心碟讓你自己也放心。</p>
						<p><a href="#" class="btn btn-primary" role="button">Read mone</a></p>
					</div>
				</div>
			</div>
    		<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="dist/img/watch.jpg" data-src="holder.js/300x300" alt="dist/img/maker.jpg" class="img-htumbnail">
					<div class="caption">
						<h3 style="color:#0000ff ; text-align:center;">方便</h3>
						<p>使用者只要記得攜帶隨身碟，便能夠幫自己的資料封存，除了通過自己的認證誰都無法開啟，就算遺失也不必擔心機密外洩。</p>
						<p><a href="#" class="btn btn-primary" role="button">Read mone</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="dist/img/watch.jpg" data-src="holder.js/300x300" alt="dist/img/maker.jpg" class="img-htumbnail">
					<div class="caption">
						<h3 style="color:#0000ff ; text-align:center;">簡單</h3>
						<p>將USB接上裝置；透過手機應用程式一鍵解鎖USB隨身碟，就是這麼簡單。</p>
						<p><a href="#" class="btn btn-primary" role="button">Read mone</a></p>
					</div>
				</div>
			</div>
        </div>
    </div>
    <hr />
    <p style="text-align:center;">Safely company for 2017 </p>

	
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top:10% ">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" 
							aria-hidden="true">×
					</button>
					<h4 class="中文字體 modal-title" id="myModalLabel">
						會員登入
					</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" method="post" action="dbconnect.php">
						<div class="form-group has-feedback">
							<label for="login_acc" class="col-sm-3 control-label">帳號</label>
							<div class="col-sm-7" id='tbox_login_acc'>
								<input type="text" class="form-control" id="login_acc" placeholder="登入帳號" onkeyup="cklogin_acc(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imglogin_acc_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imglogin_acc_NO"></span>
								<span class="help-block" id="span_login_acc"></span>
							</div>
							<div class="col-sm-offset-2"></div>
						</div>
						<div class="form-group has-feedback">
							<label for="login_passwd" class="col-sm-3 control-label">密碼</label>
							<div class="col-sm-7" id='tbox_login_passwd'>
								<input type="password" class="form-control" id="login_passwd" placeholder="登入密碼" onkeyup="cklogin_passwd(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imglogin_passwd_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imglogin_passwd_NO"></span>
								<span class="help-block" id="span_login_passwd"></span>
							</div>
							<div class="col-sm-offset-2"></div>
						</div>
						<div class="form-group has-feedback">
							<label class="col-sm-offset-3 col-sm-3 control-label"><a href="registered.php">註冊</a>或<a href="#">忘記密碼</a>??</label>
						</div>
						<div class="form-group has-feedback">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="button" class="btn btn-success" data-dismiss="modal" id="submit_login">登入</button>
							</div>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" 
					aria-hidden="true">×
					</button>
					<h4 class="中文字體 modal-title" id="myModalLabel">註冊會員</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" method="post" action="homepage.php">
						<div class="form-group has-feedback">
							<label for="username" class="col-sm-3 control-label">姓名</label>
							<div class="col-sm-4" id="tbox_name">
								<input type="text" class="form-control" id="username" placeholder="範例：王大明" onkeyup="ckname(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgname_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgname_NO"></span>
								<span class="help-block" id="span_name"></span>
							</div>
							<div class="col-sm-offset-1"></div>
							<label for="sex" class="col-sm-2 control-label">性別</label>
							<div class="col-sm-3">
								<select class="form-control" id="sex">
									<option value=""></option>
									<option value="男">男</option>
									<option value="女">女</option>
								</select>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="acc" class="col-sm-3 control-label">帳號</label>
							<div class="col-sm-9" id="tbox_acc">
								<input type="text" class="form-control" id="acc" placeholder="請使用6~15位數字與英文組合，以確保帳號強度" onkeyup="ckacc(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgacc_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgacc_NO"></span>
								<span class="help-block" id="span_acc"></span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="passwd" class="col-sm-3 control-label">密碼</label>
							<div class="col-sm-9" id="tbox_passwd">
								<input type="password" class="form-control" id="passwd" placeholder="請至少輸入一英文字母，以確保密碼強度" onkeyup="ckpasswd(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgpasswd_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgpasswd_NO"></span>
								<span class="help-block" id="span_passwd"></span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="repasswd" class="col-sm-3 control-label">確認密碼</label>
							<div class="col-sm-9" id="tbox_repasswd">
								<input type="password" class="form-control" id="repasswd" placeholder= "請重複輸入密碼" onkeyup="reckpasswd(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgrepasswd_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgrepasswd_NO"></span>
								<span class="help-block" id="span_repasswd"></span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9" id="tbox_email">
								<input type="email" class="form-control" id="email" placeholder="範例：s15115163@stu.edu.tw" onkeyup="ckemail(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgemail_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgemail_NO"></span>
								<span class="help-block" id="span_email"></span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="address" class="col-sm-3 control-label">地址</label>
							<div class="col-sm-9" id="tbox_address">
								<input type="address" class="form-control" id="address" placeholder="範例：火星省航太區太空里9號" onkeyup="ckaddress(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgaddress_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgaddress_NO"></span>
								<span class="help-block" id="span_address"></span>
							</div>
						</div>
						<div class="form-group has-feedback" id='notrobot'>
							<div class="col-sm-offset-3 col-sm-9">
								<label>
									<div class="g-recaptcha" data-sitekey="6Le9tisUAAAAAJPbIUjZpco-1JdFxq0vY6QEdBg4"></div>
								</label>
								<span class="help-block" id="span_notrobot">請進行我不是機器人驗證</span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="button" class="btn btn-success" name="registered" id="submit_register">註冊</button>
						<!--<button type="button" class="btn btn-danger" name="NO">取消</button>-->
							</div>
						</div>	
					</form>
				</div>
			</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <div class="modal fade" id="addusb" role="dialog">
    	<div class="modal-dialog">
		    <div class="modal-content">
		        <div class="modal-header">
		      	    <button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="中文字體 modal-title">新增配對裝置</h4>
		        </div>
		        <div class="modal-body">
			        <form class="form-horizontal" role="form" method="post" action="homepage.php">
			          	<div class="form-group has-feedback">
							<label for="key" class="col-sm-3 control-label">安心碟金鑰</label>
							<div class="col-sm-9" id='tbox_key'>
							<input type="text" class="form-control" id="key" placeholder="請輸入產品金鑰" onkeyup="ckkey(this.value)">
								<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="imgkey_OK"></span>
								<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" id="imgkey_NO"></span>
								<span class="help-block" id="span_key"></span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="button" class="btn btn-success" name="addusb" id="submit_addusb">確認新增</button>
							</div>
						</div>
					</form>
		        </div>
	      	</div>
    	</div>
  	</div>
        <!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="dist/plug/sweetalert/dist/sweetalert.min.js"></script>
        <script src='dist/js/api.js' async defer></script>

    <script type="text/javascript" charset="utf-8">
    

$(document).ready(function() {
	$('#logoutbutt').hide();
	$('#addusbbutt').hide();
	$('#span_notrobot').hide();
	$('#imgkey_OK').hide();
	$('#imgkey_NO').hide();
	$('#imgname_OK').hide();
	$('#imgname_NO').hide();
	$('#imgacc_OK').hide();
	$('#imgacc_NO').hide();
	$('#imgpasswd_OK').hide();
	$('#imgpasswd_NO').hide();
	$('#imgrepasswd_OK').hide();
	$('#imgrepasswd_NO').hide();
	$('#imgemail_OK').hide();
	$('#imgemail_NO').hide();
	$('#imgaddress_OK').hide();
	$('#imgaddress_NO').hide();
	$('#imglogin_acc_OK').hide();
	$('#imglogin_acc_NO').hide();
	$('#imglogin_passwd_OK').hide();
	$('#imglogin_passwd_NO').hide();
});


function checkkey(str){
	var regExp =/^(?!.*[^a-zA-Z0-9]).{8,8}$/;
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}

function ckkey(value){ //註冊金鑰驗證
	if($('#key').val()!="" && $('#key').val().length==8){
		if(checkkey(value)){
			$('#tbox_key').removeClass('has-error');
			$('#tbox_key').removeClass('has-success');
			$('#imgkey_OK').hide();
			$('#imgkey_NO').hide();
			$('#tbox_key').addClass('has-success');
			$('#span_key').text(' ');
			$('#imgkey_OK').fadeIn();
		}else{
			$('#tbox_key').removeClass('has-error');
			$('#tbox_key').removeClass('has-success');
			$('#imgkey_OK').hide();
			$('#imgkey_NO').hide();
			$('#tbox_key').addClass('has-error');
			$('#span_key').text('請勿使用特殊字元');
			$('#imgkey_NO').fadeIn();
		}
	}else if($('#key').val().length>8){
			$('#tbox_key').removeClass('has-error');
			$('#tbox_key').removeClass('has-success');
			$('#imgkey_OK').hide();
			$('#imgkey_NO').hide();
			$('#tbox_key').addClass('has-error');
			$('#span_key').text('金鑰過長');
			$('#imgkey_NO').fadeIn();
	}else if($('#key').val().length<8){
			$('#tbox_key').removeClass('has-error');
			$('#tbox_key').removeClass('has-success');
			$('#imgkey_OK').hide();
			$('#imgkey_NO').hide();
			$('#tbox_key').addClass('has-error');
			$('#span_key').text('請輸入8位數金鑰');
			$('#imgkey_NO').fadeIn();
	}else{
			$('#tbox_key').removeClass('has-error');
			$('#tbox_key').removeClass('has-success');
			$('#imgkey_OK').hide();
			$('#imgkey_NO').hide();
			$('#span_key').text('');
	}
}

function checkName(str){
	var regExp =/^[\w\u4e00-\u9fa5]{2,4}$/;
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}
function ckname(value){ //註冊名稱驗證
	if($('#username').val()!="" && $('#username').val().length>=2 && $('#username').val().length<=4){
		if(checkName(value)){
			$('#tbox_name').removeClass('has-error');
			$('#tbox_name').removeClass('has-success');
			$('#imgname_OK').hide();
			$('#imgname_NO').hide();
			$('#tbox_name').addClass('has-success');
			$('#span_name').text(' ');
			$('#imgname_OK').fadeIn();
		}else{
			$('#tbox_name').removeClass('has-error');
			$('#tbox_name').removeClass('has-success');
			$('#imgname_OK').hide();
			$('#imgname_NO').hide();
			$('#tbox_name').addClass('has-error');
			$('#span_name').text('請勿使用特殊字元');
			$('#imgname_NO').fadeIn();
		}
	}else if($('#username').val().length>4){
			$('#tbox_name').removeClass('has-error');
			$('#tbox_name').removeClass('has-success');
			$('#imgname_OK').hide();
			$('#imgname_NO').hide();
			$('#tbox_name').addClass('has-error');
			$('#span_name').text('名稱過長');
			$('#imgname_NO').fadeIn();
	}else if($('#username').val().length<2){
			$('#tbox_name').removeClass('has-error');
			$('#tbox_name').removeClass('has-success');
			$('#imgname_OK').hide();
			$('#imgname_NO').hide();
			$('#tbox_name').addClass('has-error');
			$('#span_name').text('名稱過短');
			$('#imgname_NO').fadeIn();
	}else{
			$('#tbox_name').removeClass('has-error');
			$('#tbox_name').removeClass('has-success');
			$('#imgname_OK').hide();
			$('#imgname_NO').hide();
			$('#span_name').text(' ');
	}
}

function checkacc(str){
	var regExp =/^(?!.*[^a-zA-Z0-9])(?=.*\d)(?=.*[a-zA-Z]).{6,15}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}

function ckacc(value){ //註冊帳號驗證
	if($('#acc').val()!="" && $('#acc').val().length>=6 && $('#acc').val().length<=15){
		if(checkacc(value)){
			$('#tbox_acc').removeClass('has-error');
			$('#tbox_acc').removeClass('has-success');
			$('#imgacc_OK').hide();
			$('#imgacc_NO').hide();
			$('#tbox_acc').addClass('has-success');
			$('#span_acc').text(' ');
			$('#imgacc_OK').fadeIn();
		
		}else{
			$('#tbox_acc').removeClass('has-error');
			$('#tbox_acc').removeClass('has-success');
			$('#imgacc_OK').hide();
			$('#imgacc_NO').hide();
			$('#tbox_acc').addClass('has-error');
			$('#span_acc').text('請使用6~15位英文與數字組合，並且請勿使用特殊字元');
			$('#imgacc_NO').fadeIn();
		}
	}else if($('#acc').val().length>15){
			$('#tbox_acc').removeClass('has-error');
			$('#tbox_acc').removeClass('has-success');
			$('#imgacc_OK').hide();
			$('#imgacc_NO').hide();
			$('#tbox_acc').addClass('has-error');
			$('#span_acc').text('帳號過長');
			$('#imgacc_NO').fadeIn();
	}else if($('#acc').val().length<6){
			$('#tbox_acc').removeClass('has-error');
			$('#tbox_acc').removeClass('has-success');
			$('#imgacc_OK').hide();
			$('#imgacc_NO').hide();
			$('#tbox_acc').addClass('has-error');
			$('#span_acc').text('請輸入6~15位英文與數字組合');
			$('#imgacc_NO').fadeIn();
	}else{
			$('#tbox_acc').removeClass('has-error');
			$('#tbox_acc').removeClass('has-success');
			$('#imgacc_OK').hide();
			$('#imgacc_NO').hide();
			$('#span_acc').text('');
	}
}
function checkpasswd(str){
	var regExp =/^(?!.*[^a-zA-Z0-9])(?=.*\d)(?=.*[a-zA-Z]).{6,15}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}

function ckpasswd(value){ //註冊密碼驗證
	if($('#passwd').val()!="" && $('#passwd').val().length>=6 && $('#passwd').val().length<=15){
		if(checkpasswd(value)){
			$('#tbox_passwd').removeClass('has-error');
			$('#tbox_passwd').removeClass('has-success');
			$('#imgpasswd_OK').hide();
			$('#imgpasswd_NO').hide();
			$('#tbox_passwd').addClass('has-success');
			$('#span_passwd').text(' ');
			$('#imgpasswd_OK').fadeIn();
		
		}else{
			$('#tbox_passwd').removeClass('has-error');
			$('#tbox_passwd').removeClass('has-success');
			$('#imgpasswd_OK').hide();
			$('#imgpasswd_NO').hide();
			$('#tbox_passwd').addClass('has-error');
			$('#span_passwd').text('請使用6~15位英文與數字組合，並且請勿使用特殊字元');
			$('#imgpasswd_NO').fadeIn();
		}
	}else if($('#passwd').val().length>15){
			$('#tbox_passwd').removeClass('has-error');
			$('#tbox_passwd').removeClass('has-success');
			$('#imgpasswd_OK').hide();
			$('#imgpasswd_NO').hide();
			$('#tbox_passwd').addClass('has-error');
			$('#span_passwd').text('密碼過長');
			$('#imgpasswd_NO').fadeIn();
	}else if($('#passwd').val().length<6){
			$('#tbox_passwd').removeClass('has-error');
			$('#tbox_passwd').removeClass('has-success');
			$('#imgpasswd_OK').hide();
			$('#imgpasswd_NO').hide();
			$('#tbox_passwd').addClass('has-error');
			$('#span_passwd').text('請輸入6~15位英文與數字組合');
			$('#imgpasswd_NO').fadeIn();
	}else{
			$('#tbox_passwd').removeClass('has-error');
			$('#tbox_passwd').removeClass('has-success');
			$('#imgpasswd_OK').hide();
			$('#imgpasswd_NO').hide();
			$('#span_passwd').text('');
	}
}

function checkrepasswd(str){
	var regExp =/^(?!.*[^a-zA-Z0-9])(?=.*\d)(?=.*[a-zA-Z]).{6,15}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}

function reckpasswd(value){ //註冊確認密碼驗證
	if($('#repasswd').val()!="" && $('#repasswd').val().length>=6 && $('#repasswd').val().length<=15){
		if(checkrepasswd(value)){
			$('#tbox_repasswd').removeClass('has-error');
			$('#tbox_repasswd').removeClass('has-success');
			$('#imgrepasswd_OK').hide();
			$('#imgrepasswd_NO').hide();
			$('#tbox_repasswd').addClass('has-success');
			$('#span_repasswd').text(' ');
			$('#imgrepasswd_OK').fadeIn();
		
		}else{
			$('#tbox_repasswd').removeClass('has-error');
			$('#tbox_repasswd').removeClass('has-success');
			$('#imgrepasswd_OK').hide();
			$('#imgrepasswd_NO').hide();
			$('#tbox_repasswd').addClass('has-error');
			$('#span_repasswd').text('請使用6~15位英文與數字組合，並且請勿使用特殊字元');
			$('#imgrepasswd_NO').fadeIn();
		}
	}else if($('#repasswd').val().length>15){
			$('#tbox_repasswd').removeClass('has-error');
			$('#tbox_repasswd').removeClass('has-success');
			$('#imgrepasswd_OK').hide();
			$('#imgrepasswd_NO').hide();
			$('#tbox_repasswd').addClass('has-error');
			$('#span_repasswd').text('密碼過長');
			$('#imgrepasswd_NO').fadeIn();
	}else if($('#repasswd').val().length<6){
			$('#tbox_repasswd').removeClass('has-error');
			$('#tbox_repasswd').removeClass('has-success');
			$('#imgrepasswd_OK').hide();
			$('#imgrepasswd_NO').hide();
			$('#tbox_repasswd').addClass('has-error');
			$('#span_repasswd').text('請輸入6~15位英文與數字組合');
			$('#imgrepasswd_NO').fadeIn();
	}else{
			$('#tbox_repasswd').removeClass('has-error');
			$('#tbox_repasswd').removeClass('has-success');
			$('#imgrepasswd_OK').hide();
			$('#imgrepasswd_NO').hide();
			$('#span_repasswd').text('');
	}
}

function checkemail(str){
	var regExp=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}
function ckemail(value){
	if(checkemail(value)){
		$('#tbox_email').removeClass('has-error');
			$('#tbox_email').removeClass('has-success');
			$('#imgemail_OK').hide();
			$('#imgemail_NO').hide();
			$('#tbox_email').addClass('has-success');
			$('#span_email').text(' ');
			$('#imgemail_OK').fadeIn();
		
		}else{
			$('#tbox_email').removeClass('has-error');
			$('#tbox_email').removeClass('has-success');
			$('#imgemail_OK').hide();
			$('#imgemail_NO').hide();
			$('#tbox_email').addClass('has-error');
			$('#span_email').text('請輸入完整Email，以正確進行驗證');
			$('#imgemail_NO').fadeIn();
		}
	}

function checkaddress(str){
	var regExp=/^(?!.*[^\u4e00-\u9fa5a-zA-Z0-9-])(?=.*[\u4e00-\u9fa5]{4,})(?=.*\d).{8,40}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}
function ckaddress(value){
	if(checkaddress(value)){
		$('#tbox_address').removeClass('has-error');
			$('#tbox_address').removeClass('has-success');
			$('#imgaddress_OK').hide();
			$('#imgaddress_NO').hide();
			$('#tbox_address').addClass('has-success');
			$('#span_address').text(' ');
			$('#imgaddress_OK').fadeIn();
		
		}else{
			$('#tbox_address').removeClass('has-error');
			$('#tbox_address').removeClass('has-success');
			$('#imgaddress_OK').hide();
			$('#imgaddress_NO').hide();
			$('#tbox_address').addClass('has-error');
			$('#span_address').text('請輸入完整Email，以正確進行驗證');
			$('#imgaddress_NO').fadeIn();
		}
	}
function checklogin_acc(str){
	var regExp=/^(?!.*[^a-zA-Z0-9]).{0,15}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}
function cklogin_acc(value){
	if(checklogin_acc(value)){
		if($('#login_acc').val()!='' && $('#login_acc').val().length>=6 && $('#login_acc').val().length<=15){
			$('#tbox_login_acc').removeClass('has-error');
			$('#tbox_login_acc').removeClass('has-success');
			$('#imglogin_acc_OK').hide();
			$('#imglogin_acc_NO').hide();
			$('#tbox_login_acc').addClass('has-success')
			$('#span_login_acc').text(' ');
			$('#imglogin_acc_OK').fadeIn();
		}else if($('#login_acc').val().length<6){
			$('#tbox_login_acc').removeClass('has-error');
			$('#tbox_login_acc').removeClass('has-success');
			$('#imglogin_acc_OK').hide();
			$('#imglogin_acc_NO').hide();
			$('#span_login_acc').text(' ');
		}else{
			$('#tbox_login_acc').removeClass('has-error');
			$('#tbox_login_acc').removeClass('has-success');
			$('#imglogin_acc_OK').hide();
			$('#imglogin_acc_NO').hide();
			$('#span_login_acc').text(' ');
		
		}
	}else if($('#login_acc').val().length>15){
		$('#tbox_login_acc').removeClass('has-error');
		$('#tbox_login_acc').removeClass('has-success');
		$('#imglogin_acc_OK').hide();
		$('#imglogin_acc_NO').hide();
		$('#tbox_login_acc').addClass('has-error')
		$('#span_login_acc').text('請輸入6~15位英文數字組合的密碼');
		$('#imglogin_acc_NO').fadeIn();
	}else{
		$('#tbox_login_acc').removeClass('has-error');
		$('#tbox_login_acc').removeClass('has-success');
		$('#imglogin_acc_OK').hide();
		$('#imglogin_acc_NO').hide();
		$('#tbox_login_acc').addClass('has-error')
		$('#span_login_acc').text('請勿使用特殊字元');
		$('#imglogin_acc_NO').fadeIn();
		}
	}

function checklogin_passwd(str){
	var regExp=/^(?!.*[^a-zA-Z0-9]).{0,15}$/
	if(regExp.test(str)){
		return true;
	}else{
		return false;
	}
}
function cklogin_passwd(value){
	if(checklogin_passwd(value)){
		$('#tbox_login_passwd').removeClass('has-error');
		$('#tbox_login_passwd').removeClass('has-success');
		$('#imglogin_passwd_OK').hide();
		$('#imglogin_passwd_NO').hide();
		$('#span_login_passwd').text(' ');
	}else{
		$('#tbox_login_passwd').removeClass('has-error');
		$('#tbox_login_passwd').removeClass('has-success');
		$('#imglogin_passwd_OK').hide();
		$('#imglogin_passwd_NO').hide();
		$('#tbox_login_passwd').addClass('has-error')
		$('#span_login_passwd').text('請勿使用特殊字元');
		$('#imglogin_passwd_NO').fadeIn();
	}
}


$("#submit_login").click(function(){
	var acc = $("#login_acc").val();
	var pas = $("#login_passwd").val();
	$.post("dbconnect.php", { acc: acc, pas: pas },
   	function(msg){
    	switch(msg){
			case "OK":
				swal("成功");
				$("#loginbutt").hide();
				$("#logoutbutt").fadeIn();
				$("#registerbutt").hide();
				$("#addusbbutt").fadeIn();
				break;
			case 'ERROR':
				swal("登入失敗");
				break;
			case '沒有此帳號':
				swal("沒有此帳號");
				break;
			}
   		});
	});

$("#submit_register").click(function(){
	if($("#g-recaptcha-response").val()==''){
		$("#span_notrobot").fadeIn();
	}
})

$("#logoutbutt").click(function(){
	$("#logoutbutt").hide();
	$("#addusbbutt").hide();
	$('.g-recaptcha').fadeIn();
	$("#loginbutt").fadeIn();
	$("#registerbutt").fadeIn();
})
function VerifyReCaptcha(GResponse){ //我不是機器人認證函數
	$.ajax(
	{
		url:"VerifyReCaptcha.php",
		type : "POST",
		dataType :'html',
		async: true,
		date:{
			reCaptchaResponse: GResponse
		},
		success:function(msg){
			switch(msg){
				case "OK":
					$('.g-recaptcha').fadeOut();
	    			$("#span_notrobot").fadeOut();
	    			$("#notrobot").fadeOut();
					break;
				case 'ERROR':
					swal('驗證失敗!請在試一次!');
					break;
			}
		},
		error:function(xhr){
			swal('發生不明錯誤!請在試一次!');
		},
	}
		);
}

$(document).ready (function(){
	var IntervalID = setInterval(function(){
		if($("#g-recaptcha-response").val()!='')
		{
			VerifyReCaptcha($("#g-recaptcha-response").val());
			clearInterval(IntervalID);
		}
	},1000);
});

    </script>
    
</body>
</HTML>