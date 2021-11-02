<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $password = $_GET["password"];
    if($password == "1111"){
      echo "안녕하세요. 환영합니다.";
    }else{
      echo "누구신가요?";
    }
    ?>
  </body>
</html>
