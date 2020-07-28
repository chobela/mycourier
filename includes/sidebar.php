 <!-- Main Sidebar Container -->
 <?php 
include('../classes/App.php');
$app = new App();

$config = $app->settings();

?>

  <aside class="main-sidebar sidebar-light-blue elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/curlogo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $config['appname'];?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Chobela Kakumbi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
          <li class="nav-item">
            <a  href="index.php" id="index" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="tasks.php" id="tasks" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>Tasks</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="transit.php" id="transit" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>In Transit</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="parcels.php" id="parcels" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>Parcels</p>
            </a>
          </li>

              <li class="nav-item">
            <a href="feedback.php" id="feedback" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>Feedback</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="appusers.php" id="appusers" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage App Users</p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Payments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview menu-open">
            
              <li class="nav-item">
                <a href="managepay.php" id="managepay" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Payments</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="payhistory.php" id="payhistory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment History</p>
                </a>
              </li>

            
            </ul>
          </li>

      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="transitsettings.php" id="transitsettings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transit Settings</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="systemusers.php" id="systemusers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>System Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="appsettings.php" id="appsettings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Settings</p>
                </a>
              </li>            

            </ul>
          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <script type="text/javascript">
    
    //Get last part of url
    var url = $(location).attr('href'),
    parts = url.split("/"),
    last_part = parts[parts.length-1];

    x = last_part.split('.').slice(0, -1).join('.');


     $('#'+x).addClass('nav-link active');
     $('#'+x).parent('nav-item has-treeview').append('menu-open');
 
    
  </script>