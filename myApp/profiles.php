<?php

include 'processForm.php';

$sql= "SELECT * from myUsers ";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Profiles page</title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: linear-gradient(to right,#13547a , #80d0c7); ">
  <style>
    <?php include "style.css" ?>
  </style>
  <div class="container pt-3">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <table class="table table-bordered">
            <thead>
                <th>Profile Image</th>
                <th>Bio</th>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                  <td>
                  <img src="images/<?php echo $user['profile_image'];?>" width="80px"/>
                  </td>
                <td>
                <?php echo $user['bio'];?>
                </td>
              </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>