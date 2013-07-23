<?php include("header.php"); ?>
<?php include("menu.php"); ?>


<div class="container well">
<div class="span5">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label>Username</label>
            <input type="text" placeholder="Your Username" class="input-xlarge">
            <label>First Name</label>
            <input type="text" placeholder="First Name" class="input-xlarge">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" class="input-xlarge">
            <label>Email</label>
            <input type="text" placeholder="name@example.com" class="input-xlarge">
            <label>Address</label>
            <textarea  rows="3" class="input-xlarge">
            </textarea>
            
          	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
    	<form id="tab2">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge">
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>
  </div>
  </div>
  </div>

  <?php include("footer.php"); ?>