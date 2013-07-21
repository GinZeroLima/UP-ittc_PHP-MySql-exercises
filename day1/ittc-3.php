<?Php
$users = Array(
	"Sheila",
	Array("name"=>"Eden", "address"=> "Sucat, Paranaque", "age"=>30),
	"Peter",
	Array("name"=>"Lot", "address"=> "Antipolo, Rizal", "age"=>32),
	Array("name"=>"KC", "address"=> "Bel-Air, Makati", "age"=>12)

);


foreach ($users as $x){
	if(is_array($x)){
		
		foreach($x as $key => $value){
			
			print "The key is <b>$key</b> and the value is <b>$value</b><br />";
		}
	}
	else {
		
		print "$x <br />";
	}
	print "<br />";

}

?>