<?php

if (isset($_POST['deleteNews']))
{
    $request = $link->query("SELECT * FROM newsbase WHERE id= '".$_POST['id']."' ");
        $pullNews=mysqli_fetch_array($request);
    echo '
    <form method ="post">
    <input type="hidden" name="idDelete" value="'.$pullNews['id'].'">
    <div class="alert alert-warning" role="alert">Are you sure delete news?</div>
    
    <button type="submit"  class="btn btn-danger btn-sm sil" name="sureDeleteNews">Delete</button>';
    echo'<button type="submit" class="btn btn-warning btn-sm sil" name="notSureDeleteNews">    Cancel</button>
    </form>
    ';
}


    if (isset($_POST['sureDeleteNews']))
    {
    $deleteNews = mysqli_query($link,"DELETE FROM newsbase WHERE id= '".$_POST['idDelete']."' ");
    if ($deleteNews == true) 
    {
        echo '<div class="alert alert-success" role="alert">News successfully deleted</div>'; }
    else{
        echo '<div class="alert alert-danger" role="alert">News could not be deleted</div>';	}
    }

?>