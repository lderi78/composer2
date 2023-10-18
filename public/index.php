<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
require __DIR__ . '/../src/Hello.php';
use App\Hello;

$object = new Hello();


?>

<h1>  <?= $object->speak() ?>   </h1>


</body>
</html>

