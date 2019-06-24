<html>
<head>
<title>Upload PhotoForm</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('index.php/Uploadphoto/do_upload');?>

<input type="file" name="userfile"  />

<br /><br />

<input type="submit" value="Upload image" />

</form>

</body>
</html>