<?php
include 'database/config.php';
session_start();
if (!isset($_SESSION['email'])) {
  header("location: index.php");
}
$comp_name = $_SESSION['name'];
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
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
        <a href="chicken.php" class="nav-link"><i class="fas fa-arrow-right"></i> Chickens Purchase</a>
      </li>
      <li id="collapsePurchase" class="nav-item collapse">
        <a href="feed.php" class="nav-link"><i class="fas fa-arrow-right"></i> Feed Purchase</a>
      </li>
      <li id="collapsePurchase" class="nav-item collapse">
        <a href="medicine.php" class="nav-link"><i class="fas fa-arrow-right"></i> Medicine</a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a href="#collapseSales" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchase">Sales</a>
      </li>
      <li id="collapseSales" class="nav-item collapse">
        <a href="sale_chicken.php" class="nav-link"><i class="fas fa-arrow-right"></i> Chickens Sales</a>
      </li>
      <li id="collapseSales" class="nav-item collapse">
        <a href="eggs.php" class="nav-link"><i class="fas fa-arrow-right"></i> Egg Sales</a>
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
        <a href="#collapseReports" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchase">Reports</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/b_balance.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Bank Transactions</a>
      </li>
      <li id="collapsereports" class="nav-item collapse">
        <a href="forms/c_balance.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Client Balance</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/c_purchase.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Chick Purchase</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/c_sale.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Chicken Sales</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/clients.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Clients</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/e_expense.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Expenses</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/e_sale.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Egg Sales</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/f_purchase.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Feed Purchase</a>
      </li>
      <li id="collapseReports" class="nav-item collapse">
        <a href="forms/m_purchase.php" target="blank" class="nav-link"><i class="fas fa-arrow-right"></i> Medicine Purchase</a>
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
      <hr class="my-4">
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
              <div class="toast col-xl-4 col-lg-7" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="mr-auto">Last Recorded</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  <?php
                  $query = "SELECT * FROM `chicken_sale` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $sold = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $sold += $row['no_chickens'];
                  }?>

                  <?php
                  $query = "SELECT * FROM `chick_purchase` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $bought = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $bought += $row['qty'];
                  }?>

                  <?php $available = $bought-$sold; ?>
                  <p>No of Chickens available: <?php echo $available; ?> chickens</p>


                  <?php
                  $query = "SELECT * FROM `egg_sale` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $sold = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $sold += $row['t_trays'];
                  }?>

                  <?php
                  $query = "SELECT * FROM `egg_tray` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $produced = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $produced += $row['tray'];
                  }?>

                  <?php $available_trays = $produced-$sold; ?>
                  <p>No of Egg trays available: <?php echo $available_trays; ?> trays</p>


                  <?php
                  $query = "SELECT * FROM `feed_purchase` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $purchased = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $purchased += $row['qty'];
                  }?>

                  <?php
                  $query = "SELECT * FROM `feed_consumption` WHERE name_idd = '$comp_name'";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $cons = 0;
                  while($row = $fetch->fetch_assoc()){ 
                    $cons += $row['no_bags'];
                  }?>

                  <?php $available_feed = $purchased-$cons; ?>
                  <p>No of bags of feed available: <?php echo $available_feed; ?> bags</p>
                </div>
              </div>

              <div class="toast col-xl-4 col-lg-7" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="mr-auto">Selling Price</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  <?php
                  $query = "SELECT * FROM `chicken_sale` WHERE name_idd = '$comp_name' ORDER BY id DESC";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $row = $fetch->fetch_assoc();
                    $c_price = $row['u_price']; ?>
                  <p>Chicken: K <?php echo $c_price; ?></p>

                  <?php
                  $query = "SELECT * FROM `egg_sale` WHERE name_idd = '$comp_name' ORDER BY id DESC";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $row = $fetch->fetch_assoc();
                    $e_price = $row['u_price']; ?>
                  <p>Tray of eggs: K <?php echo $e_price; ?></p>
                </div>
              </div>

              <div class="toast col-xl-4 col-lg-7" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="mr-auto">Expenses</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  <?php
                  $query = "SELECT * FROM `expense` WHERE name_idd = '$comp_name' ORDER BY type ASC LIMIT 3";
                  $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  while($row = $fetch->fetch_assoc()){ ?>
                    <p><?php echo $row['type'];?></p>
                 <?php }?>
                  
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-6 col-lg-7">
                <div class="card">
                  <div class="card-header">Distributors</div>
                  <div class="card-body">
                    <div class="responsive-table">
                      <table id="distributors" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Supplier</th>
                            <th>Telephone</th>
                            <th>City</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                      $query = "SELECT * FROM `suppliers` WHERE name_idd = '$comp_name' ORDER BY id DESC  LIMIT 5";
                      $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                      while($row = $fetch->fetch_assoc()){ ?>
                          <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['telephone']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-7">
                <div class="card">
                  <div class="card-header">Clients</div>
                  <div class="card-body">
                    <div class="responsive-table">
                      <table id="clients" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Address</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                        $query = "SELECT * FROM `client` WHERE name_idd = '$comp_name' ORDER BY id ASC LIMIT 5";
                        $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                        while($row = $fetch->fetch_assoc()){ ?>
                          <tr>
                            <td><?php echo $row['customer']; ?></td>
                            <td><?php echo $row['telephone']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                          </tr>
                        <?php } ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.toast').toast('show');
      });
    </script>
    <script>
      $(document).ready( function () {
        $('#distributors').DataTable();
      } );
    </script>
    <script>
      $(document).ready( function () {
        $('#clients').DataTable();
      } );
    </script>
  </body>
  </html>
