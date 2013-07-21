<?php


$student1 = array("name" => "Shiela","exam1" => 90,"exam2"=>80,"exam3"=>85);
$student2 = array("name" => "Peter","exam1" => 80,"exam2"=>95,"exam3"=>85);
$student3 = array("name" => "Konrad","exam1" => 98,"exam2"=>70,"exam3"=>89);
$data = array($student1, $student2, $student3);
$StudentCount = count($data);


//echo "<pre>";
//print_r($data);
//echo "</pre>";


?>

<h3>TOTAL STUDENTS:<?=$StudentCount;?></h3>
<p>
<strong>Exam 1 Results</strong><br />
<?
foreach($data as $datum){
	echo $datum["name"]." - ".$datum['exam1']."<br />";
	
}
?>
</p>

<p>
<strong>Exam 2 Results</strong><br />
<?
foreach($data as $datum){
	echo $datum["name"]." - ".$datum['exam2']."<br />";
	
}
?>
</p>
<p>
<strong>Exam 3 Results</strong><br />
<?
foreach($data as $datum){
	echo $datum["name"]." - ".$datum['exam3']."<br />";
	
}
?>
</p>