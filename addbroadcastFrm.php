<!DOCTYPE html>
<html lang="en">
<head>
  <title>Broadcasts -Add New Programme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php echo validation_errors(); ?>

<!--<?php //echo form_open('index.php/form');?> -->
<?php echo form_open('index.php/broadcasts'); ?>

<div class="container">
	<div class="well">Adding New Programme

	 	<div class="form-group">
	      <label for="datetime">Programme date:</label>
	      <input type="date" class="form-control" name="datetime" id="datetime"  value="<?php echo set_value('datetime'); ?>">
	    </div>		

	    <div class="form-group">
	      <label for="title">Title:</label>
	      <input type="text" class="form-control" name="title"id="title" value="<?php echo html_escape(set_value('title')); ?>" size='100'>
	    </div>

	    <div class="form-group">
	     	<label for="segment">Segment:</label>
		    <select name="segment" id="segment">
				  <option value="...">..</option>
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
		      <textarea rows='5' cols='100' class="form-control"   name='descrip'> <?php echo html_escape(set_value('descrip')); ?></textarea>
		</div>
		
		<div class="form-group">
		      <label for="guests">Guests:</label>
		      <input type='text' name= 'guests'class="form-control"   value='<?php echo set_value('guests'); ?>' >
		</div>
	
	    <div class="form-group">
	      <label for="hosts"> Hosts:</label>
	      <input type="text" class="form-control" id="hosts" name="hosts" value="<?php echo set_value('hosts'); ?>" >
	    </div>

  		<div class="form-group">
	      <label for="url"> Programme link:</label>
	      <input type="text" class="form-control" id="url" name="url" value="<?php echo set_value('url'); ?>">

		  <div>
		  <iframe src="http://[::1]/projects/test/index.php/audioupload"  width="270" height="100" style="border:none;">
				<!--iframe src="http://[::1]/projects/test/index.php/uploadphoto" width="200" height="200" frameborder="0"-->
					<p>Your browser does not support iframes.</p>
			</iframe>		  
		  </div>

	    </div>

	 	<div class="form-group">
	      <label for="youtubeurl"> YouTube link:</label>
		  <br><textarea rows='1' cols='87' name='youtubeurl'><?php echo set_value('youtubeurl'); ?></textarea>
	    </div>

	 	<!--div class="form-group">
	      <label for="photourl"> Photo link:</label>
			<table>
				<tr>
					<br><textarea rows='1' cols='87' id='photourl' name='photourl'><?php echo set_value('photourl'); ?>
					</textarea>		
				</tr>
				<tr>
				<td>
					<iframe src="http://[::1]/projects/test/index.php/uploadphoto" width="270" height="100" style="border:none;">
					<iframe src="http://[::1]/projects/test/index.php/uploadphoto" width="200" height="200" frameborder="0">
						<p>Your browser does not support iframes.</p>
					</iframe>
				</td>
				<td>
					<textarea rows='1' cols='87' id='photourl' name='photourl'><?php echo set_value('photourl'); ?>
					</textarea>
				</td>	
				</tr>
			</table>			
	    </div-->

		<!--br>YouTube link:<br>
		<textarea rows='1' cols='87' name='youtubeurl'><?php //echo set_value('youtubeurl');?></textarea><br-->

		<br>Photo link:<br>
		<table>
		<tr>
			<textarea rows='1' cols='87' id='photourl' name='photourl'><?php echo set_value('photourl'); ?>
			</textarea>		
		</tr>
		<tr>
			<td>
				<iframe src="http://[::1]/projects/test/index.php/uploadphoto" target="photobox" width="270" height="100" style="border:none;">
				<!--iframe src="http://[::1]/projects/test/index.php/uploadphoto" width="200" height="200" frameborder="0"-->
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
		<textarea rows='1' cols='100' name='slideurl'><?php echo set_value('slideurl'); ?></textarea><br>		
			
		<input type='hidden' name= 'id'   value='<?php echo set_value('id'); ?>'><br>
			
		<div class="container">
    		<button type="submit" id= "save-btn" class="btn btn-success">Confirm SAVE</button>
			<!-- <button type="button" class="btn btn-link"></button> -->
			<button type="submit" id= "cancel-save"class="btn btn-danger">Cancel</button>
		</div>
	
	</form>


</div>


</body>
</html>




