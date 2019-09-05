<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Simple PHP Calculator">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Calculator</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="form">
    <pre><form action="calculator.php" method="post">
      <h2>Calculator</h2>
      <input type="text" name="num1" placeholder=" First Number" class="btn btn-light"></br>
      <input type="text" name="operator" placeholder=" Operator" class="btn btn-light"></br>
      <input type="text" name="num2" placeholder=" Second Number" class="btn btn-light"></br>
      <input type="Submit" class="btn btn-success">
    </form></pre>


  <?php
  $num1 = $_POST["num1"];
  $operator = $_POST["operator"];
  $num2 = $_POST["num2"];

  if ($operator==null && $num1==null && $num2==null)
  { echo null; }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2) && $num2==0)
  {
    echo <<<EOT0
   <button type="button" class="btn btn-warning btn-sm">Cannot Divide by Zero!</button>
EOT0;
  }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2))
  {
    $division=($num1/$num2);
    echo <<<EOT1
   <button type="button" class="btn btn-warning btn-sm">Result is $division</button>
EOT1;
  }
  else if ($operator=='*' && is_numeric($num1) && is_numeric($num2))
  {
    $multiplication=($num1*$num2);
    echo <<<EOT2
   <button type="button" class="btn btn-warning btn-sm">Result is $multiplication</button>
EOT2;
  }
  else if ($operator=='+' && is_numeric($num1) && is_numeric($num2))
  {
    $addition=($num1+$num2);
    echo <<<EOT3
   <button type="button" class="btn btn-warning btn-sm">Result is $addition</button>
EOT3;
  }
  else if ($operator=='-' && is_numeric($num1) && is_numeric($num2))
  {
    $subtraction=($num1-$num2);
    echo <<<EOT4
   <button type="button" class="btn btn-warning btn-sm">Result is $subtraction</button>
EOT4;
  }
  else if ($operator=='%' && is_numeric($num1) && is_numeric($num2))
  {
  $remainder=($num1%$num2);
    echo <<<EOT5
   <button type="button" class="btn btn-warning btn-sm">Result is $remainder</button>
EOT5;
  }
  else
  {
  echo <<<EOT6
 <button type="button" class="btn btn-warning btn-sm">Invalid Operator !</button>
EOT6;
  }
  ?>
</body>
</html>
