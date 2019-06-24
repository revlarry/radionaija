<html>
<head>
<title>Upload Audio Form</title>
</head>
<body>

<?php echo $error; ?>

<?php echo form_open_multipart('index.php/audioupload/do_upload'); ?>

<input type="file" name="userfile"  />

<br /><br />

<input type="submit" value="Upload audio" />

</form>

</body>
</html>