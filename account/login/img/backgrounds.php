<?php

$object = scandir('backgrounds'); 


/*
foreach($object as $key=>$value){
 $response_string += $value+",";
}
*/

/*
for($i = 2; $i<count($object); $i++){
	$response_string += $object[$i];
	if($i != count($object)){
		 $response_string += $object[$i]+",";
	}
}

Thu-17-Mar-2022-05-15-PM
*/





  
echo json_encode($object);

?>