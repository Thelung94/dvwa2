<?php

 

 
 $password = "Abcd1234c";
 echo $encPass = "$2y$10$.ZRtT2zZddAe2uCY9ARwfOHtwXfO.RxRaEDYir15FSaHrrFnSRTzC";
 if(password_verify($password,$encPass)){
	 echo "test";
 }
 
 $book_id='-41vv'; // Change this value to get different result


if(filter_var($book_id,FILTER_VALIDATE_INT)){
echo " Yes validation passed ";
}else{
echo " No validation failed ";
}

?>

