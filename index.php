
<?php
// Start or resume a session
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Set session values from POST data
  $_SESSION['pick_location'] = $_POST['pick_location'] ?? '';
  $_SESSION['pick_date'] = $_POST['pick_date'] ?? '';
  $_SESSION['pick_time'] = $_POST['pick_time'] ?? '';

  $_SESSION['drop_location'] = $_POST['drop_location'] ?? '';

  header('Location: car-list.php');
exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/trizen/html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:11:16 GMT -->

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="TechyDevs" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Trizen - Travel Booking HTML Template</title>
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
    rel="stylesheet" />

  <!-- Template CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="css/line-awesome.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/daterangepicker.css" />
  <link rel="stylesheet" href="css/animated-headline.css" />
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
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
            START HEADER AREA
================================= -->
  <header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="header-top-content">
              <div class="header-left">
                <ul class="list-items pt-1">
                  <!-- <li>
                    <a href="#"><i class="la la-phone mr-1"></i>(123) 123-456</a>
                  </li>
                  <li>
                    <a href="#"><i class="la la-envelope mr-1"></i>trizen@example.com</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="header-top-content">
              <div class="header-right d-flex align-items-center justify-content-end">
                <div class="header-right-action">
                  <div class="select-contain select--contain w-auto">
                    <select class="select-contain-select">
                      <option data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>
                        Bahasa Indonesia
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>
                        Deutsch
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)' selected>
                        English US
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>
                        English UK
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>
                        Romanian
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-es mr-1"></span> Español'>
                        Español
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>
                        Francais
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>
                        Italiano
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>
                        Polski
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'>
                        Portuguese
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'>
                        Turkish
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'>
                        Russian
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'>
                        Japanese
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'>
                        Mandarin
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'>
                        Mandarin Chinese
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'>
                        Korean
                      </option>
                      <option data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'>
                        Hindi
                      </option>
                    </select>
                  </div>
                </div>
               
                <div class="header-right-action">
                  <a href="crp-login.php" class="theme-btn theme-btn-small">Corporate Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="menu-wrapper">
              <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
              <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
                <div class="menu-toggler">
                  <i class="la la-bars"></i>
                  <i class="la la-times"></i>
                </div>
                <!-- end menu-toggler -->
              </div>
              <!-- end logo -->
              <div class="main-menu-content ml-auto">
                <nav>
                  <ul>
                    <li>
                      <a href="#">Home <i class="la la-angle-down"></i></a>
                      <ul class="dropdown-menu-item">
                        <li><a href="index.html">Home - main</a></li>
                      
                        <li><a href="index4.html">Home - Car</a></li>
                
                 
                        <li><a href="index7.html">Home - City Tour</a></li>
                        <li>
                          <a href="index8.html">Home - Bus
                            <span class="badge bg-2 text-white">New</span></a>
                        </li>
                      </ul>
                    </li>
                   
                    
                    
                     
                    <li>
                      <a href="#">car <i class="la la-angle-down"></i></a>
                      <ul class="dropdown-menu-item">
                        <li><a href="car-grid.html">car grid</a></li>
                        <li><a href="car-list.html">car list</a></li>
                        <li><a href="car-sidebar.html">car sidebar </a></li>
                        <li><a href="car-single.php">car details</a></li>
                        <li><a href="car-booking.html">Car Booking</a></li>
                        <li>
                          <a href="car-search-result.html">Car Search Result</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end main-menu-content -->
              <div class="nav-btn">
                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal"
                  data-target="#signupPopupForm">Sign Up</a>
                <a href="./user-login.php" class="theme-btn theme-btn-small" 
                  data-target="#loginPopupForm">Login</a>
              </div>
              <!-- end nav-btn -->
            </div>
            <!-- end menu-wrapper -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end header-menu-wrapper -->
  </header>
  <!-- ================================
         END HEADER AREA
