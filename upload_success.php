<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<!-- <?php 
// var_dump($_POST);
// var_dump($_FILES);
 ?>
 -->
<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>