<?php
include 'header.php';
          
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mehdi S. | AdminPanel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
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
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">News history</h4>
                    <?php 
                    include 'deleteNews.php';
                      if(!isset($_POST['editNews'])){
                    ?>
                    </p>
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Photo </th>
                            <th> Title </th>
                            <th> Content </th>
                            <th> Edit </th>
                            <th> Delete </th>
                            <th> Date </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                    //$sec = mysqli_query($link,"SELECT title,content FROM newbase ORDER BY populyarliq DESC LIMIT 1");
                    $request = $link->query("SELECT * FROM newsbase ORDER BY id DESC");
                    
                    while($pullNews=mysqli_fetch_array($request))
                {
                  
                    echo'
                          <tr>
                            <td class="py-1">';
                            $photo = explode('|',$pullNews["photo"]);
                            
                            echo'<img src="'.$photo[0].'">';
                            
                            
                            echo'
                            </td>
                            <td> ' . $pullNews["title"] . ' </td>
                            <td>  ' . $pullNews["content"] . '</td>
                            
                            <td>
                            <form method="post"> 
                            <input type="hidden" name="id" value="'.$pullNews['id'].'">
                            <button type="submit" id="'.$pullNews['id'].'" class="btn btn-warning btn-sm edit" name="editNews">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </button>
                            </form>
                             </td>
                            <td>
                            <form method="post"> 
                            <input type="hidden" name="id" value="'.$pullNews['id'].'">
                             <button type="submit"  class="btn btn-danger btn-sm sil" name="deleteNews">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                              <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                            </svg>
                            </button> 
                            </form>
                            </td>
                            <td> ' . $pullNews["addDate"] . ' </td>
                            
                          </tr>
                          ';
                          }
                        }
                        ?>

                        <?php
                        
                          if(isset($_POST['editNews'])){

                            include 'editNews.php';
                          }
                          

                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
            include 'footer.php';
          ?>