================================= -->

  <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
  <section class="hero-wrapper hero-wrapper4">
    <div class="hero-box hero-bg-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-content mt-0">
              <div class="section-heading">
                <h2 class="sec__title">
                  Find the Best Cab that <br />
                  Fits Your Needs
                </h2>
                <p class="sec__desc pt-3 font-size-18">
                  Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                </p>
              </div>
            </div>
            <!-- end hero-content -->
            <div class="hero-list-box margin-top-40px">
              <ul class="list-items">
                <li class="d-flex align-items-center">
                  <svg viewBox="-73 0 512 512.15596" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="m1.78125 232.433594c-3.957031 10.554687-.867188 22.460937 7.730469 29.753906 16.289062 16.300781 49.789062 75.144531 66.371093 116.609375 11.316407 28.28125 36.164063 56.039063 55.015626 74.351563 8.113281 7.984374 12.667968 18.898437 12.644531 30.285156v3.121094c0 14.140624 11.460937 25.601562 25.601562 25.601562h136.53125c14.140625 0 25.601563-11.460938 25.601563-25.601562v-26.214844c-.078125-2.167969.746094-4.273438 2.277344-5.808594 31.496093-28.800781 31.855468-76.878906 31.855468-78.910156v-135.089844c.316406-18.273438-13.460937-33.722656-31.648437-35.488281-6.835938-.449219-13.648438 1.171875-19.550781 4.648437v-13.269531c.070312-12.296875-6.515626-23.667969-17.21875-29.726563-10.699219-6.058593-23.839844-5.855468-34.347657.535157-1.09375-11.511719-8.007812-21.660157-18.316406-26.890625-10.3125-5.230469-22.582031-4.820313-32.519531 1.09375v-14.132813c21.179687-12.019531 34.226562-34.527343 34.136718-58.878906 0-37.703125-30.566406-68.265625-68.269531-68.265625s-68.265625 30.5625-68.265625 68.265625c-.089844 24.351563 12.957032 46.859375 34.132813 58.878906v137.386719c.242187 10.074219-1.128907 20.117188-4.0625 29.757812-.914063 2.847657-3.246094 5.019532-6.152344 5.734376-2.734375.691406-5.632813-.070313-7.679687-2.015626-6.664063-6.355468-12.585938-13.449218-17.644532-21.144531-14.808594-22.152343-52.070312-63.53125-75.394531-63.53125-13.101563-.273437-25.152344 7.132813-30.828125 18.945313zm124.695312-164.011719c0-28.277344 22.921876-51.199219 51.199219-51.199219 28.277344 0 51.199219 22.921875 51.199219 51.199219.082031 14.601563-6.136719 28.527344-17.066406 38.214844v-38.214844c0-18.851563-15.28125-34.132813-34.132813-34.132813-18.851562 0-34.132812 15.28125-34.132812 34.132813v38.214844c-10.925781-9.6875-17.148438-23.613281-17.066407-38.214844zm-32.699218 218.070313c5.785156 8.773437 12.550781 16.859374 20.164062 24.105468 6.277344 5.9375 15.15625 8.253906 23.535156 6.136719 8.539063-2.128906 15.394532-8.480469 18.175782-16.828125 3.53125-11.398438 5.207031-23.289062 4.957031-35.21875v-196.265625c0-9.425781 7.640625-17.066406 17.066406-17.066406s17.066407 7.640625 17.066407 17.066406v179.199219c0 4.714844 3.820312 8.535156 8.535156 8.535156 4.710937 0 8.53125-3.820312 8.53125-8.535156v-76.796875c0-9.425781 7.644531-17.066407 17.066406-17.066407 9.425781 0 17.070312 7.640626 17.070312 17.066407v76.796875c0 4.714844 3.820313 8.535156 8.53125 8.535156 4.714844 0 8.535157-3.820312 8.535157-8.535156v-51.199219c0-9.425781 7.640625-17.066406 17.066406-17.066406s17.066406 7.640625 17.066406 17.066406v59.734375c0 4.710938 3.820313 8.53125 8.53125 8.53125 4.714844 0 8.535157-3.820312 8.535157-8.53125v-17.066406c-.011719-4.527344 1.792968-8.871094 5.007812-12.058594 3.519531-3.488281 8.367188-5.296875 13.3125-4.964844 9.21875 1.203125 16.039062 9.171875 15.8125 18.464844v135.089844c0 .417968-.433594 42.667968-26.316406 66.324218-5.058594 4.769532-7.894532 11.441407-7.816406 18.394532v26.214844c0 4.714843-3.820313 8.535156-8.535157 8.535156h-136.53125c-4.714843 0-8.535156-3.820313-8.535156-8.535156v-3.121094c.011719-15.996094-6.414063-31.324219-17.824219-42.53125-14.457031-14.035156-40.3125-41.609375-51.046875-68.453125-17.5625-43.878907-52.308593-104.476563-70.160156-122.328125-4.0625-4.058594-5.421875-7.816406-4.039063-11.160156 3.09375-5.359376 8.882813-8.589844 15.070313-8.40625 11.597656 0 43.042969 28.75 61.167969 55.9375zm0 0" />
                    <path
                      d="m322.742188 367.089844c4.714843 0 8.535156-3.820313 8.535156-8.535156v-51.199219c0-4.710938-3.820313-8.53125-8.535156-8.53125-4.710938 0-8.53125 3.820312-8.53125 8.53125v51.199219c0 4.714843 3.820312 8.535156 8.53125 8.535156zm0 0" />
                    <path
                      d="m314.210938 418.289062c2.261718 0 4.433593-.898437 6.03125-2.5 6.492187-6.007812 10.441406-14.273437 11.035156-23.101562-.007813-4.609375-3.71875-8.355469-8.328125-8.410156-4.660157-.089844-8.539063 3.558594-8.738281 8.214844-.640626 4.332031-2.773438 8.304687-6.035157 11.230468-2.4375 2.441406-3.167969 6.109375-1.847656 9.296875 1.320313 3.191407 4.429687 5.269531 7.882813 5.269531zm0 0" />
                    <path
                      d="m186.210938 478.023438h8.53125c4.714843 0 8.535156-3.820313 8.535156-8.535157 0-4.710937-3.820313-8.53125-8.535156-8.53125h-8.53125c-4.714844 0-8.535157 3.820313-8.535157 8.53125 0 4.714844 3.820313 8.535157 8.535157 8.535157zm0 0" />
                    <path
                      d="m228.875 478.023438h59.734375c4.714844 0 8.535156-3.820313 8.535156-8.535157 0-4.710937-3.820312-8.53125-8.535156-8.53125h-59.734375c-4.710938 0-8.53125 3.820313-8.53125 8.53125 0 4.714844 3.820312 8.535157 8.53125 8.535157zm0 0" />
                    <path
                      d="m109.410156 141.289062c3.40625 0 6.484375-2.019531 7.835938-5.144531 1.351562-3.125.71875-6.753906-1.613282-9.234375-29.566406-31.25-31.171874-79.644531-3.738281-112.785156 2.027344-2.339844 2.628907-5.59375 1.574219-8.503906-1.058594-2.910156-3.609375-5.019532-6.667969-5.511719-3.058593-.492187-6.140625.710937-8.058593 3.144531-32.90625 39.765625-31 97.828125 4.449218 135.347656 1.613282 1.714844 3.863282 2.6875 6.21875 2.6875zm0 0" />
                    <path
                      d="m257.320312 118.683594c2.011719 1.03125 4.355469 1.222656 6.507813.527344 2.15625-.695313 3.945313-2.214844 4.976563-4.230469 18.65625-36.328125 13.859374-80.28125-12.195313-111.726563-1.914063-2.433594-5-3.636718-8.058594-3.144531-3.054687.492187-5.605469 2.601563-6.664062 5.511719-1.058594 2.910156-.457031 6.164062 1.574219 8.503906 21.710937 26.195312 25.707031 62.8125 10.164062 93.074219-2.152344 4.191406-.496094 9.332031 3.695312 11.484375zm0 0" />
                  </svg><span>Free Cancellations</span>
                </li>
                <li class="d-flex align-items-center">
                  <svg viewBox="0 0 52 60" xmlns="http://www.w3.org/2000/svg">
                    <g id="Page-1">
                      <g>
                        <path
                          d="m7 35h14.354l1.454 3.994-.958 2.636c-.1846791.4673778-.550069.8405077-1.0134734 1.0349418-.4634045.1944342-.9856451.1937341-1.4485266-.0019418l-.036-.013h-.012c-4.148-1.5-8.9 1.068-10.59 5.723s.3 9.684 4.439 11.2c4.217 1.529 8.934-1.138 10.6-5.728l2.211-6.08 2.213 6.079c.7681989 2.1829185 2.3025125 4.0128664 4.318 5.15 1.902527 1.1176044 4.2045361 1.3279064 6.2780786.5735392 2.0735426-.7543671 3.7022803-2.3946983 4.4419214-4.4735392 1.6263512-4.4809857-.1945815-9.4831776-4.321-11.87-1.9215394-1.103671-4.2309581-1.3073357-6.316-.557-.5027979.190678-1.0605312.1752254-1.552-.043-.4254396-.193397-.7539361-.5514943-.91-.992l-.958-2.632 1.456-4h14.35c3.8641657-.0044086 6.9955914-3.1358343 7-7v-21c-.0044086-3.86416566-3.1358343-6.99559136-7-7h-38c-3.86416566.00440864-6.99559136 3.13583434-7 7v21c.00440864 3.8641657 3.13583434 6.9955914 7 7zm14.91 18.159c-1.317 3.628-4.924 5.662-8.036 4.532s-4.56-5.014-3.244-8.639 4.924-5.65 8.039-4.522l.029.01h.009c1.000256.3713192 2.1068019.331774 3.078-.11 1.0290335-.4937681 1.7915156-1.4118141 2.088-2.514l1.063 2.921zm8.313-8.722c.9841229.4432548 2.1041716.476716 3.113.093 1.5341656-.5348449 3.2254385-.372658 4.63.444 3.2513925 1.9038395 4.6878268 5.8519339 3.42 9.4-.529854 1.5418683-1.7279644 2.7618075-3.2600156 3.3194113-1.5320513.5576037-3.2340156.3931726-4.6309844-.4474113-1.5898273-.9040881-2.7978395-2.354058-3.4-4.081l-11.974-32.894c-.1813663-.4991128-.156788-1.0498646.0683165-1.5308378.2251045-.4809733.632252-.8526756 1.1316835-1.0331622l1.7 4.667.009.023 7.249 19.917c.3377316.9393347 1.0379691 1.7040487 1.944 2.123zm-2.093-8.361-.391-1.076h.783zm-26.13-29.076c.00330612-2.76005315 2.23994685-4.99669388 5-5h38c2.7600532.00330612 4.9966939 2.23994685 5 5v21c-.0033061 2.7600532-2.2399468 4.9966939-5 5h-17.989l-3.64-10h.629c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1h-1.357l-1.789-4.917c-.0902433-.2497158-.2760945-.4532895-.5165811-.5658418-.2404866-.1125522-.5158625-.1248414-.7654189-.0341582l-.939.342c-2.0755795.7554489-3.1459791 3.0502496-2.391 5.126l4.384 12.049h-13.626c-2.76005315-.0033061-4.99669388-2.2399468-5-5z" />
                        <path
                          d="m8 15h6c1.6568542 0 3-1.3431458 3-3v-4c0-1.65685425-1.3431458-3-3-3h-6c-1.65685425 0-3 1.34314575-3 3v4c0 1.6568542 1.34314575 3 3 3zm-1-3v-1h2v2h-1c-.55228475 0-1-.4477153-1-1zm7 1h-3v-2h4v1c0 .5522847-.4477153 1-1 1zm1-5v1h-4v-2h3c.5522847 0 1 .44771525 1 1zm-7-1h1v2h-2v-1c0-.55228475.44771525-1 1-1z" />
                        <path
                          d="m8 23h6c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1h-6c-.55228475 0-1 .4477153-1 1s.44771525 1 1 1z" />
                        <path
                          d="m28 23h6c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1h-6c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1z" />
                        <path
                          d="m44 21h-6c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h6c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1z" />
                        <path
                          d="m10 27h-2c-.55228475 0-1 .4477153-1 1s.44771525 1 1 1h2c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1z" />
                        <path
                          d="m14 28c0 .5522847.4477153 1 1 1h2c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1h-2c-.5522847 0-1 .4477153-1 1z" />
                        <path
                          d="m37 14c1.1531181-.003719 2.247792-.5079987 3-1.382 1.093225 1.2628661 2.8560646 1.7134762 4.4212104 1.1301323 1.5651459-.5833438 2.6030376-2.0778115 2.6030376-3.7481323 0-1.67032082-1.0378917-3.16478849-2.6030376-3.74813234-1.5651458-.58334385-3.3279854-.13273376-4.4212104 1.13013234-1.2110928-1.38665941-3.2134336-1.76522309-4.8471665-.91640804-1.6337329.84881506-2.4750835 2.70483451-2.0366995 4.49295914.438384 1.7881246 2.0427901 3.0445323 3.883866 3.0414489zm6-6c1.1045695 0 2 .8954305 2 2s-.8954305 2-2 2-2-.8954305-2-2 .8954305-2 2-2zm-6 0c1.1045695 0 2 .8954305 2 2s-.8954305 2-2 2-2-.8954305-2-2 .8954305-2 2-2z" />
                        <path
                          d="m17.98 46.41c-1.925-.7-4.473.59-5.469 3.33-1 2.76.139 5.371 2.049 6.066 2.187.8 4.589-.913 5.468-3.33 1.005-2.761-.139-5.376-2.048-6.066zm.169 5.382c-.447 1.226-1.763 2.551-2.905 2.134s-1.3-2.276-.854-3.5c.457-1.252 1.763-2.551 2.906-2.134s1.304 2.273.853 3.5z" />
                        <path
                          d="m37.44 55.806c1.921-.7 3.047-3.325 2.049-6.066-1-2.762-3.557-4.025-5.468-3.331s-3.048 3.325-2.049 6.067 3.553 4.024 5.468 3.33zm-2.735-7.517c1.15-.418 2.46.913 2.905 2.134s.3 3.086-.854 3.5-2.456-.9-2.905-2.135-.296-3.081.854-3.499z" />
                      </g>
                    </g>
                  </svg><span>No Credit Card Fees</span>
                </li>
                <li class="d-flex align-items-center">
                  <svg version="1.1" id="communication" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M366,396c-5.52,0-10,4.48-10,10c0,5.52,4.48,10,10,10c5.52,0,10-4.48,10-10C376,400.48,371.52,396,366,396z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M390.622,363.663l-47.53-15.84l-17.063-34.127c15.372-15.646,26.045-36.348,29.644-57.941L357.801,243H376
			c16.542,0,30-13.458,30-30v-63C406,67.29,338.71,0,256,0c-82.922,0-150,67.097-150,150v63c0,13.036,8.361,24.152,20,28.28V253
			c0,16.542,13.458,30,30,30h8.782c4.335,9.417,9.946,18.139,16.774,25.974c1.416,1.628,2.893,3.206,4.406,4.741l-17.054,34.108
			l-47.531,15.841C66.112,382.092,26,440.271,26,502c0,5.523,4.477,10,10,10h440c5.522,0,10-4.477,10-10
			C486,440.271,445.889,382.092,390.622,363.663z M386,213c0,5.514-4.486,10-10,10h-15.262c2.542-19.69,4.236-40.643,4.917-61.28
			c0.02-0.582,0.036-1.148,0.054-1.72H386V213z M136,223c-5.514,0-10-4.486-10-10v-53h20.298c0.033,1.043,0.068,2.091,0.107,3.146
			c0.001,0.036,0.003,0.071,0.004,0.107c0,0.003,0,0.006,0,0.009c0.7,20.072,2.372,40.481,4.856,59.737H136V223z M156,263
			c-5.514,0-10-4.486-10-10v-10h8.198l2.128,12.759c0.406,2.425,0.905,4.841,1.482,7.241H156z M146.017,140H126.38
			C131.445,72.979,187.377,20,256,20c68.318,0,124.496,52.972,129.619,120h-19.635c-0.72-55.227-45.693-100-101.033-100h-17.9
			C191.712,40,146.736,84.773,146.017,140z M247.05,60h17.9c44.809,0,81.076,36.651,81.05,81.41c0,3.147-0.025,5.887-0.078,8.38
			c0,0.032-0.001,0.065-0.001,0.098l-12.508-1.787c-33.98-4.852-66.064-20.894-90.342-45.172C241.195,101.054,238.652,100,236,100
			c-26.856,0-52.564,12.236-69.558,32.908C170.63,92.189,205.053,60,247.05,60z M178.54,263c-5.006-16.653-10.734-65.653-12-97.053
			l13.459-17.946c12.361-16.476,31.592-26.713,52.049-27.888c26.917,25.616,61.739,42.532,98.537,47.786l14.722,2.104
			c-0.984,20.885-2.995,41.843-5.876,61.118c-0.001,0.006-0.002,0.013-0.003,0.02c-0.916,6.197-1.638,10.185-3.482,21.324
			c-5.296,31.765-28.998,60.49-60.287,68.313c-12.877,3.215-26.443,3.214-39.313,0c-19.537-4.884-37.451-18.402-49.012-37.778
			h20.386c4.128,11.639,15.243,20,28.28,20h20c16.575,0,30-13.424,30-30c0-16.542-13.458-30-30-30h-20
			c-13.327,0-24.278,8.608-28.297,20H178.54z M235.159,341.016c6.859,1.445,13.852,2.184,20.841,2.184
			c5.471,0,10.943-0.458,16.353-1.346l-17.67,18.687L235.159,341.016z M240.935,375.079l-31.718,33.542
			c-8.732-16.714-16.235-34.109-22.389-51.917l11.911-23.822L240.935,375.079z M311.566,329.494l13.604,27.209
			c-6.164,17.838-13.669,35.239-22.392,51.933l-33.948-33.948L311.566,329.494z M226,273c0-5.521,4.478-10,10-10h20
			c5.514,0,10,4.486,10,10c0,5.522-4.479,10-10,10h-20C230.486,283,226,278.514,226,273z M46.4,492
			c3.963-49.539,36.932-94.567,81.302-109.363l42.094-14.028c7.712,21.325,17.266,42.052,28.463,61.74
			c0.019,0.034,0.037,0.068,0.056,0.101c0,0.001,0.001,0.001,0.001,0.002c8.181,14.389,17.389,28.45,27.372,41.799L237.99,492H46.4z
			 M256,483.086l-13.562-21.773c-0.152-0.244-0.314-0.481-0.486-0.711c-8.098-10.802-15.652-22.099-22.532-33.662l35.663-37.714
			l37.578,37.578c-6.926,11.647-14.506,22.991-22.611,33.796C269.56,461.253,270.255,460.224,256,483.086z M274.01,492
			l12.301-19.748c10.027-13.4,19.301-27.574,27.564-42.132c0.05-0.088,0.097-0.178,0.147-0.266c0.006-0.011,0.012-0.021,0.018-0.032
			c11.055-19.5,20.509-40.047,28.164-61.213l42.093,14.028c44.371,14.796,77.34,59.824,81.303,109.363H274.01z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M435.546,451.531c-6.683-13.377-16.472-25.261-28.309-34.367c-4.378-3.369-10.656-2.55-14.023,1.828
			c-3.368,4.378-2.549,10.656,1.828,14.024c9.454,7.273,17.272,16.766,22.611,27.453c2.473,4.949,8.483,6.941,13.415,4.477
			C436.008,462.478,438.013,456.472,435.546,451.531z" />
                      </g>
                    </g>
                  </svg><span>24/7 Customer Support</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="search-fields-container search-fields-container-shape">
              <div class="search-fields-container-inner">
                <h3 class="title pb-3">Let's Find Your Ideal Car</h3>
                <div class="section-block"></div>
                <div class="contact-form-action pt-3">
                  <form action="index.php" method="post" class="row">
                    <div class="col-lg-12">
                      <div class="input-box">
                        <label class="label-text">From</label>
                        <div class="form-group">
                          <span class="la la-map-marker form-icon"></span>
                          <input class="form-control" type="text" name="pick_location" placeholder="City, airport, station or address" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="input-box">
                        <label class="label-text">To</label>
                        <div class="form-group">
                          <span class="la la-map-marker form-icon"></span>
                          <input class="form-control" type="text" name="drop_location" placeholder="City, airport, station or address" />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-12 -->
                    <div class="col-lg-8 col-sm-7">
                      <div class="input-box">
                        <label class="label-text">Pick-up Date</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input class="date-range form-control" type="date" name="pick_date" />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4 col-sm-5 pl-0">
                      <div class="input-box">
                        <label class="label-text">Time</label>
                        <div class="form-group">
                          <div class="select-contain select-contain-shadow w-auto">
                            <select class="select-contain-select" name="pick_time">
                              <option value="1200AM">12:00AM</option>
                              <option value="1230AM">12:30AM</option>
                              <option value="0100AM">1:00AM</option>
                              <option value="0130AM">1:30AM</option>
                              <option value="0200AM">2:00AM</option>
                              <option value="0230AM">2:30AM</option>
                              <option value="0300AM">3:00AM</option>
                              <option value="0330AM">3:30AM</option>
                              <option value="0400AM">4:00AM</option>
                              <option value="0430AM">4:30AM</option>
                              <option value="0500AM">5:00AM</option>
                              <option value="0530AM">5:30AM</option>
                              <option value="0600AM">6:00AM</option>
                              <option value="0630AM">6:30AM</option>
                              <option value="0700AM">7:00AM</option>
                              <option value="0730AM">7:30AM</option>
                              <option value="0800AM">8:00AM</option>
                              <option value="0830AM">8:30AM</option>
                              <option value="0900AM" selected>9:00AM</option>
                              <option value="0930AM">9:30AM</option>
                              <option value="1000AM">10:00AM</option>
                              <option value="1030AM">10:30AM</option>
                              <option value="1100AM">11:00AM</option>
                              <option value="1130AM">11:30AM</option>
                              <option value="1200PM">12:00PM</option>
                              <option value="1230PM">12:30PM</option>
                              <option value="0100PM">1:00PM</option>
                              <option value="0130PM">1:30PM</option>
                              <option value="0200PM">2:00PM</option>
                              <option value="0230PM">2:30PM</option>
                              <option value="0300PM">3:00PM</option>
                              <option value="0330PM">3:30PM</option>
                              <option value="0400PM">4:00PM</option>
                              <option value="0430PM">4:30PM</option>
                              <option value="0500PM">5:00PM</option>
                              <option value="0530PM">5:30PM</option>
                              <option value="0600PM">6:00PM</option>
                              <option value="0630PM">6:30PM</option>
                              <option value="0700PM">7:00PM</option>
                              <option value="0730PM">7:30PM</option>
                              <option value="0800PM">8:00PM</option>
                              <option value="0830PM">8:30PM</option>
                              <option value="0900PM">9:00PM</option>
                              <option value="0930PM">9:30PM</option>
                              <option value="1000PM">10:00PM</option>
                              <option value="1030PM">10:30PM</option>
                              <option value="1100PM">11:00PM</option>
                              <option value="1130PM">11:30PM</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-8 -->
                    
                </div>
                
                <div class="btn-box pt-3">
                  <button type="submit" class="theme-btn">Explore Cabs</button>
                  
                </div>
              </div>
            </form>
            </div>
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
        <polygon points="100 10 100 0 0 10"></polygon>
      </svg>
    </div>
  </section>
  <!-- end hero-wrapper -->
  <!-- ================================
    END HERO-WRAPPER AREA
