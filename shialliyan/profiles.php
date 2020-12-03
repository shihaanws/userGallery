<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profiles page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

  <style>
  body{
    margin:100px;
  }
  .img-container{
	
	
	
	display:inline;
  
	
}

img{
  
  width:150px;
  margin:20px;
  margin-top:10px;
  
	opacity:1;
}

  
    div{
      padding: 10px;
      margin : 10px;
    }
    <?php include "style.css" ?>
  </style>
  <div class="container pt-3 img-container">
    
        <?php
        $shi=mysqli_connect('localhost', 'root', '', 'userGallery');
        $res="select * from myUsers";
        $result = mysqli_query($shi,$res);
        $imagesDirectory = "images/";
        if(is_dir($imagesDirectory))
        {
	        $opendirectory = opendir($imagesDirectory);
          while (($image = readdir($opendirectory)) !== false)
        	{
		        if(($image == '.') || ($image == '..'))
		        {
			        continue;
		        }
		      $imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		      if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		      {
            echo "<img src='images/".$image."' width='200'> ";
            
	      	}
        }
	
    closedir($opendirectory);
 
}


 

        ?>
    
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	
  <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
  <script>bubbly();</script>
<script>
	$(document).ready(function(){
		$("img").hover(function(){
			$(this).animate({width:'200px',marginBottom:'200px'});
			$(this).css("opacity","0.7");
		}, function(){
			$(this).animate({width:'150px',marginBottom:'150px'});
			$(this).css("opacity","1");
		});
	});
</script>
  
</body>
</html>