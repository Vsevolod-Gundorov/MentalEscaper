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
  <link rel="stylesheet" href="public/CSS/advicesStyle.css" type = "text/css">
  <link rel="stylesheet" href="public/CSS/advicesStyle1.css">
</head>

<body>
  <a href="affirm.php" class="changes" data-action=" ">Аффирмации</a><br>
  <a href="lessons.php" class="changes" data-action=" ">Уроки дыхания</a><br>
  <a href="/" class="changes" data-action=" ">Выход</a><br>
<div class="overlay" style="">
    <div class="advices-wrapper">
        <div class="advices-content" id="advicesTarget">
          <form action="" method="POST">
            <select name = "type" value = "" id = "">
            <a><option class = "" value = "Выбрать тему советов" selected disabled>Выбрать тему советов:</a><br><br>
            <a><option class = "" value = "Советы при апатии">Советы при апатии</a><br><br>
            <a><option class = "" value = "Советы при депрессии">Советы при депрессии</a><br><br>
            <a><option class = "" value = "Советы при выгорании">Советы при выгорании</a><br><br>
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
  $action = $_POST['type'];
  $result = mysqli_query($mysql, "SELECT * FROM `text_data` WHERE `type` = '$action'");
  //while($row = $result->fetch_assoc())
  $advices = mysqli_fetch_all($result);
  ?><b class = "res1"><?php print_r($action);?></b><?php
  foreach($advices as $advice)
  {
    echo'
      <b class = "res">'.$advice[1].'</b>
';
}

?>
    </div>
  </div>
</div>

<img src="/public/images/лого1.png"></img>
</body>
</html>
