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
<?php endif; ?>

<? include "footer.php" ; ?>


