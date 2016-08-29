<?php
include "config.php";
 
  if (isset($_POST['submit'])) {
    $ad = $_POST['name'];
    $value = $_POST['text'];
    $id = $_POST['id'];
    $sql = "UPDATE header SET element='$ad', value='$value' WHERE id='$id'";
    $query = mysqli_query($conn,$sql);
    if($query) {
      header("Location:index.php");
    }
}else {
   header("Location:update.php");
}
  ?>