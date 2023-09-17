<?php

require_once ("names.php");


session_start();

if(!isset($_SESSION["email"])){
  header("Location:../login.php?msg=please login");
}

include_once'./scripts/conn.php';

include_once'./scripts/funct.php';

$email = $_SESSION['email'];


$totalDeposit = get_total($conn, "deposit", "approved");

$totalWithdrawal = get_total($conn, "withdraw", "approved");

$currentBalance = getDetails("users", $conn,$email)['balance'];
$referalid = getDetails("users", $conn,$email)['invitecode'];





$package = getDetails("users", $conn,$email)['package'];

$investedAmount = getDetails("users", $conn,$email)['investedAmount'];

$profit = getDetails("users", $conn,$email)['profit'];
$bonus = getDetails("users", $conn,$email)['bonus'];

$rio = "Nill";

 $new_balance =  (($profit + $bonus + $totalDeposit) - (abs($investedAmount-$totalWithdrawal)));
 
 if($new_balance < 0){
     $new_balance = 0;
 }
 
 


update_balance_by_email($email,$new_balance , $conn);

switch ($package) {
	case "basic":
		$rio = "7 % wekkly";
		break;


	case "advance":
		$rio = "10 % weekly";
		break;

	case "premium":
		$rio = "12 % weekly";
		break;

	case "vip":
		$rio = "10 % Bi weekly";
		break;
		
	case "gold":
		$rio = "10 % Bi-weekly";
		break;
		
	case "platinium":
		$rio = "7 % Bi-weekly";
		break;
	default:
		$rio = "Nill";
		break;
}

$FullName = getDetails("users", $conn,$email)['fname'];

$profilePic;





?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crypto Harbor Capital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link m-2 text-primary display-5" data-toggle="dropdown" href="#">
          Contact Suppot
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <form method="POST" action="./send_email.php" class="form p-3 m-2 bg-secondary">
  <div class="form-group">
    <label class="form-label">NAME</label>
    <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group">
    <label class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control">
  </div>

  <div class="form-group">
    <label class="form-label">Message</label>
    <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" value="Send" class="btn btn-sm btn-outline-light">
  </div>
</form>


        </div>
          
      </li>
      <!-- Notifications Dropdown Menu -->
      
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link bg-light">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $companyName ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-primary text-light">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $profilePic ?? 'dist/img/avatar5.png' ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $FullName ?? "jon doe" ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2 >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item menu-open">
            <a href="./index.php" class="nav-link active text-white bg-warning" >
              
              <p>
                Home
                
              </p>
            </a>

          </li>
          <li class="nav-item">
              <a href="./profile.php" class="nav-link text-white ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Investment
               
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link text-white ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Transactions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./transactions.php" class="nav-link text-white ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Transactions</p>
                </a>
              </li>
             
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white ">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="right text-warning">coming soon</i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" disabled class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" disabled class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" disabled class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item">
              <a href="./logout.php" class="nav-link text-white ">
              <i class="fa-sharp fa-regular fa-arrow-right-from-arc"></i>
              <p>
                Logout
               
              </p>
            </a>
            
          </li>
         
       
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


 