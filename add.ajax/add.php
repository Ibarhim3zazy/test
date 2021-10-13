<?php require_once("connection.php");
  if (isset($_GET['name']) == true) {
    $n= $_GET['name'];
    $p= $_GET['phone'];
    $r= $con->query("INSERT INTO add_me VALUES('$n', '$p', NULL);");
    if ($r==true)
      echo "saved";
      else
        echo "failed";
  }
 ?>
