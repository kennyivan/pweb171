<?php
  include ("prostu.php");
  include ("member.php");

  $nim = $_GET['nim'];
  $member = new member($nim);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Data Mahasiswa</title>
     <style type="text/css">
       body
       {
         background-color: #<?=$member->getwarna()?>;
       }
     </style>
   </head>
   <body>
     <h3><b><?=$member->getnama()?><b></h3><br>
    <h3><?=$member->getemail()?></h3><br>
    <h3><?=$member->getsex()?></h3><br>
    <p><?=$member->getpros()->getprogram()?><b> </b><?=$member->getpros()->getnama()?></p>
   </body>
 </html>
