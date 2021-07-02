<?php
// error_reporting(0);
// ob_start();
session_start();

if (isset($_SESSION['ad_id'])) {
} else {
?>
    <Script>
        alert("You Must Login First!!!!!!");
        window.open('index.php', '_self');
    </Script>
<?php
}

include("includes/header.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-indigo-900">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php"><i class="fas fa-tachometer-alt text-gray-50 text-2xl me-3"></i>Dashboard</a>

            <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="fas fa-bars text-4xl text-gray-50"></i>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header bg-indigo-900">
                    <h5 class="offcanvas-title text-gray-50" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="sidebar card mb-4 rounded-none">
                        <ul class="nav flex-column" id="nav_accordion">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php"> Dashboard <i
                                        class="fas fa-tachometer-alt float-end text-gray-50 text-2xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php?content_id=viewAllRegReq"> Requests <i
                                        class="fas fa-user float-end text-gray-50 text-2xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item0" href="#">
                                    Distributer<i class="fas fa-plus-circle float-end text-gray-50 text-2xl"></i></a>
                                <ul id="menu_item0" class="submenu collapse" data-bs-parent="#nav_accordion">
                                    <li><a class="nav-link hover:bg-indigo-700"
                                            href="dashboard.php?content_id=viewApprDist">All Approved Distributer</a>
                                    </li>
                                    <li><a class="nav-link hover:bg-indigo-700"
                                            href="dashboard.php?content_id=viewDisApprDist">All Disapproved Distributer</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#">
                                    Retailer<i class="fas fa-plus-circle float-end text-gray-50 text-2xl"></i></a>
                                <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                                    <li><a class="nav-link hover:bg-indigo-700" href="dashboard.php?content_id=viewApprReta">All Approved Retailer</a></li>
                                    <li><a class="nav-link hover:bg-indigo-700"
                                            href="dashboard.php?content_id=viewDisApprReta">All Disapproved Retailer</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"> Log out <i
                                        class="fas fa-sign-out-alt float-end text-gray-50 text-2xl"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
<?php    
    $cat=isset($_GET['content_id']) ? $_GET['content_id'] : '';
    switch ($cat) {
        case "viewAllRegReq":
            include ("viewAllRegReq.php");
            break;                           
        case "viewApprDist":
            include ("viewApprDist.php");
            break;                           
        case "viewDisApprDist":
            include ("viewDisApprDist.php");
            break;                           
        case "viewDistributer":
            include ("viewDistributer.php");
            break;                           
        case "viewApprReta":
            include ("viewApprReta.php");
            break;                           
        case "viewDisApprReta":
            include ("viewDisApprReta.php");
            break;                           
        default:              
        include ("mainPage.php");
        include ("viewAllRegReq.php");
    }        
?>



<?php include("includes/footer.php") ?>