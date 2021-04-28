<?php
$login = "Не известно";
$password = "Не известно";
$otchectvo = "Не известно";
$mecto = "Не известно";
$tel = "Не известно";
$mail = "Не известно";
if (isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];
if (isset($_POST['otchectvo'])) $otchectvo = $_POST['otchectvo'];
if (isset($_POST['mecto'])) $mecto = $_POST['mecto'];
if (isset($_POST['tel'])) $tel = $_POST['tel'];
if (isset($_POST['mail'])) $mail = $_POST['mail'];

echo "Имя: $login <br> Фамилия: $password <br> Отчество $otchectvo  <br> Место работы: $mecto <br> Телефон: $tel <br> E-mail: $mail";
?>
