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
  <script type="text/javascript">
  
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: new google.maps.LatLng(-15.419620, 28.283150),
    mapTypeId: google.maps.MapTypeId.ROADMAP,

  });
}

</script>
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
            <h1 class="m-0 text-dark">In Transit</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


<div class="row">
    <div class="col-12">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">Live View</h4>
                
                   <div class="card-body">

                    <div id="map">
                      

                    </div>


                   </div>
            </div>
    </div>
</div>
</div>


     
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Goods in Transit</h4>
                
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                  <tr>
                    <th>Parcel</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Status</th>
             
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
       
                  
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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

<?php include('includes/footer.php')?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php include ('scripts.html')?>
<script>
$(document).ready(function() {
    $('#example2').DataTable( {
        bSort:false,
        bFilter: true, 
        filter: true,
        scrollX : true,
        bInfo: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        pageLength : 10,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
    } );
} );
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgKm8wujh9kaAJe8JaBoSo995t7fANckg&callback=initMap">
    </script>

</body>
</html>
