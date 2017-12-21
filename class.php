<?php
/**
* 
*/
class MyClass
{
	// public $msg = "Hello All, I am  ";
	// protected $no;
	protected $sorted;

	public function __construct($input="")
	{
		// if(!is_int($input)){
		// 	throw new InvalidArgumentException('Not a number or missing argument');
		// }
		// $this->no = $input;
	}
	// public function test($name){
	// 	return $this->msg.$name;
	// }

	public function getfactorial($no=""){
		$factorial =1;
		for($i=1; $i <= $no; $i++){
			$factorial *= $i;
		}
		return $factorial;
	}

	// public function getsort($sorted=[]){
	// 	sort($sorted);
	// 	return $sorted;
	// }

	// public function difference(){
	// 	$datetime1 = new DateTime("now");
	// 	$datetime2 = new DateTime("1992/12/16");
	// 	return $interval = date_diff($datetime1, $datetime2);
	// }

}


$myclass = new MyClass();
// echo $myclass->test("Ajay Parmar").'<br/>';
echo $myclass->getfactorial(5);
// print_r( $myclass->getsort(array(11,-2,4,35,0,8,-9)));
// $diff = $myclass->difference();
// print_r($diff->y);echo' Years ';print_r($diff->m);echo' Months ';print_r($diff->d);echo'  Days ';

// $dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');  
// echo $dt; 
// echo"<br/>";
// function IsPrime($n)  
// {
//  	for($x=2; $x<$n; $x++)  
//    	{
//         if($n %$x ==0)  
//         {  
//            return 0;  
//         }  
//     }  
//   return 1;  
// }
// $a = IsPrime(3);
// if ($a==0)  
// echo 'This is not a Prime Number.....'."\n";  
// else  
// echo 'This is a Prime Number..'."\n";  

echo"<br/>";

// $a = array(51,14,1,21,'hj');  
// sort($a);
// print_r($a);

// function check_palindrome($string)   
// {  
//   if ($string == strrev($string))  
//       return 1;  
//   else  
//       return 0;  
// }  
// echo check_palindrome('madam')."\n";

// for($x=ord('a');$x<=ord('z');$x++){
// 	echo chr($x);
// 	echo'<br/>';
// }

// $my_string = 'The quick brown fox jumps over the lazy dog';  
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";  

// $str1= '082307';   
// echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n"; 

// $str1 = 'The quick brown fox jumps over the lazy dog.';  
// if (strpos($str1,'dog') !== false)   
//  {  
//     echo 'The specific word is present at'.strpos($str1,'dog');  
//  }  
// else  
//  {  
//     echo 'The specific word is not present.';  
//  }  


// $path = 'www.example.com/public_html/index.php'; 
// echo substr(strrchr($path, '/'), 1);

$mailid  = 'parmarajay2@example.com';  
$user = strstr($mailid, '@', true);  
echo $user."\n";  
?>