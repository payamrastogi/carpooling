<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<!-- start of hero unit container -->
<center>
<div class="hero-unit">
  <h1>Welcome to Car Pooling World</h1>
  <p>Find your travelling friend</p>
  <p>
    <a class="btn btn-primary btn-large">
      Learn more
    </a>
  </p>
</div>
</center>

<!-- end of hero unit container -->

<!-- start of container -->

<div class="container">
	
	<!-- search form start here-->
	<form class="form-horizontal">
		<fieldset>
			<legend>Search</legend>

			<!-- Company Details -->
			<div class="control-group">
				<label class="control-label" for="company">Company</label>
				<div class="controls">
					<select>
						<option>Accenture</option>
						<option>IBM</option>
						<option>CISCO</option>
						<option>TCS</option>
						<option>FORD</option>
					</select>
				</div>
			</div>

			<!-- City Details -->
			<div class="control-group">
				<label class="control-label" for="city">City</label>
				<div class="controls">
					<select>
						<option>Jaipur</option>
						<option>Delhi</option>
						<option>Noida</option>
						<option>Banglore</option>
						<option>Hyderabad</option>
					</select>
				</div>
			</div>

<!-- Building Details -->
			<div class="control-group">
				<label class="control-label" for="buildingLocation">Building Location</label>
				<div class="controls">
					<select>
						<option>Udyog Vihar</option>
						<option>DLF Cyber City</option>
						<option>InfoPark</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					
					<button type="submit" class="btn"><i class="icon-road"></i> Find a Car</button>
				</div>
			</div>
		</fieldset>
	</form>

	<!-- search form ends here -->

</div>

<!-- end of container -->


<?php include("footer.php"); ?>