<?php
	$account=filter_input(INPUT_POST, 'acc');
	$password=filter_input(INPUT_POST, "pas");
	$db_name = "safely";
	$db = @mysqli_connect('localhost','root','')or die ("You con't connect the Database".mysqli_connect_error());
	$db -> set_charset("utf8");
	if(!mysqli_select_db($db,$db_name)) die ("You con't connect the datalist" . mysqli_error());
	$sql = "SELECT * FROM personinfor WHERE account='" . $account . "'";
	
	$rows = mysqli_query($db, $sql)or die ("沒有此帳號");
    $num = mysqli_num_rows($rows);
	if($num>0){
		while($row = mysqli_fetch_array($rows)){
			if($row["password"] = $password){
				echo "OK";
			}
		}
	}else {
		echo "ERROR";
	}
	$calltime = time();
	$gettime = getdate($calltime);
	$timenow = $gettime["year"]."年 ".$gettime["mon"]."月 ".$gettime["mday"]."日 (星期 ".$gettime["wday"].") ".($gettime["hours"] - 8)."點 ".$gettime["minutes"]."分 ".$gettime["seconds"]."秒";
	echo $timenow;
	mail("xo3374ox@gmail.com","Safely網頁登入通知","您的帳戶在".$timenow."登入Safely");

?>
