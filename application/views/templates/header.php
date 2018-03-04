<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Otoads</title>

        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <!-- APP WRAPPER -->
        <div class="app">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation  app-navigation-fixed app-navigation-style-default dir-left" data-type="close-other">
                    <a href="index.html" class="app-navigation-logo"></a>
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><span class="icon-home"></span>Home</a></li>
                            <li><a href="<?php echo base_url(); ?>a_transaksi"><span class="fa fa-money"></span>Data Transaksi</a></li>
                            <li><a href="<?php echo base_url(); ?>a_pembayaran"><span class="fa fa-usd"></span>Data Pembayaran</a></li>
                            <li><a href="<?php echo base_url(); ?>a_distance"><span class="fa fa-blind"></span>Data Distance</a></li>
                            <li><a href="<?php echo base_url(); ?>a_iklan"><span class="fa fa-adn"></span>Data Iklan</a></li>
                            <li><a href="<?php echo base_url(); ?>a_check"><span class="fa fa-check-square"></span>Data Check In</a></li>
                            <li><a href="<?php echo base_url(); ?>a_mobil"><span class="fa fa-truck"></span>Data Mobil</a></li>
                            <li><a href="<?php echo base_url(); ?>a_wilayah"><span class="fa fa-street-view"></span>Data Wilayah</a></li>
                            <li><a href="<?php echo base_url(); ?>users/view_users"><span class="fa fa-user"></span>Users</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->

                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-list"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">
                            <input type="text" name="keyword" placeholder="Search">
                        </form>
                    </div>
                    <!-- END APP HEADER  -->

                    <!-- START PAGE HEADING -->
                    <!-- <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="icon-home"></span>
                        </div>
                        <div class="title">
                            <h1>Blank</h1>
                            <p>Subtitle</p>
                        </div>
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">First level</a></li>
                            <li class="active">Current</li>
                        </ul>
                    </div> -->
                    <!-- END PAGE HEADING -->
