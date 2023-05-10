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
<p style="text-align: center" ><h1>Отчет 1. Выполненые работы</h1></p>
<p> 
<p>
<?php
$conn = new mysqli("localhost", "root", "", "analitik");
if ($conn == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
$sql = "SELECT выполненнаяработа.*, видработы.Цена FROM выполненнаяработа JOIN видработы ON выполненнаяработа.КодВР=видработы.КодВР";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<H3><table><tr><th>код работы</th><th>Номер заказа</th><th>Дата Н</th><th>Дата окончания</th><th>цена</th></tr>";
    foreach($result as $row){
        echo "<tr>";
			echo "<td>" . $row["НомерРаботы"] . "</td>";
            echo "<td>" . $row["НомерЗаказа"] . "</td>";
            echo "<td>" . $row["ДатаН"] . "</td>";
            echo "<td>" . $row["ДатаК"] . "</td>";
			/*echo "<td>" . $row["Телефон"] . "</td>";*/
			echo "<td>" . $row["Цена"] . "</td>";
        echo "</tr>";
    }
    echo "</table></H3>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
}
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