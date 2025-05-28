<!DOCTYPE html>

 <html lang = "ru">

 <head>
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="public/scripts/advicesInf.js"></script>
  <script src="public/scripts/adviceCall.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/CSS/affirmStyle.css" type = "text/css">
  <link rel="stylesheet" href="public/CSS/advicesStyle1.css">
</head>

<body>
  <a href="advices.php" class="changes" data-action=" ">Советы</a><br>
  <a href="lessons.php" class="changes" data-action=" ">Уроки дыхания</a><br>
  <a href="/" class="changes" data-action=" ">Выход</a><br>
<div class="overlay" style="">
    <div class="advices-wrapper">
        <div class="advices-content" id="advicesTarget">
          <form action="" method="POST">
            <select name = "type1" value = "" id = "">
            <a><option class = "" value = "Выбрать тему аффирмаций" selected disabled>Выбрать тему аффирмаций:</a><br><br>
            <a><option class = "" value = "Мотивация">Мотивация</a><br><br>
            <a><option class = "" value = "Отдых">Отдых</a><br><br>
            <a><input type = "submit" class = "" value="Выбрать">
          </select>
          </form>
        </div>
    </div>
</div>
<div class = "call" style = "">
  <div class="list-wrapper">
      <div class="list-content" id="listTarget">
  <?php
  $mysql = new mysqli("localhost:3306", 'root', 'root', 'for_website_mental_support');
  $action = $_POST['type1'];
  $result = mysqli_query($mysql, "SELECT * FROM `audio_data` WHERE `type` = '$action' AND `voice` = 'жен'");
  $result1 = mysqli_query($mysql, "SELECT * FROM `audio_data` WHERE `type` = '$action' AND `voice` = 'муж'");
  //while($row = $result->fetch_assoc())
  $audios = mysqli_fetch_all($result);
  $audios1 = mysqli_fetch_all($result1);
  ?><b><?php print_r($action);?></b><?php
  ?><b>Женский голос</b><br><?php
  foreach($audios as $audio)
  {
    echo'
    <div class = "col-md-4 product-left p-left">
    <div class = "product-main simpleCraft shelfItem">
    <div class="product-bottom">
    <audio controls>
    <source src= '.$audio[1].'  type = "audio/mp3" controls="controls">
    </audio>
    </div>
  </div>
</div>
';
}
  ?><b>Мужской голос</b><?php
  foreach($audios1 as $audio1)
  {
  echo'
  <div class = "col-md-4 product-left p-left">
  <div class = "product-main simpleCraft shelfItem">
  <div class="product-bottom">
  <audio controls>
  <source src= '.$audio1[1].'  type = "audio/mp3" controls="controls">
  </audio>
  </div>
  </div>
  </div>
  ';
  }

?>
    </div>
  </div>
</div>

<img src="/public/images/лого1.png"></img>

</body>

</html>
