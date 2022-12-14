<?php

$id = array(1,2,4,6,8,9);
	for ($i=1;$i<=10;$i++){
		$num ='';
		foreach($id as $k){
		   if($k == $i){
			   $found = true;
		}
	} 
	   if($found == false)
			echo $i.'<br>';
			$found=false;
		}	
   
   
   //Print a Star
   
   // for($i=0;$i<=5;$i++){
	// for($j=1;$j<=$i;$j++){
		// echo '*';
	// }
	// echo'<br/>';
// } 
   
   
   ?>
   
   <!-- Print a Entered number Table -->
<!--form  method="post">
<input type="text" name="tbl" value="">

<input type="submit" name="submit" >

</form-->


<?php
// if(isset($_POST['tbl'])){

  // for ($i=1;$i<=10;$i++){
	  
	  // echo   $_POST['tbl'] .' x ' . $i .' = '. $_POST['tbl']*$i .'<br/>';
  // }
  
// }
