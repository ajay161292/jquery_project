<form id="myform" name="myform" method="post" action="<?php $_PHP_SELF; ?>">
	<input type="text" name="number" class="input" id="" value="" /><br/>
	<input type="submit" name="submit" class="submit" value="submit" />
</form>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	})

</script>	
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$numbers = $_POST['number'];
	$exploded = explode(',', $numbers);
	// $input_count = sizeof($exploded);
	$input_count = count($exploded);
	// echo $input_count;
	$expr1 = '/^[a-z A-Z]/';
	// $expr = '/^[1-9,]/';
	// $expr = '/^[1-9,][0-9,]/';
	$expr = '/^[1-9]{2,3}/';
	// echo $numbers;
	// print_r($exploded);
	// exit;
	$findchar = 0;
	if(!empty($exploded)){
		foreach($exploded as $key=>$value) {
		    if (preg_match($expr1,$value)){
		    	$findchar = 1;
		    }
		}
	}
	if($findchar == 1){
		echo"Please Enter only Numeric values";
	}
	else if(empty($numbers)){
		echo"Please Enter 0-9 Numbers";
	}
	else if(preg_match_all($expr1, $numbers)){
		echo"Please Enter only Numeric values<br/>";	
	}
	else if($input_count<5){
		echo"Please Enter minimum 5 Numbers<br/>";	
	}
	else if(preg_match($expr, $numbers)){
		echo"Please Enter only single 1-9 digits<br/><br/>";	
	}

	else{	
			$exploded = explode(',', $numbers);
			// var_dump($exploded);
			$totalsum = array_sum($exploded);

			$array_counts = array_count_values($exploded);
			print_r($array_counts);echo"<br/>";
			$value = 0;
			$vallue = 0;
			$count1s = 0;
			$count2s = 0;
			$count3s = 0;
			$count4s = 0;
			$count5s = 0;
			$two_three_count = 0;
			$two_two_count = 0;
			$one_three_count = 0;
			foreach($array_counts as $key=>$value){
				// echo "<br/>value".$value."<br/>";
				if($value == 1){	
					// echo "sum:".$totalsum."<br/>";
					// print_r("1skey".$key."<br/>");
					$count1s = $totalsum;
					// echo "1scount:".$count1s."<br/><br/><br/>";
				}
				else if($value == 2){
					$key = $key;	
					$count2s = 14+(2*($key));
					// echo "2scount:".$count2s."<br/><br/><br/>";
				}
				else if($value == 3){
					$key = $key;		
					$count3s = 15+(2*($key));
					// echo "3scount:".$count3s."<br/><br/><br/>";
				}
				else if($value == 4){	
					$key = $key;	
					$count4s = 16+(4*($key));
					// echo "4scount:".$count4s."<br/><br/><br/>";
				}
				else if($value == 5){	
					$key = $key;	
					$count5s = 17+(5*($key));
					// echo "5scount:".$count5s."<br/><br/><br/>";
				}
			}
			if(isset($count3s) && isset($count2s)){
				$two_three_count = 15+($count3s-15)+($count2s-14);
				// echo "two three times count: ".$two_two_count;
			}
			if(array_keys($array_counts, '1') && array_keys($array_counts, '3') && array_keys($array_counts, '1')) 
			{
				foreach (array_keys($array_counts,'3') as $key=>$value) {
					$vallue = $value;
					$one_three_count = 2*($vallue);
				}
				$one_three_count = 15+$one_three_count."";
				// echo "one three times count: ".$one_three_count."<br/>";
			   
			}
			if(count(array_keys($array_counts, '2')) > 1) 
			{
				foreach (array_keys($array_counts,'2') as $key=>$value) {
					$vallue = $value;
					$two_two_count += 2*($vallue);
				}
				$two_two_count = 14+$two_two_count."";
				// echo "2 times count: ".$two_two_count;
			   
			}
			
			if(!empty($one_three_count)){
				echo "Output :". min($count1s,$one_three_count).":-&nbsp;&nbsp;";	
				if(min($count1s,$one_three_count) == $one_three_count){
				// echo $vallue;
				echo "Three's (".$vallue.") Count";
				}
			}
			else{
				echo "Output :". max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s).":-&nbsp;&nbsp;";
			}	
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $two_two_count){
				echo "Two's Count";
				// echo $vallue;
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $count1s){
				echo "Sum";
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $count2s){
				echo "Two's Count";
				// echo $key;
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $count3s){
				echo "Three's Count";
				// echo $key;
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $two_three_count){
				echo "Three's Count";
				// echo $key;
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $count4s){
				echo "Four's Count";
				// echo $key;
			}
			if(max($count1s,$count2s,$count3s,$two_three_count,$two_two_count,$one_three_count,$count4s,$count5s) == $count5s){
				echo "Five's Count";
				// echo $key;
			}

			// $array = $array_counts;
			// function array_is_unique($array) {
			//    // return array_unique($array) == $array;
			//    return count($array) != count(array_unique($array));
			// }
			// echo array_is_unique($array) ? "unique" : "non-unique";exit;
			// $counts = array_count_values($array);
			// foreach ($counts as $name => $count) {
			//     print $name . ' | ' . ($count > 1 ? 'Duplicate' : 'Unique') . "\n";
			// }

			// print_r(count(array_unique($array_counts)));echo"<br/>";
			// exit;
			// print_r(count($array_counts));
			// $mul = 0;
			// $uniquevalues = array_unique($array_counts);
			// if(count(array_unique($array_counts))<count($array_counts)){
			// if(count(array_unique($array_counts)) > 1){
			// if(count(array_unique($array_counts)) >= 2){
			// 	foreach ($uniquevalues as $uniquevalue)
			// 	{
			// 		// print_r("uniquevalue:".$uniquevalue);echo"<br/>";
			// 	  	$get_keys = array_keys($array_counts, $uniquevalue);
			// 	  	// echo"getkeys : ";print_r($get_keys);echo"<br/>";exit;
			// 	  	if (count($get_keys) > 1)
			// 	  	{ 	
			// 		    foreach ($get_keys as $key=>$values)
			// 		    {
			// 				$mul += 2*($values);
			// 		    }
			// 	  	}
			// 	}
			// 	$count2s = $totalsum+$mul;
			// 	echo "2scount:".$count2s."<br/>";

			// }
			// echo "Final Result : ". max($count1s,$count2s,$count3s)."<br/>";
			
	}
}	
	
?>