================================= -->

  <!-- ================================
    START CAR AREA
================================= -->
  <section class="car-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2 class="sec__title">Trending Used Cars</h2>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="row padding-top-50px">
        <div class="col-lg-12">
          <div class="car-carousel carousel-action">
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img.png" alt="car-img" />
                </a>
                <span class="badge">Bestseller</span>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Compact SUV</p>
                <h3 class="card-title">
                  <a href="car-single.php">Toyota Corolla or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>4</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>1</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$23.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img2.png" alt="car-img" />
                </a>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Standard</p>
                <h3 class="card-title">
                  <a href="car-single.php">Volkswagen Jetta 2 Doors or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>4</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>1</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$33.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img3.png" alt="car-img" />
                </a>
                <span class="badge">featured</span>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Compact Elite</p>
                <h3 class="card-title">
                  <a href="car-single.php">Toyota Yaris or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>4</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>1</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$23.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img4.png" alt="car-img" />
                </a>
                <span class="badge">Bestseller</span>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Fullsize Van</p>
                <h3 class="card-title">
                  <a href="car-single.php">Seat Alhambra or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>6</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>2</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$45.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img5.png" alt="car-img" />
                </a>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Luxury</p>
                <h3 class="card-title">
                  <a href="car-single.php">Mercedes E Class or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>5</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>3</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$58.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item car-card mb-0 border">
              <div class="card-img">
                <a href="car-single.php" class="d-block">
                  <img src="images/car-img6.png" alt="car-img" />
                </a>
                <span class="badge">featured</span>
                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                  title="Add to wishlist">
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <p class="card-meta">Mini</p>
                <h3 class="card-title">
                  <a href="car-single.php">Fiat Fiesta 2 Doors or Similar</a>
                </h3>
                <div class="card-rating">
                  <span class="badge text-white">4.4/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div class="card-attributes">
                  <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger">
                      <i class="la la-users"></i><span>4</span>
                    </li>
                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage">
                      <i class="la la-suitcase"></i><span>1</span>
                    </li>
                  </ul>
                </div>
                <div class="card-price d-flex align-items-center justify-content-between">
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$23.00</span>
                    <span class="price__text">Per day</span>
                  </p>
                  <a href="car-single.php" class="btn-text">See details<i class="la la-angle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end car-carousel -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end car-area -->
  <!-- ================================
    END CAR AREA
