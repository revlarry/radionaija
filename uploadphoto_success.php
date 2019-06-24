<html>
	<body onload="myFunction()">
	<!--h3>Your photo was successfully uploaded!</h3-->
	<?php 
        $link = $linkpath.$upload_data['file_name'];
        //$link = "uploads/images/".$upload_data['file_name'];
        //die($link);

    ?>

	<script>
	function myFunction() {
		parent.document.getElementById("photourl").value = '<?php echo $link; ?>';
	}
	</script>

	</body>
</html>