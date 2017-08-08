<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Registered-Safely</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dist/plug/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
  	<style>
  		.中文顏色{
  			font-family: "微軟正黑體";
  			color: #FFFFFF;
  		}
  		.英文字體{
  			font-family: "Edwardian Script ITC";
  		}

  	
	</style>
</head>
<body background="dist/img/bg2.jpg">
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
      	<div id="navbar" class="navbar-collapse collapse">
          		<ul class="nav navbar-nav navbar-right">
            		<li><a href="homepage.php">首頁</a></li>
            		<li><a href="#login" data-target="#myModal" data-toggle="modal">登入</a></li>
            		<li class="active"><a href="#contact">註冊</a></li>
          		</ul>
        	</div><!--/.nav-collapse -->
      	</nav>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="中文顏色">
					<fieldset>
						<legend class="中文顏色">註冊資料</legend>
						<h4>使用者名稱：<input type="text" name="username" id="username" style="color:#000000">
						性別：<select name="sex" id="sex" style="color:#000000">
									<option value="men">男</option>
									<option value="female">女</option>
								</select></h4>
						</br>
						<h4>E&nbspm&nbspa&nbspi&nbspl&nbsp：<input type="text" name="email" id="email" style="color:#000000"></h4>
						</br>
						<h4>帳&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp號：<input type="text" name="account" style="color:#000000"></h4>
						</br>
						<h4>密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp碼：<input type="password" name="password" style="color:#000000"></h4>
						</br>
						<h4>確認密碼：<input type="password" name="checkpass" style="color:#000000"></h4>
						</br>
						<h4>電&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp話：<input type="text" name="phone" style="color:#000000"></h4>
						</br>
						<h4>通訊地址：<input type="text" name="address" style="color:#000000"></h4>
						</br>
						<h4>安心碟序號：<input type="text" name="key" style="color:#000000"></h4>
					</fieldset>
				</div>
			</div>
			<div class="col-md-6" style="text-align: center; padding-top:10px;">
				<form action="homepage.php" method="post">
					<div class="g-recaptcha" data-sitekey="6Le9tisUAAAAAJPbIUjZpco-1JdFxq0vY6QEdBg4" align="center" style="padding-bottom: 10px"></div>
					<button type="submit" class="btn btn-success" name="YES">確認</button>
					<button type="button" class="btn btn-danger" name="NO">取消</button>
				</form>
			</div>
		</div>	
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top:10% ">
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
			<div class="modal-body" style="text-align: center;">
				<form method="post" action="homepage.php">
					<h3>帳號：<input type="text" name="account"></h3>
					<h3>密碼：<input type="password" name="password"></h3>
					<p style="text-align:center;"><a href="registered.php">註冊</a>或<a href="#">忘記密碼</a>?</p>
					<button type="submit" class="btn btn-success">登入</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<script src="dist/js/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="dist/plug/sweetalert/dist/sweetalert.min.js"></script> 
    <script type="text/javascript" charset="utf-8">

    </script>
</body>
</html>