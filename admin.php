<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <meta charset="utf-8">
  <title>sudo MR</title>
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
  <style>
    footer {
      margin-top: 0;
    }
    header {
      background-color: #a8eae4;
    }
    * {
      height: auto;
      max-height: none;
      min-height: auto;
    }
  </style>
</head>
<body class="admin-body">
<!--[if IE lt 7]>
<script>alert('Ой! Кажется, что-то пошло не так. Сообщите Марине Викторовне или Даниилу этот код: err_otdbr')</script>
<![endif]-->
<noscript>
  <script>alert('Ой! Кажется, что-то пошло не так. Сообщите Марине Викторовне или Даниилу этот код: err_noscr')</script>
</noscript>

<div class="wrapper admin-wrapper">
  <main class="php-box">
      <?php
        include('db.txt')
      ?>

  </main>
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
  ga.l = + new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>
