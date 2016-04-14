<?php
//更新資料
$no=$_GET["no"];

$link=mysqli_connect("localhost","root","t875568543777","dodo");

$read="SELECT*FROM member WHERE no=".$no;
$readresult=mysqli_query($link,$read);

while($result=mysqli_fetch_row($readresult)){
echo "<form action='log.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";//偷偷傳值使用者不知道
echo "使用者帳號:".$result[1]."<br/>";
echo "使用者密碼:<input type='text' name='pw' value='".$result[2]."'><br/>";
echo "使用者e-mail:<input type='text' name='email' value='".$result[3]."'><br/>";
echo "使用者電話:<input type='text' name='telephone' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";//更新
echo "<input type='reset'>";//重設
echo "</br>";
echo "<a href='checkdel.php?no=".$result[0]."'>刪除資料</a>";
echo "</form>";
}
?>