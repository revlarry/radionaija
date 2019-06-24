<!DOCTYPE html>
<html>
<body>

<!--form action="audioUpload.php" method="GET" enctype="multipart/form-data"-->
<form action="http://localhost/projects/test/application/controllers/catch.php" method="post"  enctype="multipart/form-data">
    Select Audio file to upload:
	<br><input type="file" name="fileToUpload" id="fileToUpload"><br>
   <br> <input type="submit" value="Upload MP3 file" name="submit">
</form>

</body>
</html>
