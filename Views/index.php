<?php
require("../Controllers/sellersViewController.php");
session_start();
if(empty($_SESSION['id'])){
header("location:login.php");
}
else if(isset($_GET['out']))
{
	session_destroy();
	header("location:login.php");

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Luxury Motors</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Luxury Motors</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0"></form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <form ><button class="dropdown-item" name="out">Logout</button></form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-light"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="index.php" class="nav-link px-3 active" style="color: black;">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="view.php" class="nav-link px-3 active" style="color: black;">
              <span class="me-2"><i class="bi bi-book"></i></span>
                <span>View</span>
              </a>
            </li>
            <li>
              <a href="finance.php" class="nav-link px-3" style="color: black;">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                <span>Sales</span>
              </a>
            </li>
            <li>
              <a href="inventory.php" class="nav-link px-3" style="color: black;">
                <span class="me-2"><i class="bi bi-cart-check-fill"></i></span>
                <span>Inventory</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Welcome Admin</h4>
          </div>
        </div>
       
       
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                 <table>
                  <tr><h3>Services & Maintenance</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Total Service</p>
                            <p class="card-text text-center" style="color: white">50</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">On Progress</p>
                            <p class="card-text text-center" style="color: white">20</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Pending Service</p>
                            <p class="card-text text-center" style="color: white">11</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Completed</p>
                            <p class="card-text text-center" style="color: white">19</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                 </table>
                </div>
                <div class="table-responsive">
                 <table>
                  <tr><h3>Sales Report</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Total Sales</p>
                            <p class="card-text text-center" style="color: white">152</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Available for sell</p>
                            <p class="card-text text-center" style="color: white">78</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                 </table>
                </div>
                <div class="table-responsive">
                <table>
                  <tr><h3>User Details</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Total User</p>
                            <p class="card-text text-center" style="color: white">592</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Priority Customer</p>
                            <p class="card-text text-center" style="color: white">42</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">All time customer</p>
                            <p class="card-text text-center" style="color: white">17</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Deleted Accounts</p>
                            <p class="card-text text-center" style="color: white">197</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                </table>
                </div>
                <div class="table-responsive">
                <table>
                  <tr><h3>User Details</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Available Parts</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Spare parts</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Product stock</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                </table>
                </div>
                <div class="table-responsive">
                 <table>
                  <tr><h3>Finance & Billing</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Transaction History</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Payment History</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Daily sells report</p>
                            <p class="card-text text-center" style="color: white">11</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                 </table>
                </div>
                <div class="table-responsive">
                 <table>
                  <tr><h3>Security & Access Control</h3></tr>
                  <tr>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Staff details</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card bg-dark" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title" style="color: white"></h5>
                            <p class="card-text text-cente" style="color: white">Cmpany Details</p>
                            <p class="card-text text-center" style="color: white">Show More</p>
                            <p class="card-text text-center" style="color: white"></p>
                          </div>
                        </div>
                      </td>
                  </tr>
                 </table>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
