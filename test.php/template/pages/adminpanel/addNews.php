<?php 
include 'header.php';
include 'addNewsDatabase.php';
// include 'photoUpload.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src='https://cdn.tiny.cloud/1/d8rynpjmbvzq5e3fhvb4v9dr6qvs85q2ez3itulg5axpi60n/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mehdi S. | AdminPanel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php
        include 'navbar.php';
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Enter the news</h4>
                    
                    <form method="post" class="forms-sample" enctype="multipart/form-data" id="imageInputForm">
                      <div class="form-group">
                        <label for="exampleInputName1">Enter the title</label>
                        <input type="text" class="form-control" name="title" autocomplete="off" id="exampleInputName1" placeholder="Enter the title">
                      </div>
                      <div class="form-group">
                          
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
                        <textarea id="mytextarea" autocomplete="off" name="mytextarea" placeholder="Content area"></textarea>
                      </div>
                      <button type="submit" name="enterNews" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <!DOCTYPE html>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         <?php
          include 'footer.php';
         ?>