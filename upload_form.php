<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('index.php/upload/do_upload');?>

<!-- First name<input type="text" name = "firstname"><br>
Last name<input type="text" name ="lastname" ><br> -->
<input type="file" name="userfile"  />


<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>