<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    
    echo "<meta charset='UTF-8' />";
    $a="localhost";
	$conn=mysqli_connect($a,"root","t875568543777");
	mysqli_query($conn,"set names utf8");
	mysqli_select_db($conn,"dodo");
   if(mysqli_connect_errno($conn))
	die("無法連接資料庫");
else
	echo "成功了!";
//SQL
echo"<br/>";
$id=$_POST["id"];
$pw=$_POST["pw"];
$email=$_POST["email"];
$telephone=$_POST["telephone"];
$sql="INSERT INTO member(id,pw,email,telephone) VALUES('$id','$email','$telephone')";
//mysqli_query($conn,$sql);
$sql2="SELECT * FROM member WHERE id='$id'" ;
$result=mysqli_query($conn, $sql2);
$rows=mysqli_num_rows($result);
$myTable='member';
if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['email']) && !empty($_POST['telephone']) ){
	$_SESSION['id']=$_id;

	echo "HELLO,";
	//echo result[1];
	echo "歡迎登入";
}else{
echo "登入失敗";
}
?>
<html>
<head>
<title>
	歡迎
</title>
</head>
<body>
    
	</br>
	<a href="profile.php.php">我要修改我的資料</a></br>
</body>
</html>