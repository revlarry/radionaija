<html>
<head>
<title>My Form</title>
</head>
<body>
<?php
       print_r($_SESSION);
?>
<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('index.php/form', 'Try it again!'); ?></p>

</body>
</html>