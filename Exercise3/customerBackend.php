<?php
  $username = $_POST["user"];
  $password = $_POST["pwd"];
  $shipping = $_POST["shipping"];
  $oneQ = $_POST["1usd"];
  $fiveQ = $_POST["5usd"];
  $tenQ = $_POST["10usd"];
  echo"Welcome, " . $username . "<br>";
  echo"Your password is: " . $password . "<br>";
  echo"Order details <br>";
  echo"Quantity of 1 Dollar Bills: ". $oneQ . "<br>";
  echo $oneQ . " x $0.50 = $" . $oneQ * 0.5 . "<br>";
  echo"Quantity of 5 Dollar Bills: ". $fiveQ . "<br>";
  echo $fiveQ . " x $2.99 = $" . $fiveQ * 2.99 . "<br>";
  echo"Quantity of 10 Dollar Bills: ". $tenQ . "<br>";
  echo $tenQ . " x $2.98 = $" . $tenQ * 2.98 . "<br>";
  echo"Shipping cost: $" . $shipping . "<br>";
  echo "Total: $" .  ($oneQ * 0.50 + $fiveQ * 2.99 + $tenQ * 2.98 + $shipping) . "<br>";
  echo"Have a nice day!";



?>
