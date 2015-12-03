<?php
header('Content-Type: text/html; charset=utf-8'); 
$news_id = isset($_GET['news_id'])?((int)$_GET['news_id']):0;
 
include "top.php" ;
$res = mysql_query('SELECT * FROM `news` WHERE `news_id`='.$news_id); //числа в кавычки брать не обязательно
 
?>
<?php if ($row = mysql_fetch_array($res)): ?>

 
<div class="container">
<div class="card">  
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $row['news_title'] ?></span>
      <p><?= $row['news_text'] ?></p>
    </div>
    <div class="card-action">
      <p><i class="material-icons left">event</i><?= date("d.m.Y H:i",strtotime($row['news_data'])) ?></p><hr>
      <button class="btn-floating btn-large waves-effect waves-light blue-grey darken-2" onclick="history.back()"><i class="material-icons">arrow_back</i></button>
    </div>
</div>
</div>

<?$query1 = ("SELECT * FROM `comments` WHERE `user_login`=".$user_login);
$res1 = mysql_query($query1);
while($row1 = mysql_fetch_array($res1))?>
<form name="comment" action="comment.php" method="post">
  <p><?= $row1['user_login']?></p>
    <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="comment_text" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="news_id" value="150" />
    <input type="submit" value="Отправить" />
  </p>
</form>

<? endif; ?>

 <?php
  $news_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  //$mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `news_id`='$news_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?> 
<? include "footer.php" ; ?>


