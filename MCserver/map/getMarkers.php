<?php

require 'db.php';

echo '[';

$query="SELECT * FROM `mcstuff`.`mappoints`;";
$queryresult=mysqli_query($conn,$query);
if($queryresult) {for($i=0; $i<$queryresult->num_rows; $i++) {
	$row=mysqli_fetch_row($queryresult);
	if($i>0) {
		echo ',';
	}
	echo '{"id":'.$row[0].',"user":"'.$row[1].'","name":"'.str_replace('"','\\"',$row[2]).'","desc":"'.str_replace('"','\\"',$row[3]).'","x":'.$row[4].',"z":'.$row[5].'}';
}}

echo ']';

?>
