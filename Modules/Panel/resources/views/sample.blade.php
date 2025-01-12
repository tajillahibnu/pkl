@extends('panel::layouts.master')

@section('content')
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
@endsection