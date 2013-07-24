<?php 

	//Start session
	session_start();
 
	//Include database connection details
	include("../connect.php");
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$company = clean($_POST['company']);
	$locFrom = clean($_POST['locFrom']);
	$locTo = clean($_POST['locTo']);
	$frequency = $_POST['frequency'];
	$carModel = clean($_POST['carModel']);
	$noOfSeats = clean($_POST['noOfSeats']);
	$startTime = clean($_POST['startTime']);
	$returnTime = clean($_POST['returnTime']);
	$features = clean($_POST['features']);
	$oneTwoWay = $_POST['oneTwoWay'];
	$adStatus = $_POST['adStatus'];

 
	//Input Validations

	if($locFrom == '') {
		$errmsg_arr[] = 'Location From missing';
		$errflag = true;
	}
		if($locTo == '') {
		$errmsg_arr[] = 'LOcation To missing';
		$errflag = true;
	}
		if($carModel == '') {
		$errmsg_arr[] = 'Car Model missing';
		$errflag = true;
	}
		if($noOfSeats == '') {
		$errmsg_arr[] = 'No of seats missing';
		$errflag = true;
	}
		if($startTime == '') {
		$errmsg_arr[] = 'Start Time missing';
		$errflag = true;
	}
		if($returnTime == '') {
		$errmsg_arr[] = 'Return Time missing';
		$errflag = true;
	}

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	else
	{
		$query = 'insert into ads(
                userid,
                company_name,
                location_from,
                location_to,
                frequency,
                car_model,
                registration_number,
                number_of_seats,
                seats_available,
                start_time,
                return_time,
                one_two_way,
                description,
                ad_status
                )
                values
                (
                "2",		
                "' . $company . '",
                "' . $locFrom . '",
                "' . $locTo . '",
                "' . $frequency . '",
                "' . $carModel . '",
                " NULL ",
                "' . $noOfSeats . '",
                " NULL ",
                "' . $startTime . '",
                "' . $returnTime . '",
                "' . $oneTwoWay . '",
                "' . $features . '",
                "' . $adStatus . '"
                )';

	$result=mysql_query($query);

	if($result)
	{
		session_write_close();
		header("location: welcome.php");
	}
	else
	{
		session_write_close();
		header("location: postAd.php");
	}

 
	}


?>