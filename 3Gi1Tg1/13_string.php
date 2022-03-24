<?php
    $text = <<< SCHOOL
        ZSŁ - Zespół
        Szkół
        Łączności<br>
SCHOOL;

echo $text;
echo nl2br($text);

$name = "jANusZ";

echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";

$data = "jaNusz koWalski";
echo ucfirst($data)."<br>";
echo ucwords($data)."<br>";

$lorem = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis tempore quidem asperiores. Doloribus architecto amet tempore officiis corrupti necessitatibus provident unde, reiciendis corporis doloremque, vero laudantium suscipit modi, exercitationem molestias?<br>";

echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");

ob_clean();


// usuwanie białych znaków
$name1 = "Łukasz";
$name2 = "  Łukasz ";
echo "Ilość znaków \$name1: ".mb_strlen($name1)."<br>";
echo "Ilość znaków \$name2: ".mb_strlen($name2)."<br>";

echo mb_strlen(ltrim($name2))."<br>";
echo mb_strlen(rtrim($name2))."<br>";
echo mb_strlen(trim($name2))."<br>";


// przeszukiwanie ciągu znaków
echo strstr("janusz@wp.pl", "@")."<br>";
echo strstr("janusz@wp.pl", "w")."<br>";
echo stristr("janusz@wp.pl", "W")."<br>";

echo strpos("janusz@wp.pl", "n")."<hr>";


// substr
$name = "Janusz";
echo substr($name, 3)."<br>"; //usz
echo substr($name, 3 , 2)."<br>"; //us
echo substr($name, -1)."<br>"; //z
echo substr($name, -1, 3)."<hr>"; //z


// zadanie
// wyświelić domenę pobraną ze zmiennnej
$domena = "janusz@wp.pl";
echo substr(strstr($domena, "@"), 1)."<hr>";


// str_replace
echo str_replace("t", "*___*", "string");

?>
