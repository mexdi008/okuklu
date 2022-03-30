<?php



$addressOfPhoto = 'photos/'.basename($_FILES['photo']['name']);
if ($addressOfPhoto!= 'photos/') {
	$typeOfPhoto = strtolower(pathinfo($addressOfPhoto,PATHINFO_EXTENSION));

	if($typeOfPhoto!='jpg' && $typeOfPhoto!='jpeg' && $typeOfPhoto!='png' &&  $typeOfPhoto!='svg')
	{$error = 1; echo'<div class="alert alert-warning" role="alert">Only <b>jpg, jpeg, png, svg</b> file formats are supported</div>';}


	if($_FILES['photo']['size']>10485760)
	{$error = 1; echo'<div class="alert alert-warning" role="alert">file size maximum <b>10 Mb</b> supported</div>';}


	if(!isset($error))
	{
		$addressOfPhoto = 'photos/'.time().'.'.$typeOfPhoto;
		move_uploaded_file($_FILES['foto']['tmp_name'], $addressOfPhoto);
	}
}
?>