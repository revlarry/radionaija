<html>
	<body onload="myFunction()">
	<!--h3>Your audio clip was successfully uploaded!</h3-->
	<?php 
        $link = $linkpath.$upload_data['file_name'];
        //$link = "uploads/images/".$upload_data['file_name'];

    ?>

	<script>
	function myFunction() {
		parent.document.getElementById("url").value = '<?php echo $link; ?>';
	}
	</script>

	</body>
</html>