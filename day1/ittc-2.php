<?php

$user1 = Array("name"=>"Eden", "address"=> "Sucat, Paranaque", "age"=>30);
$user2 = Array("name"=>"Lot", "address"=> "Antipolo, Rizal", "age"=>32);
$user3 = Array("name"=>"KC", "address"=> "Bel-Air, Makati", "age"=>12);


$users = Array(

	Array("name"=>"Eden", "address"=> "Sucat, Paranaque", "age"=>30),
	Array("name"=>"Lot", "address"=> "Antipolo, Rizal", "age"=>32),
	Array("name"=>"KC", "address"=> "Bel-Air, Makati", "age"=>12)

);

print "<pre>"; print_r($user1); print "</pre>";
print_r ($user2);print"<br />";
print_r ($user3);print"<br />";
print $user1["name"];

print "<pre>"; print_r($users); print "</pre>";

?>

<br /><br />

<hr />
<?Php

foreach ($users as $user){
	foreach ($user as $v){
	echo "<pre>";
		print_r($v);
	echo "</pre>";	
	}

}

?>
