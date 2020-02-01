<!doctype html>
<html class="no-js" lang="ru-RU">

<head>
  <?php
  $fd = fopen("UID-counter.txt", 'w+') or die("Ой! Кажется, что-то пошло не так. Сообщите Марине Викторовне или Даниилу этот код: fup_index");
  $IDC = count(file("db.txt")); // высчитываем количество строк
  fwrite($fd, $IDC);
  fclose($fd);
  ?>
  <meta charset="utf-8">
  <title>Вечер встречи выпускников</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Multimedia platform for mates reunion 2020">
  <meta name="author" content="Daniel Sazonov">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/styles.css">
  <link type="text/plain" rel="author" href="./humans.txt">
  <script src="https://kit.fontawesome.com/62bd6fa838.js" crossorigin="anonymous"></script>
  <!-- ICONS start -->
  <link rel="apple-touch-icon-precomposed" href="./apple-touch-icon.png">
  <link rel="icon" href="./favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="./ico/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./ico/apple-touch-icon-57x57.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="194x194" href="./ico/favicon-194x194.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./ico/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="192x192" href="ico/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./ico/favicon-16x16.png">
  <link rel="manifest" href="./site.webmanifest">
  <meta name="msapplication-config" content="./browserconfig.xml">
  <link rel="mask-icon" href="./ico/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="apple-mobile-web-app-title" content="Вечер встречи выпускников">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="ya-title=#4e69a2,ya-dock=fade">
  <meta name="application-name" content="Вечер встречи выпускников">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- ICONS end -->
</head>

<body>
<!--[if IE lt 7]>
<script>alert('Ой! Кажется, что-то пошло не так. Сообщите Марине Викторовне или Даниилу этот код: err_otdbr')</script>
<![endif]-->
<noscript>
  <script>alert('Ой! Кажется, что-то пошло не так. Сообщите Марине Викторовне или Даниилу этот код: err_noscr')</script>
</noscript>

<div class="wrapper">
  <header>
    <p class="hello">Замостянская школа приветствует своих выпускников!</p>
  </header>
  <main>
    <form action="action.php" method="post" name="pool" class="pool">
      <fieldset>
        <legend>Расскажите о себе</legend>
        <p class="uid">Уникальный код респондента: <span id="user-id"></span></p>
        <ol class="questions">
          <li><label for="graduate-year">В каком году Вы закончили школу: </label><input type="number" max="2020" min="1920" id="graduate-year" name="graduate-year"></li>
          <li><label for="high-edu">Где Вы учились после школы: </label><input id="high-edu" type="text" name="high-edu"></li>
          <li><label for="job">Род занятий: </label><input id="job" type="text" name="job"></li>
          <li><label for="residence">Место жительства: </label><input id="residence" type="text" name="residence"></li>
          <li><label for="fav-subject">Ваш любимый школьный предмет: </label><input id="fav-subject" type="text" name="fav-subject"></li>
        </ol>
      </fieldset>
      <div class="submit-button-box"><input type="submit" value="Отправить" class="submit-button"> <a href="admin.php" class="admin">Результаты опроса (для админа).</a></div>
    </form>

  </main>
  <footer>
    <div class="social-box">
      <p class="social vk"><a href="https://vk.com/zamostyanskayaschool" title="ВКонтакте">Группа ВКонтакте</a> <i class="fab fa-vk"></i></p>
      <p class="social web"><a href=http://sud-zam.ru/" title="http://sud-zam.ru">Сайт школы</a> <i class="fas fa-globe"></i></p>
      <p class="social youtube"><a href="https://www.youtube.com/channel/UCeFay3Zjgc906fKdQe_E8mQ" title="YouTube">Канал на YouTube</a> <i class="fab fa-youtube"></i></p>
      <p class="social email"><a href="mailto:sudjansk503@mail.ru" title="Электронная почта">sudjansk503@mail.ru</a> <i class="fas fa-envelope"></i></p>
    </div>
    <div class="row-copy">
      <div class="nginx">
        <p class="nginx-title">Powered by <img src="img/nginx.png" alt="nginx" class="nginx-logo"></p>
        <p>Open-source technologies should be free.</p>
      </div>
      <div class="copy">
        <p class="author">Сайт разработал <a href="https://github.com/P-294803" title="GitHub">Даниил Сазонов</a>.</p>
        <p class="copyright">&copy;<time datetime="2020">2020</time> </p>
      </div>
    </div>
  </footer>
</div>
<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script>
  window.ga = function () {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
