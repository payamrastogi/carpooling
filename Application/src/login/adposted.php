<?php 
include("header.php");
include("menu.php"); 
?>
<div class="container well">
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
  <form class="form-horizontal" action="postAd_insert.php" method="POST">
    <fieldset>

      <!-- Form Name -->
      <legend>Post Ad</legend>

      <!-- Multiple Radios -->
      <div class="control-group">
        <label class="control-label">Car Pooling</label>
        <div class="controls">
          <label class="radio">
            <input type="radio" name="adStatus" value="1"  readonly="true" disabled="true">
            Wanted
          </label>
          <label class="radio">
            <input type="radio" name="adStatus" value="2" checked="checked" readonly="true" disabled="true">
            Available
          </label>
        </div>
      </div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label">Company Name</label>
  <div class="controls">
    <input id="company" name="company" type="text" placeholder="Accenture" class="input-xlarge"  readonly="true">
  </div>
</div>


      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Location From</label>
        <div class="controls">
          <input id="locFrom" name="locFrom" type="text" placeholder="Sector 128, Noida" class="input-xlarge" required="" readonly="true">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Location To</label>
        <div class="controls">
          <input id="locTo" name="locTo" type="text" placeholder="DLF Cybercity, Gurgaon" class="input-xlarge" required="" readonly="true">

        </div>
      </div>


<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Frequency</label>
  <div class="controls">
    <select id="selectbasic" name="frequency" class="input-xlarge" disabled="true">
      <option value="1" selected="">One Time</option>
      <option value="5">Weekdays</option>
      <option value="2">Weekends</option>
      <option value="30">Daily</option>
    </select>
  </div>
</div>


      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Car Model</label>
        <div class="controls">
          <input id="carModel" name="carModel" type="text" placeholder="Swift" class="input-xlarge" required="" readonly="true">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">No. of Seats</label>
        <div class="controls">
          <input id="noOfSeats" name="noOfSeats" type="text" placeholder="4" class="input-xlarge" required="" readonly="true">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Start Time</label>
        <div class="controls">
          <input id="startTime" name="startTime" type="text" placeholder="15/09/2013" class="input-xlarge" required="" readonly="true">
           <div class="input-append">
            <input type="text" value="09:00" class="timepicker" readonly="true" disabled="true"/>
            <span class="add-on"><i class="icon-time"></i></span>
        </div>
        </div>
      </div>
	  <script>
	$('.timepicker').timepicker();
</script>
      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Return Time</label>
        <div class="controls">
          <input id="returnTime" name="returnTime" type="text" placeholder="15/09/2013 06:00 PM" class="input-xlarge" required="" readonly="true">

        </div>
      </div>

      <!-- Textarea -->
      <div class="control-group">
        <label class="control-label">Other Feature</label>
        <div class="controls">                     
          <textarea id="features" name="features" readonly="true">AC available, cost: Rs 400 per person</textarea>
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="control-group">
        <label class="control-label">Multiple Radios</label>
        <div class="controls">
          <label class="radio">
            <input type="radio" name="oneTwoWay" value="1" disabled="true">
            One Way
          </label>
          <label class="radio">
            <input type="radio" name="oneTwoWay" value="2" checked="checked" disabled="true">
            Two Way
          </label>
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <button id="edit" name="edit" class="btn btn-primary">Edit</button>
		  <button id="delete" name="delete" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
	
<?php include("footer.php"); ?>