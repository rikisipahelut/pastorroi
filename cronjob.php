<?php 

$koneksi= new PDO("mysql:host=localhost;dbname=","","");

$result = $koneksi->query('SELECT * FROM kapal');
$data=[];
$i=0;
 while ($row=$result->fetch()) {
 	
 	//echo $row[0]." ".$row[1]." ".$row[2];
 	//echo "<br>";

 	if($row[2]==date("Y-m-d")){
 		
 		
 		$data[$i]=$row[1]."-".$row[2];
 		
 		$data[$i]=explode(" ",$data[$i]);
 		$data[$i]=implode("-",$data[$i]);
 		$i++;
 	}
 	
 } 

 if (!empty($data[0])) {
 	# code...

	$text="Cronpastor-Demmurage-2-hari-lagi-pada-".$data[0]."-".$data[1];
 	
	$url = "https://rest.nexmo.com/sms/json?api_key=b3579928&api_secret=V5RbKZNdITAYaelX&to=6285254084865&from='Vonage+SMS+API'&text=$text";

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);

	// if (!$response) {
	// 	echo "<script>alert('Error')</script>";
	// }else{
	// 	echo "<script>alert('Success')</script>";
	// }
 }


 ?>