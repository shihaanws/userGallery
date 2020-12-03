<?php include 'processForm.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Gallery</title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: linear-gradient(to right,#13547a , #80d0c7); ">
<style>
  <?php include "style.css" ?>
  .shilabel
  {
    text-decoration:underline grey;
    font-weight:bold;

  }
</style>
  <div class="container pt-3">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <form action="index.php" method="post" enctype="multipart/form-data">
          <h3 class="text-center" id="profiling"><span style="font-size:50px; color:'white';font-weight:bold;-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;display: block;">User Gallery</span></h3>
          <p class="text-center" style="color: black; text-decoration:underline grey;">A personalised image gallery to add your favourite pictures!</p>

          <?php if(!empty($msg)); ?>

          <div class="alert <?php echo $css_class; ?>" >

          <?php echo $msg; ?>
          </div>

          

          <div class="form-group text-center">
          <img src="index.jpg" onclick="triggerClick()" id="profileDisplay"/>
          <label for = "profileImage" class="shilabel">[ Add 📷+ ]</label>
            <input type="file" name="profileImage"  id="profileImage" onchange="displayImage(this)" style="display:none;" >
          </div>
          <div class="form-group">
            <button type="submit" name="save-user" class="btn btn-warning btn-block">Upload</button>

              <div class="form-group text-center">
              <a class="btn btn-success " href="profiles.php">View my gallery</a>
              </div>
            

          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
  <script>bubbly();</script>
  

  <script src="scripts.js"></script>
</body>
</html>