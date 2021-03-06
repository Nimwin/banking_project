<?php if(!isset($_SESSION))
{
session_start();
require ('sConn.php');
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>KB-Transfer</title>
        <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">
        
        <style>
        .navbar-brand {
        color: #555;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 26px;
        }
        .navbar-brand b {
        font-weight: bold;
        color: orange;
        font-size: 20px;
        
        }
        </style>
    </head>
    <body>
        <div id="main-wrapper">
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        
                        <a class="navbar-brand" href="index2.php">
                            <b class="logo-icon p-l-10">
                            </b>
                            <span class="logo-text">
                                <a class="navbar-brand" href="#">Keystone<b>Bank</b></a>
                            </span>
                        </a>
                        
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                <?php
                                echo "Welcome, ".$_SESSION['email'];
                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="transactions.php"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="dUpdate"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="cDashboard" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                 <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cDashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="transactions.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Transactions</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="transfers.php" aria-expanded="false"><i class="fas fa-paper-plane"></i><span class="hide-menu">Transfer</span></a></li>
                        <li class="sidebar-item"><a  class="sidebar-link waves-effect waves-dark sidebar-link" href="dUpdate.php" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu"> Edit Account Details </span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Make a Transaction</h4>
                        <div class="ml-auto mx-5"><a href="transactions.php" class="btn btn-outline-info font-weight-bold btn-rounded">
                            <?php
                                $email = $_SESSION['email'];
                                $bal = mysqli_query($con, "select balance from transactions where customer_email = '$email' order by transaction_id desc LIMIT 1");
                                $bal2 = mysqli_fetch_array($bal);
                                $bal3 = $bal2['balance'];
                                echo 'Current Balance: N'.$bal3;
                            ?></a>
                        </div>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="cDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Make a Transaction</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <form class="form-horizontal" action="transact.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Transact</h4>
                                    <center><font color="red">
                                    <h5 id="1">
                                    <?php
                                    if(isset($Mssg)){
                                    echo $Mssg;
                                    }
                                    ?>
                                    </h5>
                                    </font></center>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4 text-right control-label col-form-label">User Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="email" name="email" readonly="readonly" value="<?php
                                            echo $_SESSION['email'];
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4 text-right control-label col-form-label">Withdraw</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="" placeholder="Withdrawal Amount" name="wAmount">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">Deposit</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="" placeholder="Deposit Amount" name="dAmount">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-1 mx-auto">
                                        <button type="submit" id="2" class="btn btn-warning btn-rounded">Transact</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <form class="form-horizontal" action="transfer.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Transfer</h4>
                                    <center><font color="red"><h5 id="3">
                                    <?php
                                    if(isset($tMssg)){
                                    echo $tMssg;
                                    
                                    }
                                    ?>
                                    </h5></font></center>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4 text-right control-label col-form-label">Amount</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="" placeholder="Transfer Amount" name="amount">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-4 text-right control-label col-form-label">Account Number</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="" placeholder="Recepient's Account Number" name="aNumber">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-1 mx-auto">
                                        <button type="submit" id="4" class="btn btn-warning btn-rounded">Transfer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
    /****************************************
    *       Basic Table                   *
    ****************************************/
    $('#zero_config').DataTable();
    </script>
    
</body>
</html>
