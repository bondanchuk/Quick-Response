

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

      


        <link rel="shortcut icon" href="<?php echo base_url();?>img/logo_provinsi.ico">



        <title>QRespon - Operator</title>



        <!--Morris Chart CSS -->

        <!-- include the core styles -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.css" />

<!-- include a theme, can be included into the core instead of 2 separate files -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.min.css" />



		      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       <link href="<?php echo base_url();?>assets/custombox/dist/custombox.min.css" rel="stylesheet">

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



        <style type="text/css">

        .btn-circle {

  width: 49px;

  height: 49px;

  text-align: center;

  padding: 5px 0;

  font-size: 20px;

  line-height: 2.00;

  border-radius: 30px;

}



.btn-circle-micro {

  width: 19px;

  height: 19px;

  text-align: center;

  padding: 1px 0;

  font-size: 13px;

  line-height: 0.1;

  border-radius: 30px;

}



.btn-circle-sm {

  width: 35px;

  height: 35px;

  text-align: center;

  padding: 2px 0;

  font-size: 20px;

  line-height: 1.65;

  border-radius: 30px;

}



.btn-circle-lg {

  width: 79px;

  height: 79px;

  text-align: center;

  padding: 13px 0;

  font-size: 30px;

  line-height: 2.00;

  border-radius: 70px;

}

        </style>







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

                        <h4 class="page-title">MENU LIHAT DATA</h4>

                        <p class="text-muted page-title-alt">SELAMAT DATANG DI HALAMAN OPERATOR</p>

                    </div>

                </div>









                <div class="row">

                    <div class="col-sm-12">

                        <div class="card-box table-responsive">

                            <h4 class="m-t-0 header-title"><b>Form Input Data Jalan</b></h4>



                            <br>

                            <div class="container">



                              <?php

                              $attributes = array('class' => 'form-horizontal', 'role' => 'form');

                              echo form_open('Admin/ViewData/simpan', $attributes);

                              ?>

    <div class="form-group">

      <label class="col-sm-3 control-label">Nama Kota / Kabupaten</label>

      <div class="col-sm-9">

        <select name="namaKota"  class="form-control" id="Q1">

          <option value="none"> --Pilih-- </option>

          <option value="Tanjungpinang"> Tanjungpinang </option>

          <option value="Bintan"> Bintan </option>

          <option value="Batam"> Batam </option>

        </select>

      </div>

    </div>



    <div class="form-group">

      <label class="col-sm-3 control-label">Nama Jalan</label>

      <div class="col-sm-9">

        <input class="form-control" name="namaJalan" id="focusedInput" type="text" placeholder="Contoh : JLN. ADI SUCIPTO">

      </div>

    </div>



    <div class="form-group">

      <label class="col-sm-3 control-label">Panjang Jalan</label>

      <div class="col-sm-9">

        <input class="form-control" name="panjangJalan" id="focusedInput" type="number" min="0" step="0.01" placeholder="Contoh : 200">

      </div>

    </div>



    <div class="form-group">

      <label class="col-sm-3 control-label">Fungi Jalan</label>

      <div class="col-sm-9">

        <input class="form-control" name="fungsiJalan" id="focusedInput" type="text"  placeholder="JKP/JKS/JAP">

      </div>

    </div>



    <div class="form-group">

      <label class="col-sm-3 control-label"></label>

      <div class="col-sm-9">

        <button type="submit" class="btn btn-primary" style="width : 100%;">Simpan Data</button>

        <?=$this->session->flashdata('pesan')?>

      </div>

    </div>





  <?php echo form_close(); ?>

