<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Broadcast record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php echo validation_errors(); ?>

<?php
    date_default_timezone_set('Europe/Amsterdam');
?>

<!--<?php //echo form_open('index.php/form');?> -->
<?php echo form_open('index.php/broadcasts/save'); ?>
<!-- <?php //echo $data->datetime;?> <br> -->


<div class="container">
	<div class="well">Edit Programme 

	 	<div class="form-group">
	      <label for="datetime">Programme date:</label>
	      <input type="date" class="form-control" name="datetime" id="datetime"  value="<?php echo $data->datetime; ?>">
	    </div>		

	    <div class="form-group">
	      <label for="title">Title:</label>
	      <input type="text" class="form-control" name="title"id="title" value="<?php echo $data->title; ?>" size='100'>
	    </div>

	    <div class="form-group">
	     	<label for="segment">Segment:</label>
		    <select name="segment" id="segment">
                  <option value="<?php echo $data->segment; ?>" selected> <?php echo $segment; ?> </option>
				  <option value="HEA">Health</option>				  
				  <option value="SOC">Social</option>
				  <option value="POL">Political</option>
				  <option value="BUS">BUSINESS</option>
				  <option value="YOU">YOUTH</option>
				  <option value="LEG">LEGAL</option>
				  <option value="EDU">EDUCATIONAL</option>
				  <option value="PAS">PASTORAL</option>
				  <option value="EVE">EVENTS</option>
			</select>
	    </div>

		<div class="form-group">
		      <label for="descrip">Description:</label>
		      <textarea rows='5' cols='100' class="form-control"   name='descrip'> <?php echo $data->descrip; ?></textarea>
		</div>
		
		<div class="form-group">
		      <label for="guests">Guests:</label>
		      <input type='text' name= 'guests'class="form-control"   value='<?php echo $data->guests; ?>' >
		</div>
	
	    <div class="form-group">
	      <label for="hosts"> Hosts:</label>
	      <input type="text" class="form-control" id="hosts" name="hosts" value="<?php echo $data->hosts; ?>" >
	    </div>

  		<div class="form-group">
	      <label for="url"> Programme link:</label>
	      <input type="text" class="form-control" id="url" name="url" value="<?php echo $data->url; ?>">

		  <div>
		  <iframe src="http://[::1]/projects/test/index.php/audioupload"  width="270" height="100" style="border:none;">
				<p>Your browser does not support iframes.</p>
			</iframe>		  
		  </div>

	    </div>

	 	<div class="form-group">
	      <label for="youtubeurl"> YouTube link:</label>
		  <br><textarea rows='1' cols='87' name='youtubeurl'><?php echo $data->youtubeurl; ?></textarea>
	    </div>

		<br>Photo link:<br>
		<table>
		<tr>
			<textarea rows='1' cols='87' id='photourl' name='photourl'><?php echo $data->photourl; ?>
			</textarea>		
		</tr>
		<tr>
			<td>
				<iframe src="http://[::1]/projects/test/index.php/uploadphoto" target="photobox" width="270" height="100" style="border:none;">
					<p>Your browser does not support iframes.</p>
				</iframe>
			</td>
			<td>
				<!-- <iframe name='photobox' width="270" height="100" style="border:none;">
					<p>Your browser does not support iframes.</p>
				</iframe> -->
			</td>
		</tr>
		</table>

		Slide URL<br>:
		<textarea rows='1' cols='100' name='slideurl'><?php echo $data->slideurl; ?></textarea><br>		
			
		<input type='hidden' name= 'id'   value='<?php echo $data->id; ?>'><br>
			
		<div class="container">
    		<button type="submit" id= "save-btn" class="btn btn-success">Confirm SAVE</button>
			<button type="submit" id= "cancel-save"class="btn btn-danger">Cancel</button>
		</div>
	
	</form>


</div>


</body>
</html>




