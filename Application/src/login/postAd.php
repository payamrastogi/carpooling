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
            <input type="radio" name="adStatus" value="1" checked="checked">
            Wanted
          </label>
          <label class="radio">
            <input type="radio" name="adStatus" value="2">
            Available
          </label>
        </div>
      </div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label">Company Name</label>
  <div class="controls">
    <input id="company" name="company" type="text" placeholder="Company Name" class="input-xlarge">
    
  </div>
</div>


      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Location From</label>
        <div class="controls">
          <input id="locFrom" name="locFrom" type="text" placeholder="Location From" class="input-xlarge" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Location To</label>
        <div class="controls">
          <input id="locTo" name="locTo" type="text" placeholder="Location To" class="input-xlarge" required="">

        </div>
      </div>


<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Frequency</label>
  <div class="controls">
    <select id="selectbasic" name="frequency" class="input-xlarge">
      <option value="1">One Time</option>
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
          <input id="carModel" name="carModel" type="text" placeholder="Car Model" class="input-xlarge" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">No. of Seats</label>
        <div class="controls">
          <input id="noOfSeats" name="noOfSeats" type="text" placeholder="No. of Seats" class="input-xlarge" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Start Time</label>
        <div class="controls">
          <input id="startTime" name="startTime" type="text" placeholder="Start Time" class="input-xlarge" required="">
           <div class="input-append bootstrap-timepicker">
            <input id="timepicker1" type="text" class="input-small">
            <span class="add-on"><i class="icon-time"></i></span>
        </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label">Return Time</label>
        <div class="controls">
          <input id="returnTime" name="returnTime" type="text" placeholder="Return Time" class="input-xlarge" required="">

        </div>
      </div>

      <!-- Textarea -->
      <div class="control-group">
        <label class="control-label">Other Feature</label>
        <div class="controls">                     
          <textarea id="features" name="features"></textarea>
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="control-group">
        <label class="control-label">Multiple Radios</label>
        <div class="controls">
          <label class="radio">
            <input type="radio" name="oneTwoWay" value="1" checked="checked">
            One Way
          </label>
          <label class="radio">
            <input type="radio" name="oneTwoWay" value="2">
            Two Way
          </label>
        </div>
      </div>
      <!-- Button -->
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <button id="submit" name="submit" class="btn btn-primary">Post Ad</button>
        </div>
      </div>

    </fieldset>
  </form>
</div>

        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
<?php include("footer.php"); ?>