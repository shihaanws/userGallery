<?php

$msg="";
$css_class="";

$con = mysqli_connect('localhost', 'root', '', 'userGallery');

if(isset($_POST['save-user'])){
    echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";
    
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];


    $target = 'images/' . $profileImageName;
    
    if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)){
        $sql = "INSERT INTO myUsers (profileImage) VALUES ('$profileImageName')";
        if(mysqli_query($con,$sql)){
            $msg= "Image uploaded and saved to database succesfully";
            $css_class= "alert-success";
        }else{
            $msg = "Database Failure";
            $css_class = "alert-danger";
        }
        
    
    
    }else{
        $msg = "Failed to upload";
        $css_class = "alert-danger";
    }

    

}