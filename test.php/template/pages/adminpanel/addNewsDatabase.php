<?php


if(isset($_POST['enterNews']))
{

        $title = trim($_POST['title']);
    	$title = strip_tags($title);
    	$title = htmlspecialchars($title);
    	$title = mysqli_real_escape_string($link,$title);

    	$mytextarea = trim($_POST['mytextarea']);
    	$mytextarea = mysqli_real_escape_string($link,$mytextarea);

 
if(!empty($_POST['title']) && !empty($_POST['mytextarea']))
{
            
			$checkBase = mysqli_query($link, "SELECT title,content FROM newsbase WHERE title='".$title."' AND content='".$mytextarea."' ");
			$count = mysqli_num_rows($checkBase);
            if ($count==0)
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
                      
                
                      
                //FOTO END

    $newsEnterDatabaseRequest = mysqli_query($link,"INSERT INTO newsbase (title, content, photo,addDate)
    VALUES ('".$title."','".$mytextarea."','".$foto."','".$date."')");
    if ($newsEnterDatabaseRequest==true) 
    {echo '<br><br><br><br><br><div class="alert alert-success" role="alert">News successfully added'.'</div>'; 
    echo'<meta http-equiv="refresh" content="0; URL=seeNews.php">'; exit;
}
    else
    {echo '<br><br><div class="alert alert-danger" role="alert">Error happened </div>'; }
            }
            else{echo'Bu Xeber Artiq bazada var ';echo'<meta http-equiv="refresh" content="0; URL=addNews.php">'; exit;}
}
else{}
}



?>