<script src='https://cdn.tiny.cloud/1/d8rynpjmbvzq5e3fhvb4v9dr6qvs85q2ez3itulg5axpi60n/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>

<?php
    if(isset($_POST['editNews'])){
        $request = $link->query("SELECT * FROM newsbase WHERE id= '".$_POST['id']."' ");
        $pullNews=mysqli_fetch_array($request);
        
        echo'
        <form method ="post" class="forms-sample" enctype="multipart/form-data" id="imageInputForm" action="updateNews.php">
        <input type="hidden" name="id1" value="'.$pullNews['id'].'">
        <div class="form-group">
          <label for="exampleInputName1">Enter the title</label>
          <input type="text" class="form-control" name="title" style="color:white" autocomplete="off" id="exampleInputName1" value="' .$pullNews["title"] .'" placeholder="Enter the title">
        </div>
        <div class="form-group">
                          ';?>
        <script>
            $(document).ready(function() { 
                    $('#imageInputForm').ajaxForm(function() {
                      alert("Uploaded!");
                     }); 
                  });
                  function showImageHereFunc() {
                    $('#showImageHere').html('');
                    var total_file=document.getElementById("uploadImageFile").files.length;
                    for(var i=0;i<total_file;i++) {
                      $('#showImageHere').append("<div class='card col-md-4'><img class='card-img-top' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
                    }
              }
        </script>
        <?php
      echo'
      <!--<label>File upload</label>
      <input type="file" name="img[]" class="file-upload-default">-->
      <input type="file" id="uploadImageFile"  name="uploadImageFile[]" onchange="showImageHereFunc();" multiple/>
      
      <div class="user-image mb-3 text-center">
          <div id="showImageHere">
            <div class="card-group">
              <div class="row">
                <!-- Image preview -->
              </div>
            </div>    
          </div>
        </div>
      
      
      <!--<div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>-->
    </div>
        <div class="form-group">
          <label for="exampleTextarea1">Enter the content of news</label>
          <textarea id="mytextarea" autocomplete="off"  name="mytextarea" >'.$pullNews["content"].' </textarea>
        </div>
        <button type="submit"  class="btn btn-primary mr-2" name="updateNews">Update</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
      
      ';
      
    }
    

   
    


?>