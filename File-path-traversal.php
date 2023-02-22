<?php

	
   if(isset($_POST['file_name'])){
     $file = basename(realpath($_POST['file_name']));
	 include($file);
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="text" name="file_name" placeholder="name file" />
         <input type="submit"/>
      </form>
      
   </body>
</html>