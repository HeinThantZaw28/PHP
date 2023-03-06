<?php 
	$a=1.1;
	$b="Mg Mg";
	echo $a;
	echo $b;
	$fruit=array("apple","banana","orange"); //cant output the array with echo
	
	// sort ($fruit); //ascending 
	rsort($fruit); // descending
	// echo $fruit=[0]."<br>";
	// echo $fruit=[1]."<br>";
	// echo $fruit=[2]."<br>";
	// print_r($fruit);
	// for ($i=0; $i <3 ; $i++) { 
	// 	echo $fruit[$i]."<br>";
	// }
	// echo  count($fruit); //to know the number of the array
	// ------------associated arrray----------------
	$c="Hello World";
	var_dump($c); // use var_dump() to output type variable and input

	$student=array("name"=>"John","Email"=>"john@gmail.com","Address"=>"Yangon"); //infront of => is key and behind is value
	foreach ($student as $key => $value) {
		echo "The key is ".$key."The value is ".$value."<br>";
	}
	// --------------------------------------------------
	// ---------------multidimentional array-----------------
	$customer=array(
						array("Name","Email","Address"),
						array("John","john@gmail.com","Yangon"),
						array("smith","smith@gmail.com","korea")
					);
	print_r($customer);
	echo $customer[0][0]."<br>";
	// -----------------------------------------------------
	
	 // $i=0;
	 // while ( $i< 10) {
	 // 	$i++;
	 	
	 // }
	 // echo $i."<br>"; //if output are outside the loop, the result will be last

// ---------------append-----------------
	 // $d=0;
	 // $u="";
	 // while ( $d< 10) {
	 // 	$u.=++$d."<br>";
	 // }
	 // echo $u;
// --------------------------------------------------------
	// -------------funciton--------------------
	// function rectangleArea()
	// {
	// 	echo "Hello";
	// }
	// rectangleArea();

	// function Area($w,$h)
	// 			{
	// 				echo $w*$h;
	// 			}
	// Area(5,4);
// --------------------global variable-----------------
	// $a=5;
	// function Calloutsidev()
	// {
	// 	echo $GLOBALS['a']; //variable needs to change globals to be used in function
	// }
	// Calloutsidev();
// -----------------------------------
	// -----------constant-------------
	// define('pi',3.14);
	// function Constantt()
	// {
	// 	echo pi; //constant can be used in function
	// }
	// Constantt();

// ----------------------------------------
	// ------------FILE---------------
	$file='myFile.txt';
	// unlink($file);
	// $handle=fopen($file, 'r'); //a to append w to write r to read
	// // fwrite($handle, "Hello World");
	// if (file_exists($file)) {
	// 	echo fread($handle, filesize($file)); //filesize functioin to know the file size
	// }
	// fclose($handle);
	// -------------------------------------
	// ---------------------Section and cookies-----------------\
		
?>