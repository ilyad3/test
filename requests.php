<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo "Метод GET<br>Ваше Имя: ".$_REQUEST['name'];
}elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Метод POST<br>Ваш Возраст: ".$_REQUEST['age'];
}
?>