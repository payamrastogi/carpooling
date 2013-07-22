<?php 
	include("header.php");
	include("menu.php");
 ?>

<!-- start of hero unit container -->
<center>
<div class="hero-unit">
  <h2>Log in and Post an Ad for Car pooling</h2>
  <p>Find your travelling friend</p>
</div>
</center>

<!-- end of hero unit container -->
<?php
				session_start();
				if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 )
				{
					echo '<div id ="messageBox" class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><ul>';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) 
					{
						echo '<li>',$msg,'</li>'; 
					}
				echo '</ul></div>';
				unset($_SESSION['ERRMSG_ARR']);
				unset($_SESSION['SESS_MEMBER_ID']);
				}
				session_destroy();
			?>
<div class="container">
<div class="row">
<form class="form-horizontal" action='login_exec.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Login</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>
 
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Login</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>
<?php include("footer.php"); ?>