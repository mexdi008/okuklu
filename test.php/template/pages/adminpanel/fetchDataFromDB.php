<?php

$conn = new mysqli("localhost", "mehdi", "12345", "okukluadminpanel");

if ($conn->connect_error) {

 	die("Connection Error: " . $conn->connect_error);
} 


$sql = "SELECT * FROM newsbase";
 
$result = $conn->query($sql);
 
//Eğer tablo boş ise hata mesajı gönderelim. Boş değilse verileri gösterelim.
if ($result->num_rows >0) {

 	while($row[] = $result->fetch_assoc()) {

 		$tem = $row;
 		$json = json_encode($tem,);
	}

} else {

 	echo "Bulunamadı";
}

echo $json;
$conn->close();
?>