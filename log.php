<?php
ob_start(); 
session_start(); ?>
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
if($id!=null && $pw!=null && $email!=null && $telephone!=null){
$sql="INSERT INTO member(id,pw,email,telephone) VALUES('$id','$email','$telephone')";
$sql2="SELECT*FROM member";
if($sql2){
	echo '新增成功';
	 }else{
	echo '新增失敗';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=reg.php>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>登入頁面</title>
</head>
<body>
請輸入你的登入資料
<form name="form" method="post" action="index.php">
帳號 <input type="text" name="id"><br/>
密碼 <input type="password" name="pw"><br/>
e-mail<input type="text" name="email"><br/>
電話 <input type="text" name="telephone"><br/>
<input type="submit" name="button" value="確定">
<input type="reset" name="button" value="重設">

</form>
</body>
</html>