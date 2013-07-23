<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div class="container well">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Post Ad</legend>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label">Car Pooling</label>
  <div class="controls">
    <label class="radio">
      <input type="radio" name="radios" value="Wanted" checked="checked">
      Wanted
    </label>
    <label class="radio">
      <input type="radio" name="radios" value="Available">
      Available
    </label>
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
      <input type="radio" name="radioWay" value="One Way" checked="checked">
      One Way
    </label>
    <label class="radio">
      <input type="radio" name="radioWay" value="Two Way">
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


  <?php include("footer.php"); ?>