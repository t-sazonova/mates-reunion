<?php
$GraduateYear = "Не известно";
$HighEdu = "Не известно";
$Job = "Не известно";
$Residence = "Не известно";
$FavSubject = "Не известно";

if (isset($_POST['graduate-year'])) $GraduateYear = $_POST['graduate-year'];
if (isset($_POST['high-edu'])) $HighEdu = $_POST['high-edu'];
if (isset($_POST['job'])) $Job = $_POST['job'];
if (isset($_POST['residence'])) $Residence = $_POST['residence'];
if (isset($_POST['fav-subject'])) $FavSubject = $_POST['fav-subject'];
$UID = count(file("db.txt")); // высчитываем количество строк
$Output = "<p>ID = $UID: <ol><li><span class='bold'>Год выпуска: </span> $GraduateYear;</li><li><span class='bold'>После школы: </span> $HighEdu;</li><li><span class='bold'>Работа: </span> $Job;</li><li><span class='bold'>Место жительства: </span> $Residence;</li><li><span class='bold'>Любимый предмет: </span> $FavSubject</li></ol><br></p>";
file_put_contents('db.txt', PHP_EOL . $Output, FILE_APPEND);
