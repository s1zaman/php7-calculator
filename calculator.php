<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Example 2.2">
  <meta name="author" content="Choudhary Abdullah">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example 2.2</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="form">
    <pre><form action="Example2.2.php" method="post">
      <h2>Calculator</h2>
      Number 1 : <input type="text" name="num1" placeholder=" First Number"></br>
      Operator : <input type="text" name="operator" placeholder=" Operator"></br>
      Number 2 : <input type="text" name="num2" placeholder=" Second Number"></br>
      <input type="Submit">
    </form></pre>


  <?php
  $num1 = $_POST["num1"];
  $operator = $_POST["operator"];
  $num2 = $_POST["num2"];

  if ($operator==null && $num1==null && $num2==null)
  { echo null; }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2) && $num2==0)
  {
    echo "<pre>      Cannot Divide by Zero.</pre>";
  }
  else if ($operator=='/' && is_numeric($num1) && is_numeric($num2))
  {
    $division=($num1/$num2);
    echo "<pre>      Result is $division</pre>";
  }
  else if ($operator=='*' && is_numeric($num1) && is_numeric($num2))
  {
    $multiplication=($num1*$num2);
    echo "<pre>      Result is $multiplication</pre>";
  }
  else if ($operator=='+' && is_numeric($num1) && is_numeric($num2))
  {
    $addition=($num1+$num2);
    echo "<pre>      Result is $addition</pre>";
  }
  else if ($operator=='-' && is_numeric($num1) && is_numeric($num2))
  {
    $subtraction=($num1-$num2);
    echo "<pre>      Result is $subtraction</pre>";
  }
  else if ($operator=='%' && is_numeric($num1) && is_numeric($num2))
  {
  $remainder=($num1%$num2);
    echo "<pre>      Result is $remainder</pre>";
  }
  else echo null;
  ?>
</div>

</body>
</html>