================================= -->

  <div class="section-block"></div>

  <!-- ================================
    STAR FUNFACT AREA
================================= -->
  <section class="funfact-area padding-top-100px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2 class="sec__title">
              World's Biggest Online Car Hire Service
            </h2>
            <p class="sec__desc pt-3">
              Why you can find the right car in the right place with us.
            </p>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="counter-box mt-5 pb-2">
        <div class="row">
          <div class="col-lg-3 responsive-column">
            <div class="counter-item d-flex">
              <div class="counter-icon flex-shrink-0">
                <i class="la la-map"></i>
              </div>
              <div class="counter-content">
                <span class="counter" data-from="0" data-to="50000" data-refresh-interval="5">0</span>
                <span class="count-symbol">+</span>
                <p class="counter__title">Locations</p>
              </div>
              <!-- end counter-content -->
            </div>
            <!-- end counter-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="counter-item d-flex">
              <div class="counter-icon flex-shrink-0">
                <i class="la la-globe"></i>
              </div>
              <div class="counter-content">
                <span class="counter" data-from="0" data-to="160" data-refresh-interval="5">0</span>
                <p class="counter__title">Countries</p>
              </div>
              <!-- end counter-content -->
            </div>
            <!-- end counter-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="counter-item d-flex">
              <div class="counter-icon flex-shrink-0">
                <i class="la la-language"></i>
              </div>
              <div class="counter-content">
                <span class="counter" data-from="0" data-to="43" data-refresh-interval="5">0</span>
                <p class="counter__title">Languages Spoken</p>
              </div>
              <!-- end counter-content -->
            </div>
            <!-- end counter-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="counter-item d-flex">
              <div class="counter-icon flex-shrink-0">
                <i class="la la-star"></i>
              </div>
              <div class="counter-content">
                <span class="counter" data-from="0" data-to="3500000" data-refresh-interval="5">0</span>
                <p class="counter__title">Customer Reviews</p>
              </div>
              <!-- end counter-content -->
            </div>
            <!-- end counter-item -->
          </div>
          <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end counter-box -->
    </div>
    <!-- end container -->
  </section>
  <!-- ================================
    END FUNFACT AREA
