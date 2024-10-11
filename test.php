<?php

$name = $_GET['name'];
$second_name = $_GET['second_name'];
$group = $_GET['group'];
$birthday = $_GET['birthday'];
$git = $_GET['git'];


echo "Ваше имя: ".$name."\nВаша фамилия: ".$second_name."\nВаша группа: ".$group."\nВаша дата рождения: ".$birthday."\nСсылка на ваш гит: <a href='".$git."' target='_blank'>".$git."</a>";
?>
