<!DOCTYPE html>

 <html lang = "ru">

 <head>
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="public/scripts/adviceCall.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/CSS/lessonsStyle.css">
</head>


<body>
  <a href="advices.php" class="changes" data-action=" ">Советы</a><br>
  <a href="affirm.php" class="changes" data-action=" ">Аффирмации</a><br>
  <a href="/" class="changes" data-action=" ">Выход</a><br>
  <div class="overlay" style="">
      <div class="lessons-wrapper">
          <div class="lessons-content" id="lessonsTarget">
  <form action="" method="POST">
      <select name = "type" value = "" id = "">
      <a><option class = "" value = "Выбрать тему советов" selected disabled>Выбрать тему уроков:</a><br><br>
      <a><option class = "" value = "Для расслабления">Для расслабления</a><br><br>
      <a><option class = "" value = "Для снятия стресса">Для снятия стресса</a><br><br>
      <a><input type = "submit" class = "know" value="Выбрать">
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
  $action1 = $_POST['type'];
  $result = mysqli_query($mysql, "SELECT * FROM `lessons_data` WHERE `type` = '$action1'");
  //while($row = $result->fetch_assoc())
  $lessons = mysqli_fetch_all($result);
  ?><b class = "lesson1"><?php print_r($action1);?></b><br><?php
  foreach($lessons as $lesson)
  {
    echo'
      <b class = "lesson">'.$lesson[1].'</b>
';
}

?>
  <div class="time"></div>
    <b class = "place">Узнайте глубину вашего дыхания: сядьте как вам удобно, запустите таймер и посчитайте сколько циклов дыхания пройдёт, вдох-выдох
      - это 1 цикл, затем внесите результат в поле и нажмите на кнопку узнать</b>
    <input class="inputTime" id="input" type="text" disabled>
    <button class = "but" id="start">Начать</button>
    <button class = "but1" id="stop">Остановить</button>
    <button class = "but2" id="reset">Перезапустить</button>
  <form action="lessons.php" method="POST">
  <b><input name = "result" class="result" id="result" type="number" min="5" placeholder="Полученный результат"></b>
  <b><input type = "submit" class = "know1" value="Узнать"></b>
  </form>

  <?php
  $action = filter_var(trim($_POST['result']),FILTER_SANITIZE_STRING);
  if ($action >= 12 && $action <= 20)
  {
    echo '<b class = "res2">
    У вас всё в порядке с дыханием, ваша дыхательная система функционирует оптимально и обеспечивает необходимый уровень кислорода клеткам и тканям организма.
    Это также указывает на то, что вы находитесь в расслабленном и непринужденном состоянии, дышите спокойно и без усилий, что является признаком хорошего здоровья и самочувствия.</b>';
  }
  else if ($action < 12 && $action != NULL)
  {
    echo '<b class = "res2">У вас возможно брадипноэ - это медицинский термин, который описывает аномально медленную частоту дыхания. Как правило, в состоянии покоя человек дышит от 12 до 20 раз в минуту.
    Если частота дыхания человека падает ниже 12 вдохов в минуту, у него может быть брадипноэ. Это может быть вызвано использованием определенных лекарств, неврологическими расстройствами или
    респираторными заболеваниями. Симптомы брадипноэ могут включать чувство усталости, одышку, ощущение дискомфорта или боли в груди. Расслабьтесь, успокойтесь  и проведите тестирование ещё раз,
    если результат не изменится вам следует обратиться к врачу-кардиологу и пульминологу.</b>';
  }

  else if ($action > 20)
  {
    echo '<b class = "res2">Либо у вас только что была физическая активность, либо у вас возможно тахипноэ. Это означает, что вы дышите быстрее, чем обычно, с большим количеством вдохов в минуту.
    Как правило, среднестатистический взрослый человек дышит от 12 до 20 раз в минуту, но при тахипноэ вы можете делать 20 вдохов и более в минуту.
    Тахипноэ может быть вызвано различными причинами, такими как лихорадка, беспокойство, стресс, легочные инфекции, такие как пневмония, или другие заболевания, такие как астма,
    респираторный дистресс-синдром или сердечная недостаточность. Увеличенная частота дыхания помогает обеспечить организм большим количеством кислорода, потому что ткани нуждаются в
    большем количестве кислорода, когда они испытывают стресс. Расслабьтесь, успокойтесь  и проведите тестирование ещё раз, если результат не изменится вам следует
    обратиться к врачу-кардиологу и пульминологу.</b>';
  }
  else
  {
    echo '';
  }
  ?>

      </div>
    </div>
  </div>

  <img src="/public/images/лого1.png"></img>

<script src="public/scripts/timer.js"></script>
</body>