================================= -->

  <!-- ================================
       START CLIENTLOGO AREA
================================= -->
  <section class="clientlogo-area position-relative section-bg padding-top-140px padding-bottom-150px text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2 class="sec__title">Big Brands, Big Discounts!</h2>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="row padding-top-20px">
        <div class="col-lg-8 mx-auto">
          <div class="client-logo">
            <div class="client-logo-item client-logo-item-2">
              <img src="images/alamo.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
            <div class="client-logo-item client-logo-item-2">
              <img src="images/europcar.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
            <div class="client-logo-item client-logo-item-2">
              <img src="images/hertz.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
            <div class="client-logo-item client-logo-item-2">
              <img src="images/national.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
            <div class="client-logo-item client-logo-item-2">
              <img src="images/thrifty.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
            <div class="client-logo-item client-logo-item-2">
              <img src="images/vologo.png" alt="brand image" />
            </div>
            <!-- end client-logo-item -->
          </div>
          <!-- end client-logo -->
        </div>
        <!-- end col-lg-8 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
      <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
    </svg>
  </section>
  <!-- end clientlogo-area -->
  <!-- ================================
       START CLIENTLOGO AREA
================================= -->

  <!-- ================================
    START DESTINATION AREA
================================= -->
  <section class="destination-area padding-top-50px padding-bottom-70px">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="section-heading">
            <h2 class="sec__title">Top Destinations</h2>
            <p class="sec__desc pt-3">
              Morbi convallis bibendum urna ut viverra Maecenas quis
            </p>
          </div>

          <!-- end section-heading -->
        </div>
        <!-- end col-lg-8 -->
        <div class="col-lg-4">
          <div class="btn-box btn--box text-right">
            <a href="tour-grid.html" class="theme-btn">Discover More <i class="la la-arrow-right ml-1"></i></a>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row padding-top-50px">
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img2.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">California</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img3.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">New York</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img4.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">San Francisco</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img5.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">Los Angeles</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img7.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">Melbourne</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="card-item destination-card destination--card">
            <div class="card-img">
              <img src="images/destination-img8.jpg" alt="destination-img" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="card-title mb-0">
                  <a href="tour-details.html">London</a>
                </h3>
              </div>
              <div>
                <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i
                    class="la la-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end card-item -->
        </div>
        <!-- end col-lg-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end destination-area -->
  <!-- ================================
    END DESTINATION AREA
