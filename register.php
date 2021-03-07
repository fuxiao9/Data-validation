<?php
$name = $_POST['user'];
$pwd = $_POST['pwd'];

$db = new mysqli('localhost','root','root','test');

$insert = "insert into tb_user(user,password) values('$name','$pwd')";

if($str->num_rows>0){
    $url = "index.html";
    echo "<script>";
    echo "window.location.href='$url';";// 注意分号
    echo "alert('注册成功');";
    echo "</script>";
    $str = $db->query($insert);
}else{
    $url = "index.html";
    echo "<script>";
    echo "window.location.href='$url';";// 注意分号
    echo "alert('注册失败');";
    echo "</script>";
}