<!DOCTYPE html>
<html>
<head>
  <title>Список общих делителей</title>
</head>
<body>
  <h2>Список общих делителей</h2>
  <form method="post">
    Введите первое число: <input type="text" name="number2">
    Введите второе число: <input type="text" name="number3">
    <input type="submit" value="Найти общие делители">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    echo "Общие делители чисел " . $number2 . " и " . $number3 . ": <br>";
    $commondivisors = array();
    for ($j = 1; $j <= min($number2, $number3); $j++) {
      if ($number2 % $j == 0 && $number3 % $j == 0) {
        $commondivisors[] = $j;
      }
    }
    echo implode(", ", $commondivisors);
  }
  ?>
  <br>
  <a href="index.php">Назад</a>
</body>
</html>