================================= -->

  <!-- ================================
    START INFO AREA
================================= -->
  <section class="info-area padding-bottom-70px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2 class="sec__title">How does it work?</h2>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="row padding-top-50px">
        <div class="col-lg-4 responsive-column">
          <div class="icon-box icon-layout-3 d-flex">
            <div class="info-icon flex-shrink-0">
              <i class="la la-search-plus"></i>
            </div>
            <!-- end info-icon-->
            <div class="info-content">
              <h4 class="info__title">Find The Car</h4>
              <p class="info__desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                odio
              </p>
              <span class="info__num">1</span>
            </div>
            <!-- end info-content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="icon-box icon-layout-3 d-flex">
            <div class="info-icon flex-shrink-0">
              <i class="la la-mouse-pointer"></i>
            </div>
            <!-- end info-icon-->
            <div class="info-content">
              <h4 class="info__title">Book It</h4>
              <p class="info__desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                odio
              </p>
              <span class="info__num">2</span>
            </div>
            <!-- end info-content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column">
          <div class="icon-box icon-layout-3 d-flex">
            <div class="info-icon flex-shrink-0">
              <i class="la la-check"></i>
            </div>
            <!-- end info-icon-->
            <div class="info-content">
              <h4 class="info__title">Grab And Go</h4>
              <p class="info__desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                odio
              </p>
              <span class="info__num">3</span>
            </div>
            <!-- end info-content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-lg-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end info-area -->
  <!-- ================================
    END INFO AREA
