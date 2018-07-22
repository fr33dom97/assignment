<?php

  $id = $_GET['cID'];
  // do some validation here to ensure id is safe

  $link = mysqli_connect("localhost", "admin", "");
  mysqli_select_db("pj");
  $sql = "SELECT image FROM images WHERE id=$id";
  $result = mysqli_query("$sql");
  $row = mysqli_fetch_assoc($result);
  mysqli_close($link);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>