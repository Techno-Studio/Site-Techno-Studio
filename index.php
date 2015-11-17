 <?
  header('Content-Type: text/html; charset=utf-8'); 
  include "top.php" ;
  ?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center blue-grey-text text-darken-2">Приветствую Вас на сайте нашей школы</h3>
      <div class="row center">
        <h5 class="header col s12 light">Он создан для Вас, уважаемые Родители, любимые Учащиеся и Учителя, а также Гости сайта. Сайт адресован всем, кому интересно знать, чем живет наше учреждение образования. Нам небезразлично Ваше мнение о школе и о сайте. Оставляйте Ваши отзывы и пожелания. Мы постараемся прислушаться к разумным и интересным предложениям и замечаниям.</h5>
      </div>
      <!--<div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Читать</a>
      </div>-->
      <br><br>

    </div>
  </div>
 
<div class="container">
<?$query = "SELECT * FROM `news`";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
$news_text = $row['news_text'];
$news_post = substr($news_text,0,299);
echo "<div class='card '>
              <div class='card-image waves-effect waves-block waves-light'>
              </div>
              <div class='card-content'>",
             "<span class='card-title activator grey-text text-darken-4'>".$row['news_title']."<i class='material-icons right'>more_vert</i></span>",
             "<p>".$news_post."...</p>\n",
             "<br /><p><i class='material-icons left'>event</i>".date("d.m.Y H:i",strtotime($row['news_data']))."</p><br><hr>\n",
             "<p><a class='waves-effect waves-light btn blue-grey darken-2' href='fullnews.php?news_id=".$row['news_id']."'>Далее <i class='material-icons right'>arrow_forward</i></a></p></div>",
             "<div class='card-reveal' style='display: none; transform: translateY(0px);'>",
             "<span class='card-title grey-text text-darken-4'>".$row['news_title']."<i class='material-icons right'>close</i></span>",
             "<p>".$row['news_text']."</p>",
             "<p><i class='fa fa-calendar-o'></i> ".$row['news_data']."</p></div></div>";
}?>

</div>
<? include "footer.php" ; ?>
