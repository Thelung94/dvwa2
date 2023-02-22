<?php

	
   if(isset($_FILES['image'])){
      $errors= array();
      echo $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type']; 
	  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
      
       
      
   
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }else{
	   echo "error";
	   
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>