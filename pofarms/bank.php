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
      <li class="nav-item active">
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
            <div class="col-xl-4"></div>
            <?php if(isset($msg)){ ?>
              <div class="col-xl-3">
                <div class="toast" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <strong class="mr-auto">Alert</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    <?php echo $msg; ?>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if(isset($error)){ ?>
              <div class="col-xl-3">
                <div class="toast" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <strong class="mr-auto">Alert</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    <?php echo $error; ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-7">
              <div class="card">
                <div class="card-header">Add Account</div>
                <div class="card-body">
                  <div class="form">
                    <form method="post">
                      <input type="hidden" name="name_idd" value="<?php echo $comp_name; ?>">
                      <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" name="bank" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Account No.</label>
                        <input type="number" name="no" class="form-control" required="">
                      </div>
                      <input type="submit" name="add-acc" value="Add" class="btn btn-secondary">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-7">
              <div class="card">
                <div class="card-header">Add Transaction</div>
                <div class="card-body">
                  <div class="form">
                    <form method="post">
                      <input type="hidden" name="name_idd" value="<?php echo $comp_name; ?>">
                      <div class="form-group">
                        <label>Date of Purchase</label>
                        <div class="input-group date">
                          <input type="text" name="date" class="form-control" required="" id="datepicker">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Account</label>
                        <select name="no" class="form-control">
                          <option></option>
                          <?php
                          $query = "SELECT * FROM `bank_acc` WHERE name_idd = '$comp_name' ORDER BY id DESC";
                          $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                          while($row = $fetch->fetch_assoc()){ ?>
                            <option><?php echo $row['no']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label>Transaction type</label>
                            <select name="type" class="form-control">
                              <option></option>
                              <option>Deposit</option>
                              <option>Withdraw</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Comments</label>
                        <textarea name="comments" class="form-control"></textarea>
                      </div>
                      <input type="submit" name="add-bank-balance" value="Add" class="btn btn-secondary">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-7">
              <div class="card">
                <div class="card-header">Balance Records</div>
                <div class="card-body">
                  <select name="client" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    <option></option>
                    <?php
                    $query = "SELECT * FROM `bank_bal` WHERE name_idd = '$comp_name' GROUP BY no";
                    $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    while($row = $fetch->fetch_assoc()){ ?>
                      <option value="bank.php?acc_no=<?php echo $row['no']; ?>"><?php echo $row['no']; ?></option>
                    <?php } ?>
                  </select>
                  <br>

                  <?php

                  if (isset($_GET['acc_no'])) {
                    $number = $_GET['acc_no'];?>

                    <?php
                    $query = "SELECT * FROM `bank_bal` WHERE no = '$number' AND type ='Withdraw'";
                    $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    $wit = 0;
                    while($row = $fetch->fetch_assoc()){ 
                      $wit += $row['amount'];
                    }?>
                    <?php
                    $query = "SELECT * FROM `bank_bal` WHERE no = '$number' AND type ='Deposit'";
                    $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    $dep = 0;
                    while($row = $fetch->fetch_assoc()){ 
                      $dep += $row['amount'];
                    }?>
                    <p>Bank name: <?php 
                    $query = "SELECT * FROM `bank_acc` WHERE no = '$number'";
                    $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    $row = $fetch->fetch_assoc();
                    echo $row['bank'];
                    ?></p>
                    <p><?php echo "Account No. ".$number; ?></p>
                    <p>Balance: K <?php echo $balance = $dep-$wit; ?></p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div class="row">
            <div class="col-xl-12 col-lg-7">
              <div class="card">
                <div class="card-header">Expense records</div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="chicken" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Account No.</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Comments</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM `bank_bal` WHERE name_idd = '$comp_name'";
                        $fetch = $mysqli->query($query) or die($mysqli->error.__LINE__);
                        while($row = $fetch->fetch_assoc()){ ?>
                          <tr>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td>K <?php echo $row['amount']; ?></td>
                            <td><?php echo $row['comments']; ?></td>
                            <td>
                              <a href="database/delete.php?delete_bank_bal=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
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
  <script>
    $(document).ready( function () {
      $('.datepicker1').datepicker();
    } );
  </script>
</body>
</html>
