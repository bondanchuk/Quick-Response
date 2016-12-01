
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Dashboard | Aero Admin</title>
        <meta name="author" content="">

        <!-- ##### -->
        <!-- Fonts -->
        <!-- ##### -->
        <link href="<?php echo base_url();?>assets/Admin/css/font.css" rel="stylesheet" type="text/css" />
        <!-- ################## -->
        <!-- Global stylesheets -->
        <!-- ################## -->
        <link href="<?php echo base_url();?>assets/Admin/css/materialize.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/Admin/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/Admin/css/prettify.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/Admin/css/admin.css" rel="stylesheet" type="text/css" />
        <!-- ################# -->
        <!-- Theme stylesheets -->
        <!-- ################# -->
        <link href="<?php echo base_url();?>assets/Admin/css/light.css" id="ssThemeColor" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/Admin/css/materialize-red.css" id="ssMainColor" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/Admin/css/red.css" id="ssAlternativeColor" rel="stylesheet" type="text/css" />
        <!-- ################ -->
        <!-- Util stylesheets -->
        <!-- ################ -->

        <!-- ################ -->
        <!-- Page stylesheets -->
        <!-- ################ -->
        <link href="<?php echo base_url();?>assets/Admin/css/dashboard.css" rel="stylesheet" type="text/css" />
        <!-- ##### -->
        <!-- Icons -->
        <!-- ##### -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    </head>

    <body>
        <!-- #### -->
        <!-- Menu -->
        <!-- #### -->
        <nav>
            <div class="row">
                <div class="col s12">
                    <!-- ############ -->
                    <!-- Desktop Menu -->
                    <!-- ############ -->
                    <div class="nav-wrapper">
                        <a href="index.html" class="brand-logo">

                            <span class="valign">
                                <b class="main-text">Q</b>Respon
                            </span>
                        </a>

                        <!-- Desktop -->
                        <ul class="right hide-on-med-and-down">
                            <li class="active"><a href="index.html">Dashboard</a></li>



                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-css" data-constrainwidth="false" data-beloworigin="true">
                                    Daftar Pengaduan<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>

                            <li >
                                <a class="dropdown-button" href="#!" data-activates="dropdown-components" data-constrainwidth="false" data-beloworigin="true">
                                    Data Jalan<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                </a>
                            </li>



                            <li class="profile ">
                                <a class="dropdown-button" href="#!" data-activates="dropdown-profile" data-constrainwidth="false" data-beloworigin="true" data-alignment="right">
                                    <div class="valign-wrapper">
                                        <img src="<?php echo base_url();?>img/logo_operator.png" alt="My profile" class="circle responsive-img margin-right-10">
                                        Operator
                                        <i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdowns -->
                        <ul id="dropdown-css" class="dropdown-content">
                          <li><a href="DaftarTunggu">Daftar Tunggu</a></li>
                          <li><a href="form_advanced.html">Sedang Berjalan</a></li>
                          <li><a href="form_validation.html">Terselesaikan</a></li>
                        </ul>
                        <ul id="dropdown-components" class="dropdown-content">
                          <li><a href="general_elements.html">Lihat Data</a></li>
                          <li><a href="media_gallery.html">Olah Data</a></li>
                        </ul>


                        <ul id="dropdown-profile" class="dropdown-content">

                            <li><a href="login.html">Logout <span class="fa fa-sign-out"></span></a></li>
                        </ul>

                        <!-- Mobile -->
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                    </div>


                    <!-- ########### -->
                    <!-- Mobile Menu -->
                    <!-- ########### -->
                    <ul class="side-nav" id="mobile-demo">
                        <li class="logo">
                            <img src="img/logo.png"/>
                            <p>
                                <b class="main-text">Aero</b> Admin
                            </p>
                        </li>

                        <li>
                            <a href="index.html" class="waves-effect">Dashboard</a>
                        </li>

                        <li class="padding-0">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">CSS</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="css_color.html">Color</a></li>
                                            <li><a href="css_grid.html">Grid</a></li>
                                            <li><a href="css_helpers.html">Helpers</a></li>
                                            <li><a href="css_media.html">Media</a></li>
                                            <li><a href="css_sass.html">Sass</a></li>
                                            <li><a href="css_shadow.html">Shadow</a></li>
                                            <li><a href="css_table.html">Table</a></li>
                                            <li><a href="css_typography.html">Typography</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">Components</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="components_badges.html">Badges</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                            <li><a href="components_cards.html">Cards</a></li>
                                            <li><a href="components_chips.html">Chips</a></li>
                                            <li><a href="components_collections.html">Collections</a></li>
                                            <li><a href="components_footer.html">Footer</a></li>
                                            <li><a href="components_forms.html">Forms</a></li>
                                            <li><a href="components_icons.html">Icons</a></li>
                                            <li><a href="components_navbar.html">Navbar</a></li>
                                            <li><a href="components_pagination.html">Pagination</a></li>
                                            <li><a href="components_preloader.html">Preloader</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">JavaScript</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="js_collapsible.html">Collapsible</a></li>
                                            <li><a href="js_dialogs.html">Dialogs</a></li>
                                            <li><a href="js_dropdown.html">Dropdown</a></li>
                                            <li><a href="js_media.html">Media</a></li>
                                            <li><a href="js_modals.html">Modals</a></li>
                                            <li><a href="js_parallax.html">Parallax</a></li>
                                            <li><a href="js_pushpin.html">Pushpin</a></li>
                                            <li><a href="js_scrollfire.html">ScrollFire</a></li>
                                            <li><a href="js_scrollspy.html">Scrollspy</a></li>
                                            <li><a href="js_sidenav.html">SideNav</a></li>
                                            <li><a href="js_tabs.html">Tabs</a></li>
                                            <li><a href="js_transitions.html">Transitions</a></li>
                                            <li><a href="js_waves.html">Waves</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect">APPs</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="apps_crud.html">CRUD</a></li>
                                            <li><a href="apps_pricing_table.html">Pricing Table</a></li>
                                            <li><a href="app_datatables.html">Datatables</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="main-content no-gutter">
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="dashboard">
					<!-- ########### -->
					<!-- Stats panel -->
					<!-- ########### -->
					<div class="row">
						<div class="col s12">
              <center>
                              <h3>SELAMAT DATANG DI HALAMAN OPERATOR</h3>

              </center>
						</div>


					</div>


					<div class="row">
						<!-- ########### -->
						<!-- Total sales -->
						<!-- ########### -->
						<div class="col s12 ">
							<div id="boxTotalSales" class="panel panel-bordered panel-dashboard panel-bar-chart z-depth-1">
								<div class="panel-header">
									<div class="title">
										Grafik Laporan
									</div>
									<div class="subtitle">
										2016
									</div>
								</div>

								<div class="panel-body">


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
                                               text: 'Grafik Statistik pengunjung',
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


						<!-- ############# -->
						<!-- Recent Orders -->
						<!-- ############# -->

					</div>


					<div class="row">
						<!-- #### -->
						<!-- Chat -->
						<!-- #### -->
						<div class="col s12 l5">
							<div id="boxChat" class="panel panel-bordered panel-dashboard panel-chat z-depth-1">
								<div class="panel-header">
									<div class="title">
										Chat
									</div>
									<div class="subtitle">
										Incoming messages
									</div>
								</div>

								<form>
									<div class="panel-body">
										<div class="slimscroll" data-height="230px" data-start="bottom">
											<div class="messages-wrapper">
												<div class="row message sent">
													<div class="col s12">
														<img src="img/person-1.jpg" alt="John Doe" class="circle responsive-img left-align">

														<div class="text">
															<div class="name">John Doe</div>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</div>
													</div>
												</div>

												<div class="row message received">
													<div class="col s12">
														<img src="img/person-2.jpg" alt="Jane Doe" class="circle responsive-img right-align">

														<div class="text">
															<div class="name">Jane Doe</div>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</div>
													</div>
												</div>

												<div class="row message received">
													<div class="col s12">
														<img src="img/person-2.jpg" alt="Jane Doe" class="circle responsive-img right-align">

														<div class="text">
															<div class="name">Jane Doe</div>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</div>
													</div>
												</div>

												<div class="row message sent">
													<div class="col s12">
														<img src="img/person-1.jpg" alt="John Doe" class="circle responsive-img left-align">

														<div class="text">
															<div class="name">John Doe</div>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="panel-footer">
										<div class="row">
											<div class="col s12">
												<input type="text" placeholder="Type a message and hit 'enter' to send">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>


						<!-- ######### -->
						<!-- Todo list -->
						<!-- ######### -->
						<div class="col s12 l7">
							<div id="boxTodoList" class="panel panel-bordered panel-dashboard panel-todo z-depth-1">
								<div class="panel-header">
									<div class="title">
										Todo list
									</div>
									<div class="subtitle">
										Tasks summary
									</div>
								</div>

								<form>
									<div class="panel-body">
										<div class="slimscroll" data-height="230px">
											<div class="tasks-wrapper">
												<p>
													<input type="checkbox" name="task-lunch" id="task-lunch" checked>
													<label for="task-lunch">Have lunch</label>
												</p>
												<p>
													<input type="checkbox" name="task-drink" id="task-drink" checked>
													<label for="task-drink">Work</label>
												</p>
												<p>
													<input type="checkbox" name="task-watch-series" id="task-watch-series">
													<label for="task-watch-series">Watch series</label>
												</p>
												<p>
													<input type="checkbox" name="task-play-videogame" id="task-play-videogame">
													<label for="task-play-videogame">Play videogame</label>
												</p>
												<p>
													<input type="checkbox" name="task-run" id="task-run">
													<label for="task-run">Brush teeth</label>
												</p>
												<p>
													<input type="checkbox" name="task-to-sleep" id="task-to-sleep">
													<label for="task-to-sleep">Sleep</label>
												</p>
											</div>
										</div>
									</div>

									<div class="panel-footer">
										<div class="row">
											<div class="col s12">
												<input type="text" placeholder="Type the description and hit 'enter' to add">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


					<div class="row">
						<!-- ############ -->
						<!-- Server stats -->
						<!-- ############ -->
						<div class="col s12 l6">
							<div id="boxServerStats" class="panel panel-bordered panel-dashboard panel-gauge-chart z-depth-1">
								<div class="panel-header">
									<div class="title">
										Server stats
									</div>
									<div class="subtitle">
										Refreshing in 3 seconds...
									</div>
								</div>

								<div class="panel-body">
									<div class="row">
										<div class="col m4 s12">
											<div id="chartServerCpu" class="chart-wrapper" data-title="CPU usage (%)"></div>
										</div>

										<div class="col m4 s12">
											<div id="chartServerMemory" class="chart-wrapper" data-title="Memory usage (%)"></div>
										</div>

										<div class="col m4 s12">
											<div id="chartServerHd" class="chart-wrapper" data-title="HD  usage (%)"></div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<!-- ########### -->
						<!-- Card panels -->
						<!-- ########### -->
						<div class="col s12 l3">
							<div class="card-panel card-dashboard facebook waves-effect waves-lighten-5">
								<div class="post">
									I am a very simple card. I am good at containing small bits of information.
									I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
								</div>
								<div class="date">
									15 March, 2016
								</div>
								<div class="row">
									<div class="col s4 brand">
										<i class="fa fa-facebook"></i>
									</div>
									<div class="col s8 trending">
										<i class="fa fa-thumbs-o-up"></i> 1467
										<i class="fa fa-comment-o"></i> 127
									</div>
								</div>
							</div>

							<div class="card-panel card-dashboard twitter waves-effect waves-lighten-5 margin-top-15">
								<div class="post">
									I am a very simple card. I am good at containing small bits of information.
									I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
								</div>
								<div class="date">
									15 March, 2016
								</div>
								<div class="row">
									<div class="col s4 brand">
										<i class="fa fa-twitter"></i>
									</div>
									<div class="col s8 trending">
										<i class="fa fa-star-o"></i> 1192
										<i class="fa fa-retweet"></i> 86
									</div>
								</div>
							</div>
						</div>


						<!-- ########### -->
						<!-- Card reveal -->
						<!-- ########### -->
						<div class="col s12 l3">
							<div class="card card-dashboard">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator" src="img/blog-cover.jpg">
								</div>
								<div class="card-content">
									<span class="card-title activator">
										Our Blog
										<i class="material-icons waves-effect right">more_vert</i>
									</span>
									<p class="right-align">
										<a class="btn-flat waves-effect" href="#">Go for it</a>
									</p>
								</div>
								<div class="card-reveal">
									<span class="card-title">
										Our Blog
										<i class="material-icons waves-effect right">close</i>
									</span>
									<p>Here is some more information about blog that is only revealed once clicked on.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
            </div>
        </main>


        <!-- ###### -->
        <!-- Footer -->
        <!-- ###### -->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l3 s12">
                        <div class="brand-logo">
                            <img src="img/logo.png"/>
                            <h5 class="valign"><b class="main-text">Aero</b> Admin</h5>
                        </div>
                        <p>A Material Design based admin template.</p>
                        <p>You can use rows and columns here to organize your footer content.</p>
                    </div>

                    <div class="col l4 offset-l2 s12">
                        <h5>Documentation</h5>
                        <p>Please, in case of doubt <a href="documentation.html">read the documentation</a>. If the doubt still remains, don't hesitate to <a href="http://themeforest.net/user/lippep" target="_blank">contact me</a>. I'll be glad to help you or even listen to your suggestions. :)</p>
                    </div>

                    <div class="col l2 offset-l1 s12 footer-links">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="css_color.html">CSS</a></li>
                            <li><a href="components_badges.html">Components</a></li>
                            <li><a href="js_collapsible.html">Javascript</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    © 2016 Aero Admin, All rights reserved.
                </div>
            </div>
        </footer>


        <!-- ################## -->
        <!-- Global javascripts -->
        <!-- ################## -->
        <script src="<?php echo base_url();?>assets/Admin/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/materialize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/prettify.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/admin.js" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Util javascripts -->
        <!-- ################ -->
        <script src="<?php echo base_url();?>assets/Admin/js/utils.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/colors.js" type="text/javascript"></script>

        <!-- ################ -->
        <!-- Page javascripts -->
        <!-- ################ -->
        <script src="<?php echo base_url();?>assets/Admin/js/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/gauge.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/dashboard.js" type="text/javascript"></script>

  </html>
