<!DOCTYPE html>
<html>
  <body>
    <h1>String 연습</h1>
    <?php
    echo 'Hello world<br>';
    echo 'Hello "world"<br>';
    echo "Hello \"world\"<br>";
    echo "Hello 'world'";
    ?>
    <h1>concatenation operator : "."</h1>
    <?php
    echo "Hello "."world";
    ?>
    <h1>String length</h1>
    <?php
      $str = 'Hello world';
      echo strlen($str).nl2br("\n");
      echo strlen($str)."<br/>\n";
      echo strlen("Hello world");
    ?>
  </body>
<html>