</div>











                          </div>

                        </div>

                      </div>                <!-- end row -->













                <!-- end row -->







        </div>







        <!-- jQuery  -->



        <script src="<?php echo base_url();?>assets/Operator/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/detect.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/fastclick.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.slimscroll.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.blockUI.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/waves.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/wow.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.nicescroll.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.scrollTo.min.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/notify.min.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/notify-metro.js"></script>



        <!-- jQuery  -->

        <script src="<?php echo base_url();?>assets/alertifyjs/alertify.min.js"></script>



        <script src="<?php echo base_url();?>assets/custombox/dist/custombox.min.js"></script>

         <script src="<?php echo base_url();?>assets/custombox/dist/legacy.min.js"></script>



        <script src="<?php echo base_url();?>assets/Operator/js/jquery.core.js"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/jquery.app.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbUAQIO1DXaVMFvGUHY_0z-f71G3Bf9pw"></script>

    		<script>

    		$(document).on('click','#clearmap',clearmap)

    		.on('click','#simpandaftarkoordinatjembatan',simpandaftarkoordinatjembatan)

    		.on('click','#hapusmarkerjembatan',hapusmarkerjembatan)

    		.on('click','#viewmarkerjembatan',viewmarkerjembatan);

    		var map;

    		var markers = [];



    		function initialize() {

    		var mapOptions = {

    		zoom: 11,

    		// Center di kantor kabupaten kudus

    		center: new google.maps.LatLng(1.0479375,104.2699999),

    		mapTypeId: google.maps.MapTypeId.ROADMAP

    		};



    		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);



    		// Add a listener for the click event

    		google.maps.event.addListener(map, 'rightclick', addLatLng);

    		google.maps.event.addListener(map, "rightclick", function(event) {

    			var lat = event.latLng.lat();

    			var lng = event.latLng.lng();

    			$('#latitude').val(lat);

    			$('#longitude').val(lng);

    			//alert(lat +" dan "+lng);

    		});

    		}



    		/**

    		* Handles click events on a map, and adds a new point to the marker.

    		* @param {google.maps.MouseEvent} event

    		*/

    		function addLatLng(event) {

    		var marker = new google.maps.Marker({

    		position: event.latLng,

    		title: 'Simple GIS',

    		map: map

    		});

    		markers.push(marker);

    		}

    		//membersihkan peta dari marker

    		function clearmap(){



    		$('#latitude').val('');

    		$('#longitude').val('');

    		setMapOnAll(null);

    		}

    		//buat hapus marker

    		function setMapOnAll(map) {

    		for (var i = 0; i < markers.length; i++) {

    			markers[i].setMap(map);

    		}

    		markers = [];

    		}

    		//end buat hapus marker



    		function simpandaftarkoordinatjembatan(e){

    		e.preventDefault();

    		var datakoordinat = {'id_jembatan':$('#id_jembatan').val(),'latitude':$('#latitude').val(),'longitude':$('#longitude').val()};

    		console.log(datakoordinat);

    		$.ajax({

    			url : '<?php echo site_url("admin/simpandaftarkoordinatjembatan") ?>',

    			dataType : 'json',

    			data : datakoordinat,

    			type : 'POST',

    			success : function(data,status){

    				if (data.status!='error') {

    					$('#daftarkoordinatjembatan').load('<?php echo current_url()."/ #daftarkoordinatjembatan > *" ?>');

    					alert(data.msg);

    					clearmap(e);

    				}else{

    					alert(data.msg);

    				}

    			}

    		})

    		}

    		function hapusmarkerjembatan(e){

    		e.preventDefault();

    		var datakoordinat = {'id_jembatan':$(this).data('iddatajembatan')};

    		$.ajax({

    			url : '<?php echo site_url("admin/hapusmarkerjembatan") ?>',

    			data : datakoordinat,

    			dataType : 'json',

    			type : 'POST',

    			success : function(data,status){

    				if (data.status!='error') {

    					alert(data.msg);

    					$('#daftarkoordinatjembatan').load('<?php echo current_url()."/ #daftarkoordinatjembatan > *" ?>');

    					clearmap(e);

    				}else{

    					alert(data.msg);

    				}

    			}

    		})

    		}

    		function viewmarkerjembatan(id){



    		var datakoordinat = {'id_jembatan':$(this).data('iddatajembatan')};

    		$.ajax({

    			url : "<?php echo base_url('index/viewMarker')?>/"+id,

    			dataType : 'json',

    			type : 'POST',

    			success : function(data,status){

    				if (data.status!='error') {

    					clearmap();

    					//load marker

    					$.each(data.msg,function(m,n){

    						var myLatLng = {lat: parseFloat(n["latitude"]), lng: parseFloat(n["longitude"])};

    						console.log(m,n);

    						$.each(data.datajembatan,function(k,v){

    							addMarker(v['idJalan'],myLatLng);

    						})

    						return false;

    					})

    					//end load marker

    				}else{

    					alert(data.msg);

    				}

    			}

    		})

    		}

    		// Menampilkan marker lokasi jembatan

    		function addMarker(nama,location) {

    			var mapOptions = {

    				zoom: 17,

    				// Center di kantor kabupaten kudus

    				center: new google.maps.LatLng(location)

    				};



    				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);



    				var marker = new google.maps.Marker({

    					position: location,

    					map: map,

    					title : nama

    				});

    				markers.push(marker);

    		}



    		google.maps.event.addDomListener(window, 'load', initialize);

    		</script>







        <script type="text/javascript">



// Ajax post

$(document).ready(function() {

$(".submit").click(function(event) {

event.preventDefault();

var user_name = $("input#name").val();

var password = $("input#pwd").val();

jQuery.ajax({

type: "POST",

url: "<?php echo base_url(); ?>" + "index.php/ajax_post_controller/user_data_submit",

dataType: 'json',

data: {name: user_name, pwd: password},

success: function(res) {

if (res)

{

alertify.success('Success message');

}

}

});

});

});

</script>

</body>

      </html>

