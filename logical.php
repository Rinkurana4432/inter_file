<?php
//function to convert string into array
$arr = 'Sachin';
$data = array();
for($i=0;$i<strlen($arr);$i++){
	$data[] = $arr[$i];
}
echo '<pre>';print_r($data);





//Program to get not avilable number in array.
// $id = array(1,2,4,6,8,9);
	// for ($i=1;$i<=10;$i++){
		// $num ='';
		// foreach($id as $k){
		   // if($k == $i){
			   // $found = true;
		// }
	// } 
	   // if($found == false)
			// echo $i.'<br>';
			// $found=false;
		// }	
   
   
   //Print a Star
   
   // for($i=0;$i<=5;$i++){
	// for($j=1;$j<=$i;$j++){
		// echo '*';
	// }
	// echo'<br/>';
// } 
   
   
   //program
/*
output
	1
	2 3
	4 5 6
	7 8 9 10
*/   
   $k = 1;
	for($i = 1; $i<=4; $i++){
		for($j=1; $j<=$i; $j++){
			echo $k;
			$k++;
		}
		echo "<br>";
	}
   
   
   
   
  // Program to find Leap Year
  
  // if(isset($_POST['submit']))
    // {
    // $year=$_POST['year'];
    // if($year%4==0)
    // {
    // echo "It is a leap year";
    // }
    // else
     // {
       // echo "It is not a leap year";
     // }
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
