<?php
// Start session
session_start();


if (!isset($_SESSION['corporate_id'])) {
    header("Location: crp-login.php");
    exit(); // Stop further execution
}

// Continue with your existing code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Your CSS and other head elements -->
</head>
<body>
    <!-- Your HTML content -->
</body>
</html>


<?php


// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/trizen/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:02:52 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malvin Cabs - Rent a Car</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="section-bg">
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
       START USER CANVAS MENU
================================= -->
<div class="user-canvas-container">
    <div class="side-menu-close">
        <i class="la la-times"></i>
    </div><!-- end menu-toggler -->
    <div class="user-canvas-nav">
        <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        Notifications
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false">
                        Messages
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        Account
                    </a>
                </li>
            </ul>
        </div><!-- end section-tab -->
    </div>
    <div class="user-canvas-nav-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                <div class="user-sidebar-item">
                    <div class="notification-item">
                        <div class="list-group drop-reveal-list">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your request has been sent</h3>
                                        <p class="msg-text">2 min ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your account has been created</h3>
                                        <p class="msg-text">1 day ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your account updated</h3>
                                        <p class="msg-text">2 hrs ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your password changed</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your email sent</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your email changed</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                        </div>
                    </div><!-- end notification-item -->
                </div>
            </div>
            <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
                <div class="user-sidebar-item">
                    <div class="notification-item">
                        <div class="list-group drop-reveal-list">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="avatar flex-shrink-0 mr-3">
                                        <img src="images/team8.jpg" alt="">
                                    </div>
                                    <div class="msg-content w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3 class="title pb-1">Steve Wornder</h3>
                                            <span class="msg-text">3 min ago</span>
                                        </div>
                                        <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="avatar flex-shrink-0 mr-3">
                                        <img src="images/team9.jpg" alt="">
                                    </div>
                                    <div class="msg-content w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3 class="title pb-1">Marc Twain</h3>
                                            <span class="msg-text">1 hrs ago</span>
                                        </div>
                                        <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="avatar flex-shrink-0 mr-3">
                                        <img src="images/team10.jpg" alt="">
                                    </div>
                                    <div class="msg-content w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3 class="title pb-1">Enzo Ferrari</h3>
                                            <span class="msg-text">2 hrs ago</span>
                                        </div>
                                        <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="avatar flex-shrink-0 mr-3">
                                        <img src="images/team11.jpg" alt="">
                                    </div>
                                    <div class="msg-content w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3 class="title pb-1">Lucas Swing</h3>
                                            <span class="msg-text">3 hrs ago</span>
                                        </div>
                                        <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                        </div>
                    </div><!-- end notification-item -->
                </div>
            </div>
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                <div class="user-action-wrap user-sidebar-panel">
                    <div class="notification-item">
                        <a href="user-dashboard-profile.html" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                            </div>
                        </a>
                        <div class="list-group drop-reveal-list user-drop-reveal-list">
                            <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My Booking</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-settings.php" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <div class="section-block"></div>
                            <a href="crp-logout.php" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                        </div>
                    </div><!-- end notification-item -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end user-canvas-container -->
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="images/team9.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">Royel travel agency</h4>
                    <span class="author__meta">Welcome to Corporate Panel</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="page-active"><a href="corporate-dashboard.php"><i class="la la-dashboard mr-2"></i>Corporate Dashboard</a></li>
              
                  <li>
                   
                    <a href="corporate-dashboard-employees.php"><i class="la la-list mr-2 text-color-2"></i>Employees</a>
                    
                </li>
                <!-- <li><a href="admin-dashboard-corporate.php"><i class="la la-building mr-2 text-color-2"></i>Corporate</a></li> -->
                <li><a href="corporate-dashboard-settings.php"><i class="la la-user mr-2 text-color-2"></i>My Profile</a></li>
                <!-- <li><a href="admin-cars.php"><i class="la la-car mr-2 text-color-2"></i>Cars</a></li> -->
                <li><a id="logoutLink" href="crp-logout.php"><i class="la la-power-off mr-2 text-color-11"></i>Logout</a></li>

            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
<script>
document.getElementById("logoutLink").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default link behavior
    
    if(confirm("Are you sure you want to logout?")) {
        window.location.href = this.getAttribute("href");
    }
});
</script>

