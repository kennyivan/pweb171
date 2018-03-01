<br><br><br><br>

<h3>  Blog Yang Sudah Ditulis</h3>
<br><br>
<?php
  foreach( $user as $users ){
    echo "<a id='cblog' href='/blog/" . $users['blog_ID'] ."'>" . $users['judul']."<a><br><br>";
  }

?>
