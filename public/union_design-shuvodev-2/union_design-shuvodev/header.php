<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>User Dashboard</title>
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/plugins/summernote/dist/summernote.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/my/toastr.css">
  <script src="assets/my/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/uikit.min.css" />
  <link href="assets/my/select2.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <style type="text/css">


    .cardnew{
      background-color: #45818e!important;
    }

    label{
      color: #585858!important;
      font-size: 13px;
    }

    .card-title{
      font-size: 20px;
    }

    .nk-sidebar .metismenu li{
      line-height: 15px;
    }

    .nk-sidebar .metismenu a{
      font-weight: 500;

    }

    .select2-container--default .select2-selection--single{
      height: 45px!important;
      border: none;
      border:1px solid #e1e1e1;
      border-radius: 0px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered{
      line-height: 40px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow{
      height: 40px;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field:focus{
      border: 0px solid #fff!important;
    }

    .dropdown-item:hover{
      background: darkred;
      color: #fff;
    }

    .nk-sidebar .metismenu > li.active > a{
      background: #45818e !important;
      color: #fff!important;
    }

    .nk-sidebar .metismenu > li:focus span, .nk-sidebar .metismenu > li.active span{
      color: #fff!important;
    }

    .nk-sidebar .metismenu > li:focus i, .nk-sidebar .metismenu > li.active i{
      color: #fff!important;
    }

    .nk-sidebar .metismenu a:active, .nk-sidebar .metismenu a.active{
      color: #45818e!important;
    }
    a:hover{
      text-decoration: none;
    }

    .dataTables_filter input{
      border:1px solid lightgray!important;
      height: 30px!important;
    }

    .text-primary{
      color: #45818e!important;

    }

    .bg-primary{
     background-color: #45818e!important;

   }

   .btn-primary{
     background-color: #45818e!important;
     border:0;

   }

   .brand-logo{
     background-color: #45818e!important;

   }

   .cardnew i{
    font-size: 40px;
  }


</style>

</head>
<body>



  <div id="preloader">
    <div class="loader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
      </svg>
    </div>
  </div>

  <div id="main-wrapper">

    <div class="nav-header">
      <div class="brand-logo">
        <a href="index.php">
          <b class="logo-abbr text-white">D</b>
          <span class="logo-compact"></span>
          <span class="brand-title text-center">
            <h4 style="color: #fff;" class="text-uppercase"><b>ড্যাশবোর্ড</b></h4>
          </span>
        </a>
      </div>
    </div>

    <div class="header">
      <div class="header-content clearfix">

        <div class="nav-control">
          <div class="hamburger">
            <span class="toggle-icon"><i class="icon-menu"></i></span>
          </div>

          <b class="text-primary text-uppercase" style="font-size: 16px;">১নং কুলিয়া ( আবু ছায়েদ শুভ )</b>
        </div>


        <div class="header-right">


          <ul class="clearfix">


            <li class="icons dropdown">
              <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                <span class="activity active"></span>
                <img src="https://i.ibb.co/8b8PG14/images.png" height="40" width="40" alt="">
              </div>
              <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                <div class="dropdown-content-body">
                  <ul>
                    <li>
                      <a href="" class="btn btn-primary"><i class="icon-user text-white"></i> <span>প্রোফাইল</span></a>
                    </li>

                    <li>

                      <form method="post" action="">

                        <button class="btn btn-primary w-100"><i class="icon-key"></i> <span>লগআউট</span></button>
                      </form>



                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="nk-sidebar">
      <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">


          <li class="nav-label" style="color:gray;">ড্যাশবোর্ড</li>

          <li>
            <a href="index.php" aria-expanded="false">
              <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">ড্যাশবোর্ড</span>
            </a>
          </li>


          <li class="nav-label" style="color:gray;">ব্যবসায়িক প্যানেল</li>


          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <i class="icon-grid menu-icon"></i><span class="nav-text">ট্রেড লাইসেন্স</span>
            </a>
            <ul aria-expanded="false">

              <li><a href="register_tradelicense.php">ট্রেড লাইসেন্স আবেদন</a></li>
              <li><a href="tradelicenselists.php">লাইসেন্সের তালিকা</a></li>
            </ul>
          </li>



          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <i class="icon-grid menu-icon"></i><span class="nav-text">ব্যবসায় নিবন্ধন করুন</span>
            </a>
            <ul aria-expanded="false">

              <li><a href="register_business.php">ব্যবসায় নিবন্ধন করুন</a></li>
              <li><a href="register_businesslists.php">ব্যবসায় নিবন্ধনের তালিকা</a></li>
            </ul>
          </li>


          <li class="nav-label" style="color:gray;">সাধারণ প্যানেল</li>


          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <i class="icon-grid menu-icon"></i><span class="nav-text">ওয়ারিশ সনদ</span>
            </a>
            <ul aria-expanded="false">

              <li><a href="warrish.php">ওয়ারিশ সনদ আবেদন</a></li>
              <li><a href="warrishlists.php">ওয়ারিশ সনদ তালিকা</a></li>
            </ul>
          </li>



          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <i class="icon-grid menu-icon"></i><span class="nav-text">পারিবারিক সনদ</span>
            </a>
            <ul aria-expanded="false">

              <li><a href="familysonod.php">পারিবারিক সনদের আবেদন</a></li>
              <li><a href="familysonodlists.php">পারিবারিক সনদের তালিকা</a></li>
            </ul>
          </li>





          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <i class="icon-grid menu-icon"></i><span class="nav-text">বিবিধ সনদ</span>
            </a>
            <ul aria-expanded="false">

              <li><a href="bibidhosonod.php">বিবিধ সনদের আবেদন</a></li>
              <li><a href="bibidhosonodlists.php">বিবিধ সনদের তালিকা</a></li>
            </ul>
          </li>








        </ul>
      </div>
    </div>




  </div>




