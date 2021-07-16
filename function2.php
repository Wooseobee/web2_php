<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
        print("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>");
      }
      basic();
      echo "<br>";
      basic();
      echo "<br>";
    ?>
    <h2>Basic2</h2>
    <?php
      basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
      function sum($left, $right){
        print("$left + $right = ");
        print($left+$right);
        print("<br>");
      }
      sum(2,4);
      sum(6,8);
      sum(15,54);
    ?>
  </body>
</html>
