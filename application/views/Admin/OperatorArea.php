

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">



        <link rel="shortcut icon" href="<?php echo base_url();?>img/logo_provinsi.ico">



        <title>QRespon - Operator</title>



        <!--Morris Chart CSS -->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/Operator/css/morris.css">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"

      rel="stylesheet">

  <link href="<?php echo base_url();?>assets/Admin/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/core.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/components.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/icons.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/pages.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/menu.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/responsive.css" rel="stylesheet" type="text/css" />



        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

        <![endif]-->



        <script src="<?php echo base_url();?>assets/Operator/js/modernizr.min.js"></script>









    </head>





    <body>





        <!-- Navigation Bar-->

        <header id="topnav">

            <div class="topbar-main">

                <div class="container">



                    <!-- Logo container-->

                    <div class="logo">

                        <a href="Dashboard" class="logo"><span>QRespon</span></a>

                    </div>

                    <!-- End Logo container-->





                    <div class="menu-extras">



                        <ul class="nav navbar-nav navbar-right pull-right">

                            <li class="navbar-c-items">

                                <form role="search" class="navbar-left app-search pull-left hidden-xs">

                                     <input type="text" placeholder="Search..." class="form-control">

                                     <a href=""><i class="fa fa-search"></i></a>

                                </form>

                            </li>





                            <li class="dropdown navbar-c-items">

                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url();?>img/logo_operator.png" alt="user-img" class="img-circle"> </a>

                                <ul class="dropdown-menu">



                                    <li><a href="Dashboard/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>

                                </ul>

                            </li>

                        </ul>

                        <div class="menu-item">

                            <!-- Mobile menu toggle-->

                            <a class="navbar-toggle">

                                <div class="lines">

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                </div>

                            </a>

                            <!-- End mobile menu toggle-->

                        </div>

                    </div>



                </div>

            </div>



            <div class="navbar-custom">

                <div class="container">

                <div id="navigation">

                    <!-- Navigation Menu-->

                    <ul class="navigation-menu">

                        <li class="has-submenu active">

                            <a href="Dashboard"><i class="fa fa-home"></i>Dashboard</a>



                        </li>

                        <li class="has-submenu">

                            <a href="#"><i class="fa fa-book"></i>Daftar Pengaduan</a>

                            <ul class="submenu">

															<li><a href="DaftarTunggu">Daftar Tunggu</a></li>

															<li><a href="DaftarLaporan">Sedang Berjalan</a></li>

															<li><a href="Terselesaikan">Terselesaikan</a></li>

                            </ul>

                        </li>





                        <li class="has-submenu">

                            <a href="#"><i class="fa fa-road"></i>Data Jalan</a>

                            <ul class="submenu">

                                <li>

                                    <ul>



																				<li><a href="DataJalan">Lihat Data</a></li>

									                      <li><a href="ViewData">Olah Data</a></li>

                                    </ul>

                                </li>

                                                  <!-- End navigation menu        -->

                </div>

            </div>

            </div>

        </header>

        <!-- End Navigation Bar-->





        <div class="wrapper">

            <div class="container">



                <!-- Page-Title -->

                <div class="row">

                    <div class="col-sm-12">

                        <div class="btn-group pull-right m-t-15">

                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="#">Action</a></li>

                                <li><a href="#">Another action</a></li>

                                <li><a href="#">Something else here</a></li>

                                <li class="divider"></li>

                                <li><a href="#">Separated link</a></li>

                            </ul>

                        </div>

                        <h4 class="page-title">Dashboard</h4>

                        <p class="text-muted page-title-alt">SELAMAT DATANG DI HALAMAN OPERATOR</p>

                    </div>

                </div>









                <div class="row">







                    <div class="col-lg-12">

                        <div class="card-box">

                            <h4 class="text-dark header-title m-t-0">Complaints Analytics</h4>

                            <div class="text-center">

                                <ul class="list-inline chart-detail-list">

                                    <li>

                                        <h5><i class="fa fa-circle m-r-5" style="color: #f45b5b;"></i>2016</h5>

                                    </li>

                                    <li>

                                        <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>2017</h5>

                                    </li>

                                    <li>

                                        <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>2018</h5>

                                    </li>

                                </ul>
                            </div>

														<div id="chart">

														</div>

														<script src="<?php echo base_url();?>assets/highcharts/js/highcharts.js" type="text/javascript"></script>

												<script src="<?php echo base_url();?>assets/highcharts/js/modules/exporting.js" type="text/javascript"></script>

												<script src="<?php echo base_url();?>assets/highcharts/js/modules/offline-exporting.js" type="text/javascript"></script>

														<script src="<?php echo base_url();?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script>

														<script src="<?php echo base_url();?>assets/highcharts/js/themes/sand-signika.js" type="text/javascript"></script>

																								<script type="text/javascript">

																								$(function(){

																									 new Highcharts.Chart({

																										 chart: {

																											 renderTo: 'chart',

																											 type: 'line',

																										 },

																										 title: {

																											 text: 'Grafik Statistik Pengaduan',

																											 x: 0

																										 },





																										 xAxis: {

																											 categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',

																											 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']

																										 },

																										 yAxis: {

																											 title: {

																												 text: 'Total Laporan'

																											 }

																										 },

																										 plotOptions: {

																											 line: {

																												 dataLabels: {

																													 enabled: true

																												 },



																											 }

																										 },

																										 series: [{

																											 name: 'Data dalam Bulan',

																											 data: <?php echo json_encode($grafik); ?>

																										 }]

																									 });

																								 });

																								 </script>

                        </div>

                    </div>







                </div>

                <!-- end row -->







                <!-- end row -->





                <!-- Footer -->

                <footer class="footer text-right">

                    <div class="container">

                        <div class="row">

                            <div class="col-xs-6">

                                © 2016. All rights reserved.

                            </div>

                            <div class="col-xs-6">

                                <ul class="pull-right list-inline m-b-0">

                                    <li>

                                        <a href="#">About</a>

                                    </li>

                                    <li>

                                        <a href="#">Help</a>

                                    </li>

                                    <li>

                                        <a href="#">Contact</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </footer>

                <!-- End Footer -->



            </div>

        </div>







        <!-- jQuery  -->

        <script src="<?php echo base_url();?>assets/jquery-2.1.4.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/detect.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/fastclick.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.slimscroll.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.blockUI.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/waves.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/wow.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.nicescroll.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.scrollTo.min.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.peity.min.js"></script>



        <!-- jQuery  -->

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.waypoints.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.counterup.min.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/morris.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/raphael-min.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.knob.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.dashboard.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.core.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.app.js"></script>

</body>

      </html>

