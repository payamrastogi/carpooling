<?php 
	include("header.php"); 
	include("menu.php"); 
	include ("connect.php");
	require($_SERVER['DOCUMENT_ROOT'].'carpooling/class.phpmailer.php');
	require($_SERVER['DOCUMENT_ROOT'].'carpooling//class.smtp.php');
	if (isset($_POST['formsubmitted'])) 
	{	
	 	$error = array();//Declare An Array to store any error message
		if (empty($_POST['username'])) 
		{
			//if no name has been supplied 
	        $error[] = 'Please Enter a name ';//add to array "error"
	    }  
		else 
		{
			//else assign it a variable
	        $username = $_POST['username'];
	    }
		if (empty($_POST['email'])) 
		{
	        $error[] = 'Please Enter your Email ';
	    }
		else 
		{
	        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) 
			{
	           //regular expression for email validation
	            $Email = $_POST['email'];
	        } 
			else 
			{
	             $error[] = 'Your EMail Address is invalid  ';
	        }
	    }
		if (empty($_POST['password'])) 
		{
	        $error[] = 'Please Enter Your Password ';
	    }
		else 
		{
	        $Password = $_POST['password'];
	    }
	
		//send to Database if there's no error '
		if (empty($error)) 
	   	{ 
			// If everything's OK...
	        // Make sure the email address is available:
	        $query_verify_email = "SELECT * FROM users  WHERE Email ='$Email'";
	        $result_verify_email = mysql_query($query_verify_email,$connect);
	        if (!$result_verify_email) 
			{
				//if the Query Failed ,similar to if($result_verify_email==false)
	            echo ' Database Error Occured ';
	        }

	        if (mysql_num_rows($result_verify_email) == 0) 
			{ 
				// IF no previous user is using this email .
	            // Create a unique  activation code:
	            $activation = md5(uniqid(rand(), true));
	            $query_insert_user = "INSERT INTO `users` ( `Username`, `Email`, `Password`, `Activation`) VALUES ( '$username', '$Email',  md5('".$_POST['password']."'), '$activation')";
	            $result_insert_user = mysql_query($query_insert_user,$connect);
	            if (!$result_insert_user)
				{
	                echo 'Query Failed ';
	            }
	            if (mysql_affected_rows($connect) == 1) 
				{ //If the Insert Query was successfull.
	                // Send the email:
	                $message = " To activate your account, please click on this link:  \n\n</br>";
	                $message .= WEBSITE_URL . '/carpooling/activate.php?email=' . urlencode($Email) . "&key=$activation";
					$mail  = new PHPMailer();
					$body=$message;
					$mail->IsSMTP();
					$mail->SMTPAuth  = true;                 #enable SMTP authentication
					$mail->SMTPSecure = "ssl";               #sets the prefix to the server
					$mail->Host  = "smtp.gmail.com";         #sets GMAIL as the SMTP server
					$mail->Port       = 465;                 #set the SMTP port
					$mail->Username   = "";                  #your gmail username
					$mail->Password   = "";                  #Your gmail password
					$mail->From       = "";                  #your gmail id
					$mail->FromName   = "";                  #your name
					$mail->Subject    = "Verify your Email Account";
					$mail->WordWrap   = 50;
					$mail->AddAddress($Email,$username);
					$mail->MsgHTML($body);
					$mail->IsHTML(true); // send as HTML
					$result = $mail->Send();
					$systemError = FALSE;
					$alreadyRegistered = FALSE;
					if(!$result)
					{
						echo "Mailer Error: " . $mail->ErrorInfo;
					}
					else
					{
						//echo "Message has been sent";
					}
	            } 
				else 
				{ 
					// If it did not run OK.
				   $systemError=TRUE;
	            }
	        } 
			else 
			{ 
				// The email address is not available.
			   $alreadyRegistered=TRUE;
	        }
	    } 
		else 
		{//If the "error" array contains error msg , display them
			echo '<div class="errormsgbox"> <ol>';
	        foreach ($error as $key => $values) 
			{    
	            echo '	<li>'.$values.'</li>';
	        }
	        echo '</ol></div>';
	    }
	    mysql_close($connect);//Close the DB Connection
	}// End of the main Submit conditional.
?>

<!-- start of hero unit container -->
<center>
<div class="hero-unit">
  <h2>Sign-up and start Searching</h2>
  <p>Find your travelling friend</p>
</div>
</center>

<!-- end of hero unit container -->
<?php	
		global $result;
		if($result)
		{?>
			<div id="messageBox" class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <strong>Confirmation: </strong> A confirmation email has been sent to your email.<br>
            Thank you for your registration.
        </div>
		<?php 
		}
		global $systemError;
		if($systemError)
		{?>
			<div id="messageBox" class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <strong>System Error: </strong>You could not be registered due to a system error. We apologize for any inconvenience.<br>
<?php   }
		global $alreadyRegistered;
		if($alreadyRegistered)
		{ ?>
			<div id="messageBox" class="alert alert-error">
           <a class="close" data-dismiss="alert" href="#">×</a>
            <strong>System Error: </strong>That email address has already been registered.<br>								
		<?php 
		} ?>	

<div class="container">
<div class="row">
<form class="form-horizontal" action='signup.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <!--<div class="control-group">
      <!-- Password -->
      <!--<label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>-->
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
	  	<input type="hidden" name="formsubmitted" value="TRUE" />
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </div>
	
	
	
  </fieldset>
</form>
</div>
</div>
<?php include("footer.php"); ?>