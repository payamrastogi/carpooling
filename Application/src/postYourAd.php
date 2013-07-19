<link rel="stylesheet" href="./css/bootstrap.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#" name="top">Brand Name</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="#"><i class="icon-home"></i> Home</a></li>
					<li class="divider-vertical"></li>
					<li class="active"><a href="#"><i class="icon-file"></i> Pages</a></li>
				</ul>
				<ul class="nav pull-right">
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Payam Rastogi <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form method="post" action="login" accept-charset="UTF-8">
                                <input class="btn btn-primary btn-block" type="button" id="Profile" value="Profile">
								<input class="btn btn-primary btn-block" type="button" id="ManageAds" value="Manage Ads">
							</form>
						</div>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Text</legend>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">From</label>
  <div class="controls">
    <select id="FromSelect" name="FromSelect" class="input-xlarge">
      <option>Select City...</option>
      <option>Chandigarh</option>
      <option>Bangalore (Bangaluru)</option>
      <option>Gurgaon</option>
      <option>Hyderabad</option>
      <option>Mumbai</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">To</label>
  <div class="controls">
    <select id="ToSelect" name="ToSelect" class="input-xlarge">
      <option>To City...</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Company/College</label>
  <div class="controls">
    <select id="CompanySelect" name="CompanySelect" class="input-xlarge">
      <option>Accenture</option>
      <option>IBM</option>
      <option>Cisco</option>
      <option>Deloitte</option>
      <option>Tata Consultancy Services Ltd.</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <input id="DateInput" name="DateInput" type="text" placeholder="Date" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Vehicle Registration Number</label>
  <div class="controls">
    <input id="VehicleRegistrationInput" name="VehicleRegistrationInput" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Vehicle Detail</label>
  <div class="controls">
    <input id="VehicleModelnput" name="VehicleModelnput" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">No. of Seats</label>
  <div class="controls">
    <input id="SeatDetailsInput" name="SeatDetailsInput" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button id="PostAdButton" name="PostAdButton" class="btn btn-primary">Post Ad</button>
  </div>
</div>

</fieldset>
</form>
