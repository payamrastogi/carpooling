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

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label">Car Pooling</label>
  <div class="controls">
    <label class="radio">
      <input type="radio" name="adstatus" value="Wanted" checked="checked">
      Wanted
    </label>
    <label class="radio">
      <input type="radio" name="adstatus" value="Available">
      Available
    </label>
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

<!-- search results start here -->

<h4>Search Results : </h4>

<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Tompson</td>
          <td>the_mark7</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Ashley</td>
          <td>Jacobs</td>
          <td>ash11927</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Audrey</td>
          <td>Ann</td>
          <td>audann84</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>John</td>
          <td>Robinson</td>
          <td>jr5527</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Aaron</td>
          <td>Butler</td>
          <td>aaron_butler</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Chris</td>
          <td>Albert</td>
          <td>cab79</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
</div>

<div class="pagination aligncenter">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>

<!-- search results ends here -->

</div>

<!-- end of container -->


<?php include("footer.php"); ?>