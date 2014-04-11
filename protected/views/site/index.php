<style>
#container {
	width:300px;
	padding:25px;
	border:1px solid #d3d3d3;
	background:#fafafa;
	margin-bottom:25px;
	margin-top:25px;
	margin-left:25px;
	float:left;
}
</style>
<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name;

?>


<p>This is a brief, barebones demonstration of adding vendors.</p>


<ul>
	<?php

$link = mysqli_connect("localhost","root","happy1231","hemp") or die("Error " . mysqli_error($link));

$query = "SELECT * FROM vendors" or die("Error in the consult.." . mysqli_error($link));

$result = $link->query($query);


while($row = mysqli_fetch_array($result)) {

	$vars = array(
		"<div id=\"container\"><b>Company Name:</b> " . $row["vendor_name"] . "<br/>", 
		"<b>Company Phone:</b> " . $row["phone"] . "<br/>",
		"<b>Company Address:</b> " . $row["address"] . "<br/>",
		"<b>Company City/State/Zip:</b> " . 
		$row["city"] . ", ",
		$row["state"] . " ",
		$row["zip"] . "<br/><br/>",
		"<b>Company Description:</b><br/>" . $row["description"] . "<br/><br/></div>"
	);
	
	foreach ($vars as $var){
		echo $var;
	}
 

} 
?>