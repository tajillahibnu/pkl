@extends('panel::layouts.master')

@section('content')
<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"> <span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
            </div>
            <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                <div class="notification-slider">
                    <div class="d-flex h-100"> <img src="../assets/images/giftools.gif" alt="gif">
                        <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light"> Out new update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
                    </div>
                    <div class="d-flex h-100"><img src="../assets/images/giftools.gif" alt="gif">
                        <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
                    </div>
                </div>
            </div>
            <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li class="onhover-dropdown">
                        <svg>
                            <use href="../assets/svg/icon-sprite.svg#star"></use>
                        </svg>
                        <div class="onhover-show-div bookmark-flip">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="front">
                                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                        <ul class="bookmark-dropdown">
                                            <li>
                                                <div class="row">
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-center"><a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn" href="#!">Add Bookmark</a></li>
                                        </ul>
                                    </div>
                                    <div class="back">
                                        <ul>
                                            <li>
                                                <div class="bookmark-dropdown flip-back-content">
                                                    <input type="text" placeholder="Search...">
                                                </div>
                                            </li>
                                            <li><a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back" href="#!">Back</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mode">
                            <svg>
                                <use href="../assets/svg/icon-sprite.svg#moon"></use>
                            </svg>
                        </div>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <svg>
                                <use href="../assets/svg/icon-sprite.svg#notification"></use>
                            </svg><span class="badge rounded-pill badge-success">4 </span>
                        </div>
                        <div class="onhover-show-div notification-dropdown">
                            <h6 class="f-18 mb-0 dropdown-title">Notifications </h6>
                            <ul>
                                <li class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="toast-body">
                                            <p>Delivery processing</p>
                                        </div>
                                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="toast-body">
                                            <p>Order Complete</p>
                                        </div>
                                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="toast-body">
                                            <p>Tickets Generated</p>
                                        </div>
                                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="toast-body">
                                            <p>Delivery Complete</p>
                                        </div>
                                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 py-0">
                        <div class="d-flex profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
                            <div class="flex-grow-1"><span>Emay Walter</span>
                                <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="sign-up.html"><i data-feather="user"></i><span>Account </span></a></li>
                            <li><a href="mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                            <li><a href="add-user.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">                        
                    <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">name</div>
                        </div>
                    </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
            <div>
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
                    <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Pages</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html">
                                    <svg class="stroke-icon">
                                        <use href="../assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="../assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                                    </svg><span>Knowledgebase</span></a></li>
                            <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                                    <svg class="stroke-icon">
                                        <use href="../assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="../assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                                    </svg><span>Support Ticket</span></a></li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>School Management</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">School Manage</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-7">
                <div class="row">
                    <div class="col-xxl-9 box-col-12">
                        <div class="row">
                            <div class="col-xxl-4 col-md-5">
                                <div class="card">
                                    <div class="card-header card-no-border">
                                        <div class="header-top student-header">
                                            <h5>Students</h5>
                                            <div class="card-header-right-icon">
                                                <div class="dropdown custom-dropdown">
                                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Class 9</button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#!">Class 10</a></li>
                                                        <li><a class="dropdown-item" href="#!">Class 11</a></li>
                                                        <li><a class="dropdown-item" href="#!">Class 12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="std-class-chart">
                                            <div id="student-chart"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-md-7">
                                <div class="card sales-report">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <h5>Attendance</h5>
                                            <div class="card-header-right-icon">
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="salesButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesButton"><a class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a class="dropdown-item" href="#!">Yesterday</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 attendance-data">
                                        <ul class="balance-data">
                                            <li><span class="circle bg-primary"></span><span class="c-light ms-1">Present</span></li>
                                            <li><span class="circle bg-success"></span><span class="c-light ms-1">Absent</span></li>
                                        </ul>
                                        <div class="attendance-student-data">
                                            <div id="attendance-wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card widget-hover overflow-hidden">
                                    <div class="card-header card-no-border pb-2">
                                        <h5>Teachers</h5>
                                    </div>
                                    <div class="card-body pt-0 count-student">
                                        <div class="school-wrapper">
                                            <div class="school-header">
                                                <h4 class="txt-warning counter" data-target="1098">0</h4>
                                                <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2"><i class="icon-arrow-down f-light"></i><span class="f-w-500 f-light">-3.7%</span></div>
                                            </div>
                                            <div class="school-body"> <img src="../assets/images/dashboard-7/icon-2.svg" alt="total teachers">
                                                <div class="right-line"><img src="../assets/images/dashboard-7/line.png" alt="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card widget-hover overflow-hidden">
                                    <div class="card-header card-no-border pb-2">
                                        <h5>Students</h5>
                                    </div>
                                    <div class="card-body pt-0 count-student">
                                        <div class="school-wrapper">
                                            <div class="school-header">
                                                <h4 class="txt-primary counter" data-target="890">0</h4>
                                                <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2"><i class="icon-arrow-up f-light"></i><span class="f-w-500 f-light">+6.7%</span></div>
                                            </div>
                                            <div class="school-body"> <img src="../assets/images/dashboard-7/icon1.svg" alt="total students">
                                                <div class="right-line"><img src="../assets/images/dashboard-7/line.png" alt="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card widget-hover overflow-hidden">
                                    <div class="card-header card-no-border pb-2">
                                        <h5>Parents</h5>
                                    </div>
                                    <div class="card-body pt-0 count-student">
                                        <div class="school-wrapper">
                                            <div class="school-header">
                                                <h4 class="txt-success counter" data-target="1018">0</h4>
                                                <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2"><i class="icon-arrow-up f-light"></i><span class="f-w-500 f-light">+2.0%</span></div>
                                            </div>
                                            <div class="school-body"> <img src="../assets/images/dashboard-7/icon-3.svg" alt="Total parents">
                                                <div class="right-line"><img src="../assets/images/dashboard-7/line.png" alt="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 order-0">
                                <div class="card default-inline-calender">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <h5>School Calendar</h5>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="calender_dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="calender_dropdown"><a class="dropdown-item" href="#">This Month</a><a class="dropdown-item" href="#">Previous Month</a><a class="dropdown-item" href="#">Last 3 Months</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 school-calender">
                                        <div class="input-group main-inline-calender">
                                            <input class="form-control" id="inline-calender2" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 order-2">
                                <div class="card">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <h5>Today's Task</h5>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="task_dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="task_dropdown"><a class="dropdown-item" href="#">This Month</a><a class="dropdown-item" href="#">Previous Month</a><a class="dropdown-item" href="#">Last 3 Months</a><a class="dropdown-item" href="#">Last 6 Months</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 task-table">
                                        <div class="main-task"><span class="text-muted">2 Task <span class="txt-success">completed <span class="text-muted"> out of 12</span></span></span>
                                            <div class="progress task-progress">
                                                <div class="progress-bar w-50 bg-success" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="recent-table table-responsive currency-table task-table">
                                            <table class="table">
                                                <tbody class="main-task-wrapper">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                    <input class="from-check-input" id="checkbox-task-1" type="checkbox" checked="">
                                                                    <label class="form-check-label" for="checkbox-task-1"> </label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2 justify-content-center">
                                                                    <div> <a class="pb-1" href="task.html">Teacher Meeting & Campus Tour</a>
                                                                        <ul class="task-icons">
                                                                            <li> <span class="text-muted">Class Number 10</span></li>
                                                                            <li class="f-light flex-wrap">
                                                                                <svg class="fill-icon fill-primary">
                                                                                    <use href="../assets/svg/icon-sprite.svg#clock"></use>
                                                                                </svg><span>11 : 00 AM</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn button-primary">In Progress</button>
                                                        </td>
                                                        <td class="icons-box">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="square-white"><i class="fa-solid fa-pencil"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-trash"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-print"></i></div>
                                                            </div>
                                                        </td>
                                                        <td class="icons-box-2 ps-0">
                                                            <div class="open-options">
                                                                <div class="square-white dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></div>
                                                                <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-pencil"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-trash"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-print"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="light-card">
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                    <input class="from-check-input" id="checkbox-task-2" type="checkbox">
                                                                    <label class="form-check-label" for="checkbox-task-2"> </label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2 justify-content-center">
                                                                    <div> <a href="task.html">Exercise 1, 2 and Learn more Books</a>
                                                                        <ul class="task-icons">
                                                                            <li> <span class="text-muted">Class Number 11</span></li>
                                                                            <li class="f-light flex-wrap">
                                                                                <svg class="fill-icon fill-clock">
                                                                                    <use href="../assets/svg/icon-sprite.svg#clock"></use>
                                                                                </svg><span>01 : 00 PM</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn badge-light-success">Done</button>
                                                        </td>
                                                        <td class="icons-box">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="square-white"><i class="fa-solid fa-pencil"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-trash"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-print"></i></div>
                                                            </div>
                                                        </td>
                                                        <td class="icons-box-2 ps-0">
                                                            <div class="open-options">
                                                                <div class="square-white dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></div>
                                                                <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-pencil"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-trash"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-print"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                    <input class="from-check-input" id="checkbox-task-3" type="checkbox">
                                                                    <label class="form-check-label" for="checkbox-task-3"> </label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2 justify-content-center">
                                                                    <div> <a href="task.html">Guest Lecture and Parent Meeting</a>
                                                                        <ul class="task-icons">
                                                                            <li> <span class="text-muted">Class Number 8</span></li>
                                                                            <li class="f-light flex-wrap">
                                                                                <svg class="fill-icon fill-clock">
                                                                                    <use href="../assets/svg/icon-sprite.svg#clock"></use>
                                                                                </svg><span>09 : 00 AM</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn badge-light-success">Done</button>
                                                        </td>
                                                        <td class="icons-box">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="square-white"><i class="fa-solid fa-pencil"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-trash"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-print"></i></div>
                                                            </div>
                                                        </td>
                                                        <td class="icons-box-2 ps-0">
                                                            <div class="open-options">
                                                                <div class="square-white dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></div>
                                                                <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-pencil"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-trash"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-print"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="light-card">
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                    <input class="from-check-input" id="checkbox-task-4" type="checkbox">
                                                                    <label class="form-check-label" for="checkbox-task-4"> </label>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-2 justify-content-center">
                                                                    <div> <a href="task.html">Meetup meeting with new Client</a>
                                                                        <ul class="task-icons">
                                                                            <li> <span class="text-muted">Class Number 11</span></li>
                                                                            <li class="f-light flex-wrap">
                                                                                <svg class="fill-icon fill-primary">
                                                                                    <use href="../assets/svg/icon-sprite.svg#clock"></use>
                                                                                </svg><span>02 : 00 PM</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn button-primary">In Progress</button>
                                                        </td>
                                                        <td class="icons-box ps-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="square-white"><i class="fa-solid fa-pencil"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-trash"></i></div>
                                                                <div class="square-white"><i class="fa-solid fa-print"> </i></div>
                                                            </div>
                                                        </td>
                                                        <td class="icons-box-2 ps-0">
                                                            <div class="open-options">
                                                                <div class="square-white dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></div>
                                                                <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-pencil"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-trash"></i></a></li>
                                                                    <li><a class="dropdown-item square-white border-top-0" href="#!"><i class="fa-solid fa-print"> </i></a></li>
                                                                </ul>
                                                            </div>
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
                    <div class="col-xxl-3 d-xxl-block d-none box-col-none">
                        <div class="row">
                            <div class="col-xl-12 notification box-col-6 d-xl-block d-none">
                                <div class="card">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <h5>Notice Board</h5>
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="notice_dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notice_dropdown"><a class="dropdown-item" href="#">This Month</a><a class="dropdown-item" href="#">Previous Month</a><a class="dropdown-item" href="#">Last 3 Months</a><a class="dropdown-item" href="#">Last 6 Months </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 notice-board">
                                        <ul>
                                            <li class="d-flex">
                                                <div class="activity-dot-primary"></div>
                                                <div class="ms-3">
                                                    <p class="d-flex mb-2"><span class="date-content light-background">16 Feb, 2024</span></p>
                                                    <h6>We have over 25 years of experience. We've rented more than 250 properties and won awards.<span class="dot-notification"></span></h6>
                                                    <p class="f-light">Jennyfar Lopez / 5 min ago<span class="badge alert-light-success txt-success ms-2 f-w-600">New</span></p>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="activity-dot-secondary"></div>
                                                <div class="ms-3">
                                                    <p class="d-flex mb-2"><span class="date-content light-background">17 Feb, 2024</span></p>
                                                    <h6>Drawing Competition, Story Telling Competition, Craft and Creativity & Dance Competition<span class="dot-notification"></span></h6>
                                                    <p class="f-light">Rubi Rao / 10 min ago</p>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="activity-dot-success"></div>
                                                <div class="ms-3">
                                                    <p class="d-flex mb-2"><span class="date-content light-background">18 Feb, 2024</span></p>
                                                    <h6>Announces a series of Parent Education Webinars for connected parents<span class="dot-notification"></span></h6>
                                                    <p class="f-light">Jenny Wilson / 1 hr ago</p>
                                                </div>
                                            </li>
                                            <li class="d-flex pb-0">
                                                <div class="activity-dot-warning"></div>
                                                <div class="ms-3">
                                                    <p class="d-flex mb-2"><span class="date-content light-background">19 Feb, 2024</span></p>
                                                    <h6>Rakhi Making Competition & Independence day and Investiture Ceremony<span class="dot-notification"></span></h6>
                                                    <p class="f-light">Cameron Williamson / 10 min ago</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection