<?php

    include 'includes/autoloader.inc.php';
   
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta htp-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neppo</title>
</head>
<body>
  <?php
  
    $testObj = new Test();
    $testObj->getUsers();

  ?>
</body>