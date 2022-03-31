<?php
include "header.php";
//If you click on updatenews in the editnews file, the request will come here
if(isset($_POST['updateNews']))
{
    //FOTO START
    for($i=0;$i<count($_FILES["uploadImageFile"]["name"]);$i++) {
        $uploadfile=$_FILES["uploadImageFile"]["tmp_name"][$i];
        $folder="photo_gallery/";
        move_uploaded_file($_FILES["uploadImageFile"]["tmp_name"][$i], "$folder".$_FILES["uploadImageFile"]["name"][$i]);
        
        if($i==0)
        {$foto = "$folder".$_FILES["uploadImageFile"]["name"][$i];}
        else
        {$foto = "$folder".$_FILES["uploadImageFile"]["name"][$i].'|'.$foto;}
       
        
      }

    $update = mysqli_query($link,"UPDATE newsbase SET 
    content = '".$_POST['mytextarea']."',title ='".$_POST['title']."',photo ='".$foto."'   WHERE id = '".$_POST['id1']."'");

echo'<meta http-equiv="refresh" content="0; URL=seeNews.php">'; exit;                         
}

?>