<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-nav dashboard--nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <div class="logo mr-5">
                            <a href="index.html"><img src="images/logo2.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                            <div class="user-menu-open">
                                <i class="la la-user"></i>
                            </div><!-- end user-menu-open -->
                        </div>
                        <div class="dashboard-search-box">
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <input class="form-control" type="text" name="text" placeholder="Search">
                                        <button class="search-btn"><i class="la la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nav-btn ml-auto">
                            <div class="notification-wrap d-flex align-items-center">
                                <div class="notification-item mr-2">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-reveal-toggle-icon" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-bell"></i>
                                            <span class="noti-count">4</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-header drop-reveal-header">
                                                <h6 class="title">You have <strong class="text-black">4</strong> notifications</h6>
                                            </div>
                                            <div class="list-group drop-reveal-list">
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your request has been sent</h3>
                                                            <p class="msg-text">2 min ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your account has been created</h3>
                                                            <p class="msg-text">1 day ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your account updated</h3>
                                                            <p class="msg-text">2 hrs ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your password changed</h3>
                                                            <p class="msg-text">Yesterday</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </div>
                                            <a href="#" class="dropdown-item drop-reveal-btn text-center">View all</a>
                                        </div><!-- end dropdown-menu -->
                                    </div>
                                </div><!-- end notification-item -->
                                <div class="notification-item mr-2">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-reveal-toggle-icon" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-envelope"></i>
                                            <span class="noti-count">4</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-header drop-reveal-header">
                                                <h6 class="title">You have <strong class="text-black">4</strong> messages</h6>
                                            </div>
                                            <div class="list-group drop-reveal-list">
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="avatar flex-shrink-0 mr-3">
                                                            <img src="images/team8.jpg" alt="">
                                                        </div>
                                                        <div class="msg-content w-100">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h3 class="title pb-1">Steve Wornder</h3>
                                                                <span class="msg-text">3 min ago</span>
                                                            </div>
                                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="avatar flex-shrink-0 mr-3">
                                                            <img src="images/team9.jpg" alt="">
                                                        </div>
                                                        <div class="msg-content w-100">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h3 class="title pb-1">Marc Twain</h3>
                                                                <span class="msg-text">1 hrs ago</span>
                                                            </div>
                                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="avatar flex-shrink-0 mr-3">
                                                            <img src="images/team10.jpg" alt="">
                                                        </div>
                                                        <div class="msg-content w-100">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h3 class="title pb-1">Enzo Ferrari</h3>
                                                                <span class="msg-text">2 hrs ago</span>
                                                            </div>
                                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="avatar flex-shrink-0 mr-3">
                                                            <img src="images/team11.jpg" alt="">
                                                        </div>
                                                        <div class="msg-content w-100">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h3 class="title pb-1">Lucas Swing</h3>
                                                                <span class="msg-text">3 hrs ago</span>
                                                            </div>
                                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </div>
                                            <a href="#" class="dropdown-item drop-reveal-btn text-center">View all</a>
                                        </div><!-- end dropdown-menu -->
                                    </div>
                                </div><!-- end notification-item -->
                                <div class="notification-item">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                                <span class="font-size-14 font-weight-bold">Royel Admin</span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                <h6 class="title text-uppercase">Welcome!</h6>
                                            </div>
                                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                <a href="corporate-dashboard-settings.php" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-user mr-2"></i> Edit Profile</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="corporate-dashboard-orders.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>Orders</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-bell mr-2"></i>Messages</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="corporate-dashboard-settings.php" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <div class="section-block"></div>
                                                <a href="index.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </div>
                                        </div><!-- end dropdown-menu -->
                                    </div>
                                </div><!-- end notification-item -->
                            </div>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-nav -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Corporate Dashboard</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Pages</li>
                                <li>Dashboard</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row mt-4">
                <div class="col-lg-3 responsive-column-l">
    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
        <div class="d-flex pb-3 justify-content-between">
            <div class="info-content">
                <p class="info__desc">Total Booking!</p>
                <?php
                // Assuming you have a database connection
           

               
                // Query to get the total count of bookings
                $query = "SELECT COUNT(*) AS total_bookings FROM bookings";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $totalBookings = $row['total_bookings'];

                    // Output the total bookings dynamically
                    echo '<h4 class="info__title">' . $totalBookings . '</h4>';
                } else {
                    echo "0 results";
                }

                // Close the database connection
            
                ?>
            </div><!-- end info-content -->
            <div class="info-icon icon-element bg-4">
                <i class="la la-shopping-cart"></i>
            </div><!-- end info-icon-->
        </div>
        <div class="section-block"></div>
       
    </div>
