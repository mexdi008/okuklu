<?php
include "header.php";
//If you click on updatenews in the editnews file, the request will come here
if(isset($_POST['updateNews']))
{
    $update = mysqli_query($link,"UPDATE newsbase SET 
    content = '".$_POST['mytextarea']."',title ='".$_POST['title']."'  WHERE id = '".$_POST['id1']."'");

echo'<meta http-equiv="refresh" content="0; URL=seeNews.php">'; exit;                         
}

?>
