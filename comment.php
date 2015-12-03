<?php
header('Content-Type: text/html; charset=utf-8'); 
 
include "top.php" ;
  /* Принимаем данные из формы */
  $user_login = $_POST["user_login"];
  $news_id = $_POST["news_id"];
  $comment_text = $_POST["comment_text"];
  //$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $comment_text = htmlspecialchars($comment_text);// Преобразуем спецсимволы в HTML-сущности
  //$mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`user_login`, `news_id`, `comment_text`) VALUES ('$user_login', '$news_id', '$comment_text')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
  ?>