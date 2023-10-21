<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include 'session.php';
include '../connectPDO.php';
date_default_timezone_set("Asia/Kolkata");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/medwis.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
<!-- Topbar -->
<style>
.topbar
{
	margin-bottom:0.7rem !important;
	height:3rem;
}
footer.sticky-footer
{
	padding:0.7rem 0;
	border:1px solid #ccc;
	font-weight:700;
	color:#094f92 !important;
}
.btn-primary
{
	background:#094f92 !important;
}
.text-primary
{
	color:#094f92 !important;
}

footer.sticky-footer {
    padding: 0.7rem 0;
    border: 1px solid #ccc;
    font-weight: 700;
    color: #094f92 !important;
}
</style>  


</head>
<body id="page-top">

<div style="background:black;opacity:0.7;position:fixed;width:100%;z-index:100;height:100%;color:#fff;display:none;" id="loaderr">
<span class="loader" style="margin:auto;position:relative;display:flex;margin-top:calc(50vh - 24px);"></span><br>
<center>Processing Please Wait</center>
</div>
<div id="wrapper">
	
<!-- Sidebar -->
 <style>
 .sidebar .nav-item .nav-link {
    padding: 0.15rem;
}
.sidebar .nav-item .collapse .collapse-inner .collapse-item, .sidebar .nav-item .collapsing .collapse-inner .collapse-item {
    padding: .15rem 1rem;
}
 </style>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:linear-gradient(to bottom, #37474F 0%, #37474F 100%);">
        
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
			<!--<div class="sidebar-brand-icon rotate-n-15">-->
                <div class="sidebar-brand-icon">
                    <img src="../image/tnmsclogo2018.png" width="38px" />
                </div>
                <div class="sidebar-brand-text mx-3">MedWis</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenew"
                    aria-expanded="true" aria-controls="collapsenew">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Masters</span>
                </a>
                <div id="collapsenew" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="patient.php">Patient</a>
                        <a class="collapse-item" href="department.php">Department</a>
						<a class="collapse-item" href="unit.php">Unit</a>
						<!-- <a class="collapse-item" href="expensemas.php">Expense</a>
						<a class="collapse-item" href="bank.php">Bank</a>-->
                    </div>
                </div>
            </li>

 
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
			
            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Entry
            </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Entry</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--<h6 class="collapse-header">Custom Components:</h6>-->
                        <a class="collapse-item" href="admission.php?action=1">New Admission</a>
                        <!--<a class="collapse-item" href="wardtransfer.php">Ward Transfer</a>-->
						<a class="collapse-item" href="daysextend.php">Days Extend</a>
						<!--<a class="collapse-item" href="transferout.php">Transfer Out</a>-->
						<a class="collapse-item" href="cancellation.php">Cancellation</a>
						<a class="collapse-item" href="discharge.php">Discharge</a>
						<!--<a class="collapse-item" href="expenses.php">Expenses</a>
						<a class="collapse-item" href="cashcollection.php">Cash Collection</a>
						<a class="collapse-item" href="refund.php">Refund</a>-->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Report</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--<h6 class="collapse-header">Custom Utilities:</h6>-->
                        <a class="collapse-item" href="bill-report.php">Bill</a>
                        <a class="collapse-item" href="datewise-report.php">Datewise</a>
						<a class="collapse-item" href="due-report.php">Due</a>
						<a class="collapse-item" href="currentpatient-report.php">Current Patients</a>
						<!--<a class="collapse-item" href="daily-report.php">Daily</a>-->
						<a class="collapse-item" href="vacancy-report.php">Vacancy</a>
						<a class="collapse-item" href="vacancydetails-report.php">Vacancy Details</a>
						<!--<h6 class="collapse-header">Consolidated:</h6>
                        <a class="collapse-item" href="#">Daily</a>
                        <a class="collapse-item" href="#">Patient</a>-->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Addons
            </div>-->

             <!--Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>View</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="viewroombooking.php">Room Booking</a>
						<!--<a class="collapse-item" href="roombookingold.php">Room Booking Old</a>-->
                    </div>
                </div>
            </li>
			

          

            <!-- Divider --
            <hr class="sidebar-divider d-none d-md-block">-->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->