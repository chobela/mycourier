<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Pareza Courier</title>

  <?php include ('styles.html')?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark">PZC-88753601 (Bag of Rice)</h2>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
     
<div class="row">


<div class="col-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Tracking History</h5>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Status</th>
                      <th>Date</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                    
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>




    <div class="col-6">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">Location</h4>
                
                   <div class="card-body">

                    <div id="map">
                      

                    </div>


                   </div>
            </div>
    </div>
</div>
</div>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include('includes/footer.php')?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php include ('scripts.html')?>
</body>
</html>
