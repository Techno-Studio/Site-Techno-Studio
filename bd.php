<?php header("Content-Type: text/html; charset=utf-8");

// Файл firstsql.php
$host='localhost'; // имя хоста (уточняется у провайдера)
$database='dolfst_site'; // имя базы данных, которую вы должны создать
$user='dolfst_site'; // заданное вами имя пользователя, либо определенное провайдером
$pswd='57435743'; // заданный вами пароль
 
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
?>