<?php
include 'database/config.php';
session_start();
if (!isset($_SESSION['email'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard | Poultry Farming Management System</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-black sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon">
          <div class="logo-header"><img src="assets/img/pofarms_white.png"></div>
        </div>
        <div class="sidebar-brand-text mx-3">Pofarms</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="#collapsePurchase" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchase">Purchases</a>
      </li>
      <li id="collapsePurchase" class="nav-item collapse">
        <span class="glyphicon glyphicon-arrow-right"></span><a href="chicken.php" class="nav-link">Chickens Purchase</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li id="collapsePurchase" class="nav-item collapse">
        <a href="feed.php" class="nav-link">Feed Purchase</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li id="collapsePurchase" class="nav-item collapse">
        <a href="medicine.php" class="nav-link">Medicine</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="#collapseSales" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchase">Sales</a>
      </li>
      <li id="collapseSales" class="nav-item collapse">
        <span class="glyphicon glyphicon-arrow-right"></span><a href="sale_chicken.php" class="nav-link">Chickens Sales</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li id="collapseSales" class="nav-item collapse">
        <a href="eggs.php" class="nav-link">Egg Sales</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a href="fcr.php" class="nav-link">FCR Calculation</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="distributor.php" class="nav-link">Distributors</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="client.php" class="nav-link">Clients</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="expense.php" class="nav-link">Expenses</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="bank.php" class="nav-link">Bank Transactions</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="report.php" class="nav-link">Reports</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="users.php" class="nav-link">Users</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="signout.php" class="nav-link">Sign Out</a>
      </li>
      <hr class="sidebar-divider my-0">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="nav-item"><a href="dashboard.php" class="nav-link"><?php echo $_SESSION['name']; ?></a></div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link"><?php echo $_SESSION['type']; ?></a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item">
              <a href="signout.php" class="nav-link">Sign Out</a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div class="card">
                <div class="card-header">Feed Conversion Ratio (FCR)</div>
                <div class="card-body">
                  <div class="form">
                    <form method="post">
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Date of Purchase</label>
                            <div class="input-group date">
                              <input type="text" name="date" class="form-control" required="" id="datepicker">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon"><i class="fas fa-calendar"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Chick Weight/KG</label>
                            <input type="number" name="c_weight" class="form-control" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Available Chicks</label>
                            <input type="number" name="amout" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Feed bags Consumed</label>
                            <input type="number" name="t_bags" class="form-control">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                          <input type="submit" name="cal-fcr" value="Save record" class="btn btn-secondary">
                        </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="separator"></div>
        <div class="row">
          <div class="col-xl-12 col-lg-7">
            <div class="card">
              <div class="card-header">FCR History <span class="float-right"><a href="#" class="btn btn-secondary"><i class="fas fa-print"></i> Print</a></span></div>
              <div class="card-body">
                <div class="responsive-table">
                  <table id="chicken" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Weight/KG</th>
                        <th>Available chicks</th>
                        <th>Feed consumed</th>
                        <th>FCR</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>03/08/2020</td>
                        <td>5</td>
                        <td>1000</td>
                        <td>200</td>
                        <td>5</td>
                        <td>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <div class="logo-footer">
            <img src="assets/img/pofarms_black.png">
            <span>Poultry Farming Management System &copy; 2020</span>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
  $('#datepicker').datepicker({
    weekStart: 1,
    daysOfWeekHighlighted: "6,0",
    autoclose: true,
    todayHighlight: true,
  });
</script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('.toast').toast('show');
  });
</script>
<script>
  $(document).ready( function () {
    $('#chicken').DataTable();
  } );
</script>
<script>
  $(document).ready( function () {
    $('#clients').DataTable();
  } );
</script>
<script>
  $(document).ready( function () {
    $('.datepicker').datepicker();
  } );
</script>
</body>
</html>
