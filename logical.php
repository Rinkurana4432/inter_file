<?php
//function to convert string into array
// $arr = 'Sachin';
// $data = array();
// for($i=0;$i<strlen($arr);$i++){
	// $data[] = $arr[$i];
// }
// echo '<pre>';print_r($data);





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
   // $k = 1;
	// for($i = 1; $i<=4; $i++){
		// for($j=1; $j<=$i; $j++){
			// echo $k;
			// $k++;
		// }
		// echo "<br>";
	// }
   
   
   
   
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

//Remove the duplicate value from an array.
    // $number = array(1, 3, 4, 2, 1, 6, 4, 9, 7, 2, 9);
	// $newArr = array();
		// foreach($number as $val){
			// $newArr[$val] = $val;
		// }
	// echo '<pre>'; print_r($newArr);
  
  
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





// $numbers=array(12,23,45,20,5,6,34,17,9,56);
// $length=count($numbers);
// $min=$numbers[0];
// for($i=1;$i<$length;$i++)
  // {
      // if($numbers[$i]<$min)
        // {
          // $min=$numbers[$i];
        // }
  // }
// echo "The smallest number is ".$min;
/*

?>
//Draw a Chess Table
<table width="270px"  border="1px">  
  <?php 
       for($row=1;$row<=8;$row++){
		   echo '<tr>';
		   
		   for($col=1;$col<=8;$col++){
			   $total=$row+$col;  
			   if($total % 2 == 0){
				   
				  echo '<td style="width:25px;height:25px;background-color:#fff;"></td>';
			   }else{
				   echo '<td style="width:25px;height:25px;background-color:#000;"></td>';
			   }
			   
		   }
		echo '</tr>';
   }
  
  
  ?>


</table>


