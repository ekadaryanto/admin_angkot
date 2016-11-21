<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap/css/style.css">
	<script src="<?=base_url() ?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
    	$(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
		        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
		    });
		    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
		        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
		    });
		})
    </script>
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
            </a>
        </div>
        
        <!-- Menu Atas Boss -->
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>

        <!-- Menu kiri nde kene boss -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?= site_url('Admin') ?>"><i class="fa fa-fw fa-bus"></i> Angkot</a>
                </li>
                <li>
                    <a href="<?= site_url('Jalan') ?>"><i class="fa fa-fw fa-road"></i> Jalan</a>
                </li>
                <li>
                    <a href="<?= site_url('Terminal') ?>"><i class="fa fa-fw fa-subway"></i>  Terminal</a>
                </li>
                <li>
                    <a href="<?= site_url('Kritiksaran') ?>"><i class="fa fa-fw fa-pencil"></i> Kritik Saran</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-gear"></i>  Setting <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
