<?php
include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume Builder</title>
  <link rel="stylesheet" href="./imageuplader.css">
</head>

<body>

  <div class="head">
  <h1>Resume Buider For us</h1>
  </div>
  <div class="container">
    <form method="POST" enctype="multipart/form-data">
      <label for="name">Name</label>
      <input type="text" name="Filename" placeholder="Filename here">
      <label for="name" id="">Image</label>
      <input type="file" name="Image">
      <button type="submit" name="upload" class="btn">Upload</button>
    </form>
  </div>
  <?php
  
  if (isset($_POST['upload'])) {
    $img_loc = $_FILES['Image']['tmp_name'];
    $img_name = $_FILES['Image']['name'];
    $uname = $_POST['Filename'];
    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_des = "Image/" . $uname . "." . $img_ext;
    if (($img_ext != 'jpg') && ($img_ext != 'png') && ($img_ext != 'jpeg')) {
      echo "<script>alert('UnSucessFull bcoz invalid image');</script>";
      exit();
    }

    $query = "INSERT INTO `resume_inputdata`(`FileName`, `Image`) VALUES ('$uname','$img_des')";

    if (mysqli_query($conn, $query)) {
      echo "<script>alert('SucessFull');</script>";
      move_uploaded_file($img_loc, $img_des);
    } else {
      echo "<script>alert('UnSucessFull');</script>";
    }
  }
  ?>

</body>

</html>