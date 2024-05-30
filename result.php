<html>
<head>
<title>Завдання 2 - Результат</title>
</head>
<body>
<h1>Завдання 2 - Результат</h1>
<?php
$a = $_GET['a'];
$b = $_GET['b'];

$sum = $a + $b;
$product = $a * $b;
$diff = $a - $b;
$quotient = $a / $b;

echo "Suma: $sum <br>";
echo "Dobutok: $product <br>";
echo "Riznytsia: $diff <br>";
echo "Chastka: $quotient <br>";
?>
</body>
</html>
