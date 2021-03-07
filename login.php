<?php
// if(!isset($_POST['submit'])){
//     echo "非法访问";
// }

// echo "欢迎" . $_POST['user']."<br />";

$name = $_POST['user'];
$password = $_POST['pwd'];

$db = new mysqli("localhost","root","root","test");
if(!$db){
    echo('连接失败'). $conn->error;
}
$select = "select * from tb_user where user='$name' and password='$password'";
$str = $db->query($select);

if($str->num_rows>0){
    header("location:home.html");
    exit;
}else{
    $url = "index.html";
    echo "<script>";
    echo "window.location.href='$url';";// 注意分号
    echo "alert('账户或密码错误');";
    echo "</script>";
}

$db->close;