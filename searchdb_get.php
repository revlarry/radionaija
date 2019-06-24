<?php 

// echo "<h1>Hi there!!!</h1>";
// var_dump($_GET);
// echo $_GET['fname'];
$conn = mysqli_connect('localhost','root','','radionaija');
if(!$conn){
	die("Connection failed - ".mysqli_error());
}

$sql = "select * from broadcasts where title like '%".$_GET['txt']."%' ". "or descrip like '%".$_GET['txt']."%' " . "or guests like '%".$_GET['txt']."%' ". "or hosts like '%".$_GET['txt']."%'";
  //echo $sql."<br>";
 // die;
$results = mysqli_query($conn,$sql);
// var_dump($results);

if (!$results){
	die("Query failed - ".mysql_error());
}

echo "<h3>Found ".mysqli_num_rows($results)." records </h3>";
while($row=mysqli_fetch_assoc($results)){
echo $row['title']."<br>";
// echo $row['title'].' '.$row['descrip']."<br>";

}
 ?>


