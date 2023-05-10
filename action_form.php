<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Комплекс-Аналитик</title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="#bbaa70">
<div class="div1">
<div class="div1_1">
<div class="block"><H3><A Href="index.php" >На главную</a></div>
<div class="block"> <H3><A Href="Str2.php">Наши услуги</a></div>
<div class="block"><H3><A Href="Str3.php">Наши аналитики</a></div>
<div class="block"><H3><A Href="Str4.php">Контакты</a></div>
<div class="block1"><H3><A Href="Str.php">Войти</a></div>
</H3>
</div>
<div ><h1><p style="text-align: center"  ><marquee>Комплекс-Аналитик</marquee></p></h1>
</div>
</div>
<div class="div2">

<div class=div2_20 >
<p style="text-align: center" ><h1>Заказ услуги</h1></p>
<p> 
<?php
$conn = new mysqli("localhost", "root", "", "analitik");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
/* добавление данных о предприятии*/
$sql = "SELECT * FROM ккомпания";
if($result = $conn->query($sql)){
    $kodkk = $result->num_rows; // количество полученных строк
    /*echo "<p>Получено объектов: $kodkk</p>";*/
}
else{
    echo "Ошибка: " . $conn->error;
}

$name = $_POST['name'];
$adres = $_POST['adres'];
$rekvizit= $_POST['rekvizit'];
$phone = $_POST['phone'];
$sql1 = "INSERT INTO `ккомпания`(`КодКК`, `Название`, `Адрес`, `Реквизит`, `Телефон`) VALUES (".strval($kodkk+1).",'";
$sql=$sql1.$name."', '".$adres."', '".$rekvizit."', '".$phone."')";
/*echo "Ошибка: " . $sql;*/
if($conn->query($sql)){
    echo "Данныео компании успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
 добавление данных о Заказе
$sql = "SELECT * FROM заказуслуги";
if($result = $conn->query($sql)){
    $kodzakaza = $result->num_rows; // количество полученных строк
   echo "<p>Получено объектов: $kodzakaza</p>";
}
else{
    echo "Ошибка: " . $conn->error;
}
$koduslugi=3;
$d1 = $_POST['date1']; 
$d1   = new DateTime();
$d1=$_POST['date1'];/*date("Y-m-d");
$result = date_format($d1,'Y-m-d');*/

$d2 = $_POST['date2'];
echo"ааааааа".$result;
$sql1 = "INSERT INTO `заказуслуги`(`НомерЗаказа`, `ДатаЗаказа`, `ДатаНачала`, `ДатаОкончания`, `КодКК`, `ИдКодУслуги`, `ИдКодАналитика`) VALUES (".strval($kodzakaza+1).", '";
$sql=$sql1.date("Y-m-d")."', '".$d1."', '".$d2."', ".strval($kodkk+1)." 1, 1)";
echo "Ошибка: " . $sql;
if($conn->query($sql)){
    echo "Данныео заказе успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}*/

$conn->close();
?>
</p>



</div>
</div>
<div class="div3">
<div class="div3_1">Адрес:
<p>г.Люберцы ул Ленина 194 офис 25</p></div>
<div class="div3_1">Контакты
<p>телефон для заказа +79155781837
</p>
<p>телефон для заказа +88085834593
<p>
</div>

</div>

</body>
</html>