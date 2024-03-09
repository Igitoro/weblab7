<!DOCTYPE html>
<html>
<head>
  <title>Нахождение корней квадратного уравнения</title>
</head>
<body>
  <h2>Нахождение корней квадратного уравнения</h2>
  <form method="post">
    Введите коэффициент a: <input type="text" name="a"><br>
    Введите коэффициент b: <input type="text" name="b"><br>
    Введите коэффициент c: <input type="text" name="c"><br>
    <input type="submit" value="Найти корни уравнения">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $b*$b - 4*$a*$c;
    if ($d > 0) {
      $x1 = (-$b + sqrt($d)) / (2*$a);
      $x2 = (-$b - sqrt($d)) / (2*$a);
      echo "Корни уравнения: x1 = " . $x1 . ", x2 = " . $x2 . "<br>";
    } elseif ($d == 0) {
      $x = -$b / (2*$a);
      echo "Уравнение имеет один корень: x = " . $x . "<br>";
    } else {
      echo "Уравнение не имеет действительных корней <br>";
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>