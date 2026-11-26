<?php
//1.Session
session_start(); //Bắt đầu session
$_SESSION['Name'] = 'user';

echo "Session Name:" . $_SESSION['Name'];

// 2. Cookie
$cookieName = "user";
$cookieValue = "ThuyLinh";

setcookie($cookieName, $cookieValue, time() + 8640, "/");
if(isset($_COOKIE[$cookieName])) {
    echo "cookie đã tồn tại";
}else {
    echo "Cookie chưa được thiết lập!";
}
?>