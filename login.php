<?php
require "conn.php";
$user_name=$_POST["user_name"];
$user_pass=$_POST["password"];
$mysql_qry="select * from empdata where username like '$user_name' and password like '$pass_word';";
$result=mysqli_query($conn,$mysql_qry);
if(mysql_num_rows($result)>0)
{
  echo "Login Success!!!!!!!!";
}
else
{
echo "login not success";
}
?>