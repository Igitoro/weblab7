<!DOCTYPE html>
<html>
<head>
  <title>Список делителей числа</title>
</head>
<body>
  <h2>Список делителей числа</h2>
  <form method="post">
    Введите число: <input type="text" name="number">
    <input type="submit" value="Найти делители">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    echo "Делители числа " . $number . ": <br>";
    for ($i = 1; $i <= $number; $i++) {
      if ($number % $i == 0) {
        echo $i . " <br>";
      }
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>
