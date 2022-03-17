<?php
echo "Dane z formularaza"."<br>";
if(isset($_POST['name']) & !empty($_POST['name'])) {
    echo $_POST['name']." hasło: ".$_POST['pass'];
}