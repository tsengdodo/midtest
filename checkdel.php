<?php

$no=$_GET["no"];

$link=mysqli_connect("localhost","dodo","t87556","dodo");
$del="DELETE FROM member WHERE no=".$no;
mysqli_query($link,$del);

//讀取資料a
$read="SELECT*FROM member";
$readresult=mysqli_query($link,$read);
echo "<table border='1'>";
echo "<tr><td>使用者編號</td><td>使用者帳號</td><td>使用者密碼</td><td>使用者email</td>
      <td>使用者電話</td><td>更新資料</td><td>刪除資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	echo "<td><a href='profile.php.php?no=".$result[0]."'>更新資料</a></td>";
	echo "<td><a href='checkdel.php?no=".$result[0]."'>刪除資料</a></td>";
	echo "</tr>";
}
echo "</table>";


?>