<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<!-- start of hero unit container -->
<center>
<div class="hero-unit">
  <h2>Log in and Post an Ad for Car pooling</h2>
  <p>Find your travelling friend</p>
</div>
</center>

<!-- end of hero unit container -->

<div class="container">
<div class="row">
<form class="form-horizontal" action='' method="POST">
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