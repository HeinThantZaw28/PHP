<?php 
	// ---------------------Section and cookies-----------------\

// setcookie("fruit","apple",time()+5); //date store with array type
// 		if (isset($_COOKIE['fruit'])) 
// 		{
// 			echo $_COOKIE['fruit'];

// 		}
// 		else{
// 			echo"မရှိဘူး";
// 		}

		// session
		session_start();
		unset($_SESSION['fruit']);
		// $_SESSION['fruit']="orange";
		if (isset($_SESSION['fruit'])) 
		{
			echo $_SESSION['fruit'];
		}
		else{
			echo"NOT FOUND";
		}
		// ----------------------------

		// DATE
		// echo date_default_timezone_get(); //to know timezone of the country 
		// echo date_default_timezone_set('Aisa/yangon'); //to know the timezone of your location
		echo date('Y-m-d h:i:s a'); //date and time
		// -----------------------------------------
		$name="I am David";
		//echo strlen($name); //to know the length of the string
		 // echo substr($name, 3); // to delete the string from front
		 // echo substr($name,0,-1); //to delete the string from back
		 echo str_replace("David", "John", $name); //to replace in the string


		 $student=array("name"=>"John","Address"=>"yangon");
		 $a=array_keys($student);
		 $b=array_values($student);
		 $c=array_count_values($student);
		 print_r($a);
		 print_r($b);
		 print_r($c);
		 echo rand(0,100); //to display random value
		 $my="My name is john";
		 $d=explode(" ", $my); //explode() to change form sting to array
		 print_r($d);
		 $fruit=array("apple","orange","banana");
		 echo implode("/", $fruit);
		 echo max(0,4,8); // to display the max value
		 echo min(-2,6,-8); // to display the min value
		 // sleep(5); //to make loading for 5 seconds
		 // phpinfo();
		 echo ceil(3.1); //to show the number greater than the original number
		 echo floor(3.8); //to show the number smaller than the original number

 ?>