</div><!-- end col-lg-3 -->

<div class="col-lg-3 responsive-column-l">
    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
        <div class="d-flex pb-3 justify-content-between">
            <div class="info-content">
                <p class="info__desc">On-Going</p>
                <?php
            

              

                // Query to get the total count of ongoing items
                $query = "SELECT COUNT(*) AS ongoing_count FROM bookings where status='On-going'";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $ongoingCount = $row['ongoing_count'];

                    // Output the ongoing count dynamically
                    echo '<h4 class="info__title">' . $ongoingCount . '</h4>';
                } else {
                    echo "0 results";
                }

                // Close the database connection
              
                ?>
            </div><!-- end info-content -->
            <div class="info-icon icon-element bg-3">
                <i class="la la-star"></i>
            </div><!-- end info-icon-->
        </div>
        <div class="section-block"></div>
        <!-- <a href="admin-dashboard-reviews.html" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a> -->
    </div>
</div><!-- end col-lg-3 -->

<div class="col-lg-3 responsive-column-l">
    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
        <div class="d-flex pb-3 justify-content-between">
            <div class="info-content">
                <p class="info__desc">Cancelled</p>
                <?php
                // Assuming you have a database connection
               
                // Query to get the total count of cancelled items
                $query = "SELECT COUNT(*) AS cancelled_count FROM bookings where status='Cancelled'";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $cancelledCount = $row['cancelled_count'];

                    // Output the cancelled count dynamically
                    echo '<h4 class="info__title">' . $cancelledCount . '</h4>';
                } else {
                    echo "0 results";
                }

              
                ?>
            </div><!-- end info-content -->
            <div class="info-icon icon-element bg-2">
                <i class="la la-envelope"></i>
            </div><!-- end info-icon-->
        </div>
        <div class="section-block"></div>
        <!-- <a href="admin-dashboard-subscribers.html" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a> -->
    </div>
</div><!-- end col-lg-3 -->

                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">New Bookmarks!</p>
                                    <h4 class="info__title">25</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-1">
                                    <i class="la la-bookmark-o"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <!-- <a href="admin-dashboard-wishlist.html" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a> -->
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="title">Booking Results</h3>
                                    <div class="select-contain">
                                        <select class="select-contain-select">
                                            <option value="1">Any Status</option>
                                            <option value="2">Approved</option>
                                            <option value="3">Pending</option>
                                            <option value="4">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content pb-2">
                            <?php
$query = "SELECT * FROM bookings AS b 
INNER JOIN users AS u ON b.email = u.email 
WHERE b.type = 'Corporate User' 
ORDER BY b.booking_date DESC";


$result = $conn->query($query);