================================= -->

  <!-- ================================
    START FAQ AREA
================================= -->
  <section class="faq-area section-bg section--padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2 class="sec__title">Frequently Asked Questions</h2>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
      <div class="row padding-top-60px">
        <div class="col-lg-7">
          <div class="accordion accordion-item" id="accordionExample">
            <div class="card">
              <div class="card-header" id="faqHeadingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true"
                    aria-controls="faqCollapseOne">
                    <span>What do I need to hire a car?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne"
                data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab accusamus aliquid at, aut cumque cupiditate delectus
                    dignissimos
                  </p>
                  <ul class="list-items py-2">
                    <li>Mus accumsan venenatis hac</li>
                    <li>Curabitur per quis parturient vel ut</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card">
              <div class="card-header" id="faqHeadingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false"
                    aria-controls="faqCollapseTwo">
                    <span>How old do I have to be to rent a car?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card">
              <div class="card-header" id="faqHeadingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false"
                    aria-controls="faqCollapseThree">
                    <span>Can I book a hire car for someone else?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree"
                data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card">
              <div class="card-header" id="faqHeadingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="false"
                    aria-controls="faqCollapseFour">
                    <span>How do I find the cheapest car hire deal?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour"
                data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card">
              <div class="card-header" id="faqHeadingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false"
                    aria-controls="faqCollapseFive">
                    <span>What should I look for when I’m choosing a car?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive"
                data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card">
              <div class="card-header" id="faqHeadingSix">
                <h2 class="mb-0">
                  <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                    data-toggle="collapse" data-target="#faqCollapseSix" aria-expanded="false"
                    aria-controls="faqCollapseSix">
                    <span>Are all fees included in the rental price?</span>
                    <i class="la la-minus"></i>
                    <i class="la la-plus"></i>
                  </button>
                </h2>
              </div>
              <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix" data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words which
                    don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <!-- end card -->
          </div>
          <div class="accordion-help-text pt-2">
            <p class="font-size-14 font-weight-regular">
              Any questions? Just visit our
              <a href="#" class="color-text">Help center</a> or
              <a href="#" class="color-text">Contact Us</a>
            </p>
          </div>
        </div>
        <!-- end col-lg-7 -->
        <div class="col-lg-5">
          <div class="faq-forum pl-4">
            <div class="form-box border">
              <div class="form-title-wrap">
                <h3 class="title">Still have question?</h3>
              </div>
              <!-- form-title-wrap -->
              <div class="form-content">
                <div class="contact-form-action">
                  <form method="post">
                    <div class="input-box">
                      <label class="label-text">Your Name</label>
                      <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control" type="text" name="text" placeholder="Your name" />
                      </div>
                    </div>
                    <div class="input-box">
                      <label class="label-text">Your Email</label>
                      <div class="form-group">
                        <span class="la la-envelope-o form-icon"></span>
                        <input class="form-control" type="email" name="email" placeholder="Email address" />
                      </div>
                    </div>
                    <div class="input-box">
                      <label class="label-text">Message</label>
                      <div class="form-group">
                        <span class="la la-pencil form-icon"></span>
                        <textarea class="message-control form-control" name="message"
                          placeholder="Write message"></textarea>
                      </div>
                    </div>
                    <div class="btn-box">
                      <button type="button" class="theme-btn">
                        Send Message <i class="la la-arrow-right ml-1"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- end contact-form-action -->
              </div>
              <!-- end form-content -->
            </div>
            <!-- end form-box -->
          </div>
          <!-- end faq-forum -->
        </div>
        <!-- end col-lg-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end faq-area -->
  <!-- ================================
    END FAQ AREA
================================= -->

  <!-- ================================
    START CTA AREA
================================= -->
  <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="section-heading">
            <p class="sec__desc text-white-50 pb-1">Get Updates & More</p>
            <h2 class="sec__title font-size-30 text-white">
              Thoughtful thoughts to your inbox
            </h2>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-7 -->
        <div class="col-lg-5">
          <div class="subscriber-box">
            <div class="contact-form-action">
              <form action="#">
                <div class="input-box">
                  <label class="label-text text-white">Enter email address</label>
                  <div class="form-group mb-0">
                    <span class="la la-envelope form-icon"></span>
                    <input class="form-control" type="email" name="email" placeholder="Email address" />
                    <button class="theme-btn theme-btn-small submit-btn" type="submit">
                      Subscribe
                    </button>
                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your
                      information is safe with us.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end section-heading -->
        </div>
        <!-- end col-lg-5 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end cta-area -->
  <!-- ================================
    END CTA AREA
