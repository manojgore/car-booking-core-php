<?php
// Start session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['corporate_id'])) {
    header("Location: corporate-login.php");
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

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/trizen/html/admin-dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:11:01 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
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
                            <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <div class="section-block"></div>
                            <a href="corporate-logout.php" class="list-group-item list-group-item-action">
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
                    <span class="author__meta">Welcome to Admin Panel</span>
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
                       
                        <div class="nav-btn ml-auto">
                            <div class="notification-wrap d-flex align-items-center">

                               
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
                                                <a href="corporate-dashboard-settings.html" class="list-group-item list-group-item-action">
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
                                                <a href="corporate-dashboard-settings.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <div class="section-block"></div>
                                                <a href="corporate-logout.php" class="list-group-item list-group-item-action">
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
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Settings</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->

                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Profile Setting</h3>
                            </div>
                            <div class="form-content">
                                
                                <div class="contact-form-action">
                                <form action="./corporate-profile-update.php" method="post">
    <div class="row">
        <div class="col-lg-6 responsive-column">
            <div class="input-box">
                <label class="label-text">User Name</label>
                <div class="form-group">
                    <span class="la la-user form-icon"></span>
                    <!-- Add name attribute to the input field -->
                    <input class="form-control" type="text" placeholder="Enter your Name" name="user_name">
                </div>
            </div>
        </div><!-- end col-lg-6 -->
        <div class="col-lg-6 responsive-column">
            <div class="input-box">
                <label class="label-text">Email Address</label>
                <div class="form-group">
                    <span class="la la-envelope form-icon"></span>
                    <!-- Add name attribute to the input field -->
                    <input class="form-control" type="text" placeholder="Enter your Email" name="email">
                </div>
            </div>
        </div><!-- end col-lg-6 -->

        <div class="col-lg-12">
            <div class="btn-box">
                <button class="theme-btn" type="submit">Save Changes</button>
            </div>
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->
</form>

                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Change Email</h3>
                            </div>
                            <div class="form-content">
                                <div class="contact-form-action">
                                <form action="./corporate-email-update.php" method="POST">
                    <div class="row">
                        <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                                <label class="label-text">Current Email</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" placeholder="Current email" name="current-email">
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                        <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                                <label class="label-text">New Email</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" placeholder="New email" name="new-email">
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                        <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                                <label class="label-text">New Email Again</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" placeholder="New email again" name="new-email-again">
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                        <div class="col-lg-12">
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">Change Email</button>
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </form>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Change Password</h3>
                            </div>
                            <div class="form-content">
                                <div class="contact-form-action">
                                    <form action="./update-corporate-password.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Current Password</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="Current password" name="current-password">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">New Password</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="New password" name="new-password">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">New Password Again</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" placeholder="New password again" name="new-password-again">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                             <div class="col-lg-12">
                                                 <div class="btn-box">
                                                     <button class="theme-btn" type="submit">Change Password</button>
                                                 </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="border-top mt-4"></div>
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
<script src="js/jquery.multi-file.min.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/trizen/html/admin-dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:11:01 GMT -->
</html>