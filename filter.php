<?php
include 'includes/config.php';
if (isset($_POST['submit'])) {
	$_POST['type']=$category;
	$_POST['city']=$location;
$sql ="SELECT * FROM advocatedetails WHERE Expertise=:category and City=:location";
	
}
$query= $dbh -> prepare($sql);
$query-> bindParam(':category', $category, PDO::PARAM_STR);
$query-> bindParam(':location', $location, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
echo $row['AdvocateName'];


?>