
<?php
  $con= new mysqli("localhost", "root", "", "add");
  if ($con ->connect_errno) {
    die("connection error");
    // echo "connection error";
    // exit();
  };
 ?>
