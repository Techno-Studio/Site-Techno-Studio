 <?
  header('Content-Type: text/html; charset=utf-8'); 
  include "bd.php" ;
  ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Techno Studio</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="blue-grey darken-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://dolfst.bget.ru/blog/blog.php" class=""><span class="hide-on-large-only flow-text">Techno Studio</span><span class="hide-on-med-and-down flow-text">Techno Studio</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://dolfst.bget.ru/blog/blog.php"><i class="material-icons left">home</i>Главная</a></li>
        <li><a href="http://dolfst.bget.ru/blog/team.php"><i class="material-icons left">group</i>Команда</a></li>
        <li><a href="https://www.youtube.com/channel/UCOUHFohb_UgfrFhQc70B32g" target="_blank"><i class="material-icons left">local_movies</i>Канал</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="http://dolfst.bget.ru/blog/blog.php"><i class="material-icons left">home</i>Главная</a></li>
        <li><a href="http://dolfst.bget.ru/blog/team.php"><i class="material-icons left">group</i>Команда</a></li>
        <li><a href="https://www.youtube.com/channel/UCOUHFohb_UgfrFhQc70B32g" target="_blank"><i class="material-icons left">local_movies</i>Канал</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>