================================= -->

  <!-- ================================
       START FOOTER AREA
================================= -->
  <section class="footer-area bg-white padding-top-90px padding-bottom-30px">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 responsive-column">
          <div class="footer-item">
            <div class="footer-logo padding-bottom-30px">
              <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo" /></a>
            </div>
            <!-- end logo -->
            <p class="footer__desc">
              Morbi convallis bibendum urna ut viverra. Maecenas consequat
            </p>
            <ul class="list-items pt-3">
              <li>
                3015 Grand Ave, Coconut Grove,<br />
                Cerrick Way, FL 12345
              </li>
              <li>+123-456-789</li>
              <li><a href="#">trizen@yourwebsite.com</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column">
          <div class="footer-item">
            <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
              Company
            </h4>
            <ul class="list-items list--items">
              <li><a href="about.html">About us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="blog-grid.html">News</a></li>
              <li><a href="contact.html">Support</a></li>
              <li><a href="#">Advertising</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column">
          <div class="footer-item">
            <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
              Other Services
            </h4>
            <ul class="list-items list--items">
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Trizen.com Rewards</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">List My Hotel</a></li>
              <li><a href="#">All Hotels</a></li>
              <li><a href="#">TV Ads</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column">
          <div class="footer-item">
            <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
              Other Links
            </h4>
            <ul class="list-items list--items">
              <li><a href="#">USA Vacation Packages</a></li>
              <li><a href="#">USA Flights</a></li>
              <li><a href="#">USA Hotels</a></li>
              <li><a href="#">USA Car Hire</a></li>
              <li><a href="#">Create an Account</a></li>
              <li><a href="#">Trizen Reviews</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
      </div>
      <!-- end row -->
      <div class="section-block"></div>
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="copy-right padding-top-30px">
            <p class="copy__desc">
              &copy; Copyright Trizen 2020. Made with
              <span class="la la-heart"></span> by
              <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
            </p>
          </div>
          <!-- end copy-right -->
        </div>
        <!-- end col-lg-7 -->
        <div class="col-lg-5">
          <div class="footer-social-box padding-top-30px text-right">
            <ul class="social-profile">
              <li>
                <a href="#"><i class="lab la-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="lab la-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="lab la-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="lab la-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
          <!-- end copy-right-content -->
        </div>
        <!-- end col-lg-5 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end footer-area -->
  <!-- ================================
       START FOOTER AREA
================================= -->

  <!-- start back-to-top -->
  <div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
  </div>
  <!-- end back-to-top -->

  <!-- end modal-shared -->
  <div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div>
              <h5 class="modal-title title" id="exampleModalLongTitle">
                Sign Up
              </h5>
              <p class="font-size-14">Hello! Welcome Create a New Account</p>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="la la-close"></span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form-action">
              <form method="post">
                <div class="input-box">
                  <label class="label-text">Username</label>
                  <div class="form-group">
                    <span class="la la-user form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type your username" />
                  </div>
                </div>
                <!-- end input-box -->
                <div class="input-box">
                  <label class="label-text">Email Address</label>
                  <div class="form-group">
                    <span class="la la-envelope form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type your email" />
                  </div>
                </div>
                <!-- end input-box -->
                <div class="input-box">
                  <label class="label-text">Password</label>
                  <div class="form-group">
                    <span class="la la-lock form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type password" />
                  </div>
                </div>
                <!-- end input-box -->
                <div class="input-box">
                  <label class="label-text">Repeat Password</label>
                  <div class="form-group">
                    <span class="la la-lock form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type again password" />
                  </div>
                </div>
                <!-- end input-box -->
                <div class="btn-box pt-3 pb-4">
                  <button type="button" class="theme-btn w-100">
                    Register Account
                  </button>
                </div>
                <div class="action-box text-center">
                  <p class="font-size-14">Or Sign up Using</p>
                  <ul class="social-profile py-3">
                    <li>
                      <a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
            <!-- end contact-form-action -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal-popup -->

  <!-- end modal-shared -->
  <div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div>
              <h5 class="modal-title title" id="exampleModalLongTitle2">
                Login
              </h5>
              <p class="font-size-14">Hello! Welcome to your account</p>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="la la-close"></span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form-action">
              <form method="post">
                <div class="input-box">
                  <label class="label-text">Username</label>
                  <div class="form-group">
                    <span class="la la-user form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type your username" />
                  </div>
                </div>
                <!-- end input-box -->
                <div class="input-box">
                  <label class="label-text">Password</label>
                  <div class="form-group mb-2">
                    <span class="la la-lock form-icon"></span>
                    <input class="form-control" type="text" name="text" placeholder="Type your password" />
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="custom-checkbox mb-0">
                      <input type="checkbox" id="rememberchb" />
                      <label for="rememberchb">Remember me</label>
                    </div>
                    <p class="forgot-password">
                      <a href="recover.html">Forgot Password?</a>
                    </p>
                  </div>
                </div>
                <!-- end input-box -->
                <div class="btn-box pt-3 pb-4">
                  <button type="button" class="theme-btn w-100">
                    Login Account
                  </button>
                </div>
                <div class="action-box text-center">
                  <p class="font-size-14">Or Login Using</p>
                  <ul class="social-profile py-3">
                    <li>
                      <a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
            <!-- end contact-form-action -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal-popup -->

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
  <script src="js/jquery.ripples-min.js"></script>
  <script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/trizen/html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 15:11:17 GMT -->

</html>