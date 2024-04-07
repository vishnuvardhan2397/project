  <?php

  //if(!isset($_SESSION['user'])){
		      //   header("Location:index.php");
	            //  die();
 // }		  
?>
 
 
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
 <a href="<?php $_SERVER['PHP_SELF'];?>" class="brand-link" ><center>
 <img src="https://www.advanceecomsolutions.com/wp-content/themes/aes/assets/images/aes-logo.png" class="img-fluid light-logo" 
 alt width="70" height="30">
      <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <span class="brand-text font-weight-light"></span></center>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="<?php //$_SERVER['PHP_SELF'];//?>" class="d-block">Project Tool</a>
        </div>
      </div>-->
 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="task.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="issue.php" class="nav-link">
              <p>
                Issue
              </p>
            </a>
          </li>
        <li class="nav-item ">
            <a href="#" class="nav-link ">
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="campus.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Campus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> 
		  <li class="nav-item ">
            <a href="#" class="nav-link ">
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="role.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li> 
        </ul>		  
      </nav>		  
    </div>
</aside>

<!-- REQUIRED SCRIPTS -->


