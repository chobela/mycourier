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
<body class="hold-transition sidebar-mini text-sm">
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
          
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Payment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
              <div class="card-body">

                <div class="row">

              
                    <div class="col-md-4">
                     <label>Payment method</label>
                      <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Cash</option>
                      <option>Airtel Money</option>
                      <option>MTN Money</option>
                      <option>VISA/Mastercard</option>                        
                     </select>
                    </div>                  
              
                <div class="col-md-4">
                    <label>Tracking ID</label>
                    <input type="text" class="form-control" id="tracking" placeholder="Tracking ID">
                  </div>
                                    
                  <div class="col-md-4">
                    <label>Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                  </div>
              
              </div>
            </div>
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>   



      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include('includes/footer.php')?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php include ('scripts.html')?>
</body>
</html>
