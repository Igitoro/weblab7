<!DOCTYPE html>
<html>
<head>
  <title>Преобразование температуры</title>
</head>
<body>
  <h2>Преобразование температуры из градусов Цельсия в градусы Фаренгейта</h2>
  <form method="post">
    Введите температуру в градусах Цельсия: <input type="text" name="celsius">
    <input type="submit" value="Преобразовать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["celsius"])) {
      echo "Пожалуйста, введите температуру в градусах Цельсия.";
    } else {
      $celsius = $_POST["celsius"];
      $fahrenheit = ($celsius * 9/5) + 32;
      echo "Температура в градусах Фаренгейта: " . $fahrenheit;
      echo "<br>";
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>