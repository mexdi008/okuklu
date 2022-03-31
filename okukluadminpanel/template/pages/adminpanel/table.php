<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
                          </tr>
                        </thead>
                        <tbody>
                        
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td> Peter Meggik </td>
                            <td> sdfsdfmsklfskfmskldsmfldksmfskmf
                              skmfsmfklskfdsfsdfsdfmsklfskfmskldsmf
                              ldksmfskmfskmfsmfklskfdsfsdfsdfmsklfskfmsk
                              ldsmfldksmfskmfskmfsmfklskfdsfsdfsdfmsklfskfmskldsmfld
                              ksmfskmfskmfsmfklskfdsfsdfsdfmsklfskfmskldsmfldksmfs
                              kmfskmfsmfklskfdsfsdfsdfmsklfskfmskldsmfldksmfskmfskmfsmfkls
                              kfdsfsdfsdfmsklfskfmskldsmfldksmfskmfskmfsmfklskfdsf </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>
                          
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