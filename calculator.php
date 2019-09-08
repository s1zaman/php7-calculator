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
    <pre><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
  {
    echo null;
  }
  else if ($num1==null)
  {
    echo <<<IOK0
   <button type="button" class="btn btn-warning">Enter First Number</button>
IOK0;
  }
  else if (is_numeric($num1)==null)
  {
    echo <<<IOK1
   <button type="button" class="btn btn-warning">Entered Value isn't a Number</button>
IOK1;
  }
  else if ($operator==null)
  {
    echo <<<IOK2
   <button type="button" class="btn btn-warning">No Operator!</button>
IOK2;
  }
  else if (!($operator=='/' ||  $operator=='*' ||  $operator=='+' ||  $operator=='-' || $operator=='%'))
  {
    echo <<<IOK3
   <button type="button" class="btn btn-warning">Enter Correct Operator</button>
IOK3;
  }
  else if ($num2==null)
  {
    echo <<<IOK4
   <button type="button" class="btn btn-warning">Enter Second Number</button>
IOK4;
  }
  else if (is_numeric($num2)==null)
  {
    echo <<<IOK5
   <button type="button" class="btn btn-warning">Entered Value isn't a Number</button>
IOK5;
  }
  else if ($num1==null && $num2==null)
  {
    echo <<<IOK6
   <button type="button" class="btn btn-warning">Please Enter Numbers</button>
IOK6;
  }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2) && $num2==0)
  {
    echo <<<IOK7
   <button type="button" class="btn btn-warning">Cannot Divide by Zero!</button>
IOK7;
  }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2))
  {
    $division=($num1/$num2);
    echo <<<IOK8
   <button type="button" class="btn btn-warning">Result is $division</button>
IOK8;
  }
  else if ($operator=='*' && is_numeric($num1) && is_numeric($num2))
  {
    $multiplication=($num1*$num2);
    echo <<<IOK9
   <button type="button" class="btn btn-warning">Result is $multiplication</button>
IOK9;
  }
  else if ($operator=='+' && is_numeric($num1) && is_numeric($num2))
  {
    $addition=($num1+$num2);
    echo <<<IOK10
   <button type="button" class="btn btn-warning">Result is $addition</button>
IOK10;
  }
  else if ($operator=='-' && is_numeric($num1) && is_numeric($num2))
  {
    $subtraction=($num1-$num2);
    echo <<<IOK11
   <button type="button" class="btn btn-warning">Result is $subtraction</button>
IOK11;
  }
  else if ($operator=='%' && is_numeric($num1) && is_numeric($num2))
  {
  $remainder=($num1%$num2);
    echo <<<IOK12
   <button type="button" class="btn btn-warning">Result is $remainder</button>
IOK12;
  }
  else
  {
  echo <<<IOK13
 <button type="button" class="btn btn-warning">Invalid Operator!</button>
IOK13;
  }
  ?>
  </div>

</body>
</html>