// Check for query success
if ($result) {
    // Output data rows
    while ($row = $result->fetch_assoc()) {
        $status = $row["status"];
        $badgeStyle = '';

        if ($status == "Cancelled"|| $status == "Cancelled by Corporate") {
            $badgeStyle = 'style="background-color: #dc3545; color: #fff;"'; // Red color
        } elseif ($status == "On-going" ) {
            $badgeStyle = 'style="background-color: #28a745; color: #fff;"'; // Green color
        } elseif ($status == "pending") {
            $badgeStyle = 'style="background-color: #28a745; color: #fff;"';
        }

        // Output the modified design structure with the additional condition for "On-going" status
        echo '
            <div class="card-item flight-card card-item-list card-item--list">
                <div class="card-img">
                    <img src="images/img15.jpg" alt="destination-img">
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h3 class="card-title">User: ' . $row["username"] . '</h3>
                        
                        <span class="badge ml-2" ' . $badgeStyle . '>' . ucfirst($status) . '</span>
                        
                    </div>
                    <ul class="list-items list-items-2 pt-2 pb-3">
                        <li><span>Pick From:</span>' . $row["pick_location"] . '</li>
                        <li><span>Date:</span>' . $row["pick_date"] . '</li>
                        <li><span>Time:</span>' . $row["pick_time"] . '</li>
                        <li><span>Drop From:</span>' . $row["drop_location"] . '</li>
                    
                    </ul>
                    <div class="btn-box">
                     
                    </div>
                </div>
                <div class="action-btns">
                    ' . ($status == "pending" ?
                        '<a href="#" class="theme-btn theme-btn-small mr-2 approve-btn" data-booking-id="' . $row["booking_id"] . '" onclick="approveBooking(' .  $row["booking_id"] . ')">
                            <i class="la la-check-circle mr-1"></i>Approve
                        </a>
                        <a href="#" class="theme-btn theme-btn-small cancel-btn" data-booking-id="' .  $row["booking_id"] . '" onclick="cancelBooking(' . $row["booking_id"]. ')">
                            <i class="la la-times mr-1"></i>Cancel
                        </a>' : 
                        ($status == "On-going" ? 
                            '<a href="#" class="theme-btn theme-btn-small cancel-btn" data-booking-id="' .  $row["booking_id"] . '" onclick="cancelBooking(' .  $row["booking_id"]. ')">
                                <i class="la la-times mr-1"></i>Cancel
                            </a>' : '')
                    ) . '
                </div>
            </div>';
    }

    // Free result set
    $result->free_result();
}

// Close the database connection
$conn->close();
?>



<script>
function cancelBooking(bookingId) {
    var confirmCancel = confirm('Are you sure you want to cancel this booking?');
    
    // If user confirms, proceed with the cancellation
    if (confirmCancel) {
        // Make an asynchronous request to update the status
        $.ajax({
            type: 'POST',
            url: 'update_booking_status.php',
            data: { booking_id: bookingId, new_status: 'Cancelled by Corporate' },
            success: function(response) {
                // Check if the update was successful
                if (response === 'success') {
                    // Update the UI (optional)
                    location.reload();
                    // You can also update the badge style here if needed
                } else {
                    alert('Failed to update status.');
                }
            },
            error: function() {
                alert('Error occurred during the request.');
            }
        });
    }
}

function approveBooking(bookingId) {
    // Make an asynchronous request to update the status
    $.ajax({
        type: 'POST',
        url: 'update_booking_status.php',
        data: { booking_id: bookingId, new_status: 'On-going' },
        success: function(response) {
            // Check if the update was successful
            if (response === 'success') {
                // Update the UI (optional)
                location.reload();
                // You can also update the badge style here if needed
            } else {
                alert('Failed to update status.');
            }
        },
        error: function() {
            alert('Error occurred during the request.');
        }
    });
}
</script>

                                
                                <!-- <div class="card-item cruise--card card-item-list card-item--list">
                                    <div class="card-img">
                                        <a href="cruise-details.html" class="d-block">
                                            <img src="images/cruise-img6.jpg" alt="cruise-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">7 Nights Caribbean Southern Cruise</h3>
                                            <span class="badge badge-danger ml-2">Canceled</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Start date:</span>12 December 2019</li>
                                            <li><span>End date:</span>12 Jun 2020</li>
                                            <li><span>Booking details:</span> 4 People</li>
                                            <li><span>Client:</span> John Doe</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent" data-toggle="modal" data-target="#modalPopup"><i class="la la-envelope mr-1"></i>Send Message</a>
                                        </div>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="theme-btn theme-btn-small mr-2"><i class="la la-check-circle mr-1"></i>Approve</a>
                                        <a href="#" class="theme-btn theme-btn-small"><i class="la la-times mr-1"></i>Cancel</a>
                                    </div>
                                </div> -->
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                &copy; 2024 © All Rights Reserved. Made with
                                <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                        </div><!-- end copy-right -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="copy-right-content text-right padding-top-30px">
                            <ul class="social-profile">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- end copy-right-content -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/chart.js"></script>
<script src="js/chart.extension.js"></script>
<script src="js/bar-chart.js"></script>
<script src="js/line-chart.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/trizen/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:03:06 GMT -->
</html>