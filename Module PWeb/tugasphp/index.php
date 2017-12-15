<?php
include("Member.php");

$nim =$_GET['nim'];
$member = new Member($nim);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test PHP</title>

    <style type="text/css">
      body{
        background-color: #<?= $member->getWarna() ?>;
      }

    </style>
  </head>
  <body>
  <h1>Hallo, <?= $member->getNama() ?></h1>
  </body>
</html>
