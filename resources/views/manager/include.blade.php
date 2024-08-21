<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UP Manager | @yield('adminTitle') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- font awesome kit setup -->
    <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/staradmin/dist/') }}/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('public/staradmin/dist/') }}/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('public/staradmin/dist/') }}/assets/images/favicon.png" />
    <style type="text/css">
      select.form-select {
        color: #4a4848;
      }
      .sidebar, .navbar .navbar-brand-wrapper, .navbar .navbar-menu-wrapper{
        background: #ffffff;
      }
      .profile thead, tbody, tfoot, tr, td, th {
          border: 0;
      }
      .border-left {
        border-right: 2px dashed #ccc;
      }
      .profile .table th{
        font-size:12px;
      }
    </style>
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="{{ asset('public/staradmin/dist/') }}/assets/images/logo.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="{{ asset('public/staradmin/dist/') }}/assets/images/logo-mini.png" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">শুভ সকাল, <span class="text-black fw-bold">আবু ইউসুফ</span></h1>
              <h3 class="welcome-sub-text">আমাদের ইউ.পি ম্যানেজার অ্যাপে আপনাকে স্বাগতম</h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                    <p class="fw-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                    <p class="fw-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-mail icon-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('public/staradmin/dist/') }}/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('public/staradmin/dist/') }}/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('public/staradmin/dist/') }}/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('public/staradmin/dist/') }}/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('public/staradmin/dist/') }}/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                  <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">ড্যাশবোর্ড</span>
              </a>
            </li>
            <li class="nav-item nav-category">সকল নিবন্ধন</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#incomeTax" aria-expanded="false" aria-controls="incomeTax">
                <i class="menu-icon fa-duotone fa-user-tie"></i>
                <span class="menu-title">সাধারন হোল্ডিং</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="incomeTax">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('newIncomeTaxMember') }}">নতুন সদস্য নিবন্ধন</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('taxMember') }}">সদস্য তালিকা</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">হোল্ডিং প্লেট</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item" id="businessMenu">
              <a class="nav-link" data-bs-toggle="collapse" href="#businessRegister" aria-expanded="false" aria-controls="businessRegister">
                <i class="menu-icon fa-solid fa-files"></i>
                <span class="menu-title">ব্যবসায়ীক হোল্ডিং</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="businessRegister">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('newBusiness') }}">নতুন ব্যবসা নিবন্ধন</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('businessList') }}">ব্যবসা তালিকা</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">ব্যবসায়ীক প্লেট</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tradeLicense" aria-expanded="false" aria-controls="tradeLicense">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">ট্রেড লাইসেন্স</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tradeLicense">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">নতুন নিবন্ধন</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#classRegister" aria-expanded="false" aria-controls="classRegister">
                <i class="menu-icon fa-solid fa-users"></i>
                <span class="menu-title">ওয়ারিশ সনদ</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="classRegister">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#familyCertificate" aria-expanded="false" aria-controls="familyCertificate">
                <i class="menu-icon fa-solid fa-people-roof"></i>
                <span class="menu-title">পারিবারিক সনদ</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="familyCertificate">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">সকল রিপোর্ট</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon fa-regular fa-list-tree"></i>
                <span class="menu-title">সকল প্রত্যয়নপত্র</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">বিবিধ প্রত্যয়নপত্র</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              @yield('adminContent')
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed By <a href="https://sebaautomation.com.bd/" target="_blank">Seba Automation</a></span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © {{ date('Y') }}. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('public/staradmin/dist/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('public/staradmin/dist/') }}/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/template.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/settings.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{ asset('public/staradmin/dist/') }}/assets/js/dashboard.js"></script>
    <!-- <script src="{{ asset('public/staradmin/dist/') }}/assets/js/Chart.roundedBarCharts.js"></script> -->
<script type="text/javascript">
@if($menu == 'business')
  document.getElementById('businessRegister').classList.contains('nav-item');
@else
  document.getElementById("businessRegister").classList.remove('show');
@endif
</script>
    <!-- End custom js for this page-->
  </body>
</html>