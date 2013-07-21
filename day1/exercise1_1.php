<?php
/*
* Array List of dependents
* below
*/
$mem1dependent1 = array("depname" => "Peter", "Dbday"=>"Jan 1, 1970", "DRelation"=>"Husband");
$mem1dependent2 = array("depname" => "Konrad", "Dbday"=>"Jan 1, 1990", "DRelation"=>"Son");
$mem2dependent1 = array("depname" => "Merle", "Dbday"=>"Feb 1, 1990", "DRelation"=>"Wife");
$mem4dependent1 = array("depname" => "Ramon", "Dbday"=>"Feb 1, 1950", "DRelation"=>"Father");

//$mem5dependent1 = array("depname" => "Testname", "Dbday"=>"sept 1, 1969", "DRelation"=>"brother");

/*
* Array List of employees
* below
*/

$member1 = array("eid"=>100 ,"name" => "Shiela", array($mem1dependent1, $mem1dependent2));
$member2 = array("eid"=>101 ,"name" => "Greg",array($mem2dependent1) );
$member3 = array("eid"=>102 ,"name" => "Eden" );
$member4 = array("eid"=>103 ,"name" => "Jimmy",array($mem4dependent1) );

//$member5 = array("eid"=>109 ,"name" => "Etest",array($mem5dependent1) );

/*
* Below is the main array $data
* to test - pls uncomment $member5 and $mem5dependent1 above and add $member5 to the $data array.
*/
$data = array($member1, $member2, $member3, $member4);

?>


<table border="2">
	<tr>
		<th rowspan="2" valign="top">EID</th>
		<th rowspan="2" valign="top">EName </th>
		<th colspan="3"> Dependent info</th>
	</tr>

	<tr>
		<td> Dep Name</td>
		<td> Dep Bday</td>
		<td> Dep Relation</td>
	</tr>	

<?php

foreach($data as $member){

	echo "<tr>";

	if(is_array($member[0])){
		if(count($member[0])>1 ){$rowspan=count($member[0]);}else {$rowspan=1;};
		}

	echo "<td rowspan = '".$rowspan."'>".$member['eid']."</td>";
	echo "<td rowspan = '".$rowspan."'>".$member['name']."</td>";


		if(is_array($member[0])){
			foreach($member[0] as $deps){

				echo  "<td colspan ='1'>".$deps['depname']."</td>";
				echo  "<td colspan ='1'>".$deps['Dbday']."</td>";
				echo  "<td colspan ='1'>".$deps['DRelation']."</td>";
			echo"</tr>";
			}

		}
	echo "</tr>";
}
?>
</table>