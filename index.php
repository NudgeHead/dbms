<?php

if(isset($_POST[""]))
{
    $adi=$_POST["ad_name"];
    $adpwd=$_POST["ad_pwd"];
    $conn=mysqli_connect("localhost","root","") or die( "cannot connect");
    mysqli_select_db($conn,"admin") or die("dusgsj");
    $row=mysqli_query("select * admin where a_id='$adi' and passwd='$adpwd'") or die("cannot execute");
}

if($row)
{

    echo "<script> location.href="admin-details.html"</script>";
}
?>