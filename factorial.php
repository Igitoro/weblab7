<!DOCTYPE html>
<html>
<head>
  <title>Вычисление факториала числа</title>
</head>
<body>
  <h2>Вычисление факториала числа</h2>
  <form method="post">
    Введите число: <input type="text" name="number1">
    <input type="submit" value="Вычислить факториал">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $factorial = 1;
    for ($i = 1; $i <= $number1; $i++) {
      $factorial *= $i;
    }
    echo "Факториал числа " . $number1 . " равен " . $factorial . "<br>";
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>
