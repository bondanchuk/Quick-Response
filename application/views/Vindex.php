<!DOCTYPE html>
<html>
<head>
	<meta property="og:description" content="Website Resmi Quick Respon Dinas Pekerjaan Umum Provinsi Kepulauan Riau">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Website Resmi Quick Respon Dinas Pekerjaan Umum Provinsi Kepulauan Riau" />


<link rel="shortcut icon" href="<?php echo base_url();?>img/logo_provinsi.ico">

    <!-- FONTS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/stroke-gap.min.css" rel="stylesheet" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css"  rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/navigations.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon.ico" />
  	<title>DINAS PEKERJAAN UMUM</title>
		<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Roboto);

		* {
		    font-family: 'Roboto', sans-serif;
		}

		#login-modal .modal-dialog {
		    width: 350px;
		}

		#login-modal input[type=text], input[type=password] {
			margin-top: 10px;
		}

		#div-login-msg,
		#div-lost-msg,
		#div-register-msg {
		    border: 1px solid #dadfe1;
		    height: 30px;
		    line-height: 28px;
		    transition: all ease-in-out 500ms;
		}

		#div-login-msg.success,
		#div-lost-msg.success,
		#div-register-msg.success {
		    border: 1px solid #68c3a3;
		    background-color: #c8f7c5;
		}

		#div-login-msg.error,
		#div-lost-msg.error,
		#div-register-msg.error {
		    border: 1px solid #eb575b;
		    background-color: #ffcad1;
		}

		#icon-login-msg,
		#icon-lost-msg,
		#icon-register-msg {
		    width: 30px;
		    float: left;
		    line-height: 28px;
		    text-align: center;
		    background-color: #dadfe1;
		    margin-right: 5px;
		    transition: all ease-in-out 500ms;
		}

		#icon-login-msg.success,
		#icon-lost-msg.success,
		#icon-register-msg.success {
		    background-color: #68c3a3 !important;
		}

		#icon-login-msg.error,
		#icon-lost-msg.error,
		#icon-register-msg.error {
		    background-color: #eb575b !important;
		}

		#img_logo {
		    max-height: 100px;
		    max-width: 100px;
		}

		/* #########################################
		   #    override the bootstrap configs     #
		   ######################################### */

		.modal-backdrop.in {
		    filter: alpha(opacity=50);
		    opacity: .8;
		}

		.modal-content {
		    background-color: #ececec;
		    border: 1px solid #bdc3c7;
		    border-radius: 0px;
		    outline: 0;
		}

		.modal-header {
		    min-height: 16.43px;
		    padding: 15px 15px 15px 15px;
		    border-bottom: 0px;
		}

		.modal-body {
		    position: relative;
		    padding: 5px 15px 5px 15px;
		}

		.modal-footer {
		    padding: 15px 15px 15px 15px;
		    text-align: left;
		    border-top: 0px;
		}

		.checkbox {
		    margin-bottom: 0px;
		}

		.btn {
		    border-radius: 0px;
		}

		.btn:focus,
		.btn:active:focus,
		.btn.active:focus,
		.btn.focus,
		.btn:active.focus,
		.btn.active.focus {
		    outline: none;
		}

		.btn-lg, .btn-group-lg>.btn {
		    border-radius: 0px;
		}

		.btn-link {
		    padding: 5px 10px 0px 0px;
		    color: #95a5a6;
		}

		.btn-link:hover, .btn-link:focus {
		    color: #2c3e50;
		    text-decoration: none;
		}

		.glyphicon {
		    top: 0px;
		}

		.form-control {
		  border-radius: 0px;
		}
		</style>

		<script src="<?php echo base_url(); ?>assets/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function(){
						$('#emailIn').change(function(){
								var email = $('#emailIn').val();
								var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		// my ajax function will call after enter the valid email
								if(email == "" ||  !filter.test(email))
										{
												$('#emailIn').html("");
												$('#submit').attr('disabled', false);
										}
								if(filter.test(email) && email != "")
										{
												$.ajax({
												url:"<?php echo base_url(); ?>index.php/UserIndex/checkEmail",
												type:"post",
												data:"email="+email,
												success: function(data){
														var result = JSON.parse(data);
														if(result == "")
																{
																		$('#emailIn').html("<?php echo $this->lang->line('email'); ?>  <?php echo $this->lang->line('available'); ?> ");
																		$('#emailIn').css('color', 'green');
																}
														else
																{
																		$('#emailIn').html("<?php echo $this->lang->line('email'); ?>  <?php echo $this->lang->line('already'); ?> <?php echo $this->lang->line('exists'); ?>");
																		$('#emailIn').css('color', '#fa0000');
																		alert("Email Sudah Ada");
																			$('#emailIn').val('');
																}

												}
												});
										}
						});
				});
		</script>

 <?php echo $script_captcha;?>
</head>
<body>

    <!-- HEADER -->
    <header class="tt-header-1">
        <div class="container">
            <div class="top-inner">
                <a class="logo" href="index.php"><img src="<?php echo base_url();?>img/Edit_7.png" alt=""></a>
            </div>
            <button class="cmn-toggle-switch"><span></span></button>
            <div class="toggle-block">
                <nav class="main-nav clearfix">
                    <ul>
                        <li class="active">
                            <a href="<?php echo base_url();?>">Home</a>
                        </li>

                        <li>
                            <a href="about.html">Tentang Kami <i class="menu-toggle fa fa-angle-down"></i></a>

                        </li>


                       <li><a href="<?php echo base_url();?>index.php/Contact">Kontak</a></li>                    </ul>
                </nav>
                <div class="nav-more">
									<p class="text-center"><a href="#" class="c-btn type-1 size-2 font-2 color-3 " role="button" data-toggle="modal" data-target="#login-modal"><span>masuk sekarang</span></a></p>
                </div>
                <div class="top-line">
									<div class="container">
								                         <div class="top-info">
								                             <i class="fa fa-phone"></i>
								                             <a href="tel:081270060081">+ (62) 81270060081</a>
								                         </div>

<div class="top-info">
								                             <i class="fa fa-phone"></i>
								                             <a href="tel:08989747242">+ (62) 8989747242</a>
								                         </div>
								                         <div class="top-info">
								                             <i class="fa fa-envelope-o"></i>
								                             <a href="mailto:layanan@qrpuprovkepri.com">layanan@qrpuprovkepri.com</a>
								                         </div>

								                     </div>

                </div>
            </div>
        </div>
    </header>
    <div class="tt-header-margin-1"></div>

    <div id="content-wrapper">

        <!-- REVOLUTION SLIDER -->
        <div class="rev_slider_wrapper">
            <div class="rev_slider"  data-version="5.0">
                <ul>
                    <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                        <img src="<?php echo base_url();?>img/slider_01.JPG" height="650" width="1920"  alt="">


                    </li>

                    <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                        <img src="<?php echo base_url(); ?>img/slider/slide_2.jpg" height="650" width="1920"  alt="">
                       
                    </li>

                    <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                                            </li>
                </ul>
            </div>
        </div>
        <div class="empty-space marg-lg-b85 marg-md-b60"></div>


        <!-- TT-TWO-BLOCK -->
        <div class="bg-2">
            <div class="tt-two-blocks">
                <div class="container">

                    <div class="empty-space marg-lg-b70 marg-md-b60" ></div>
                   







                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="tt-block-title type-2 color-2 c-h3"><i class="fa fa-users" aria-hidden="true"></i><span>DAFTAR SEKARANG</span></h3>
                            <div class="empty-space marg-lg-b45 marg-md-b30"></div>

                            <div class="tt-shedule-form">

															<?php echo validation_errors('<p class="error">'); ?>
															<?php echo form_open("UserIndex/registration"); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="c-input" name="namaLengkap" type="text" placeholder="Nama Lengkap" autofocus required>
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="c-input" name="alamat" type="text" placeholder="Alamat" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                          <input class="c-input" name="telepon" type="number" placeholder="No. Telpon" min="0" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="c-input" id="emailIn" name="emailIn" type="email" placeholder="Email" autocomplete="off" required>
																				<span id="line2" class="text-left"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="c-input" name="password" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="c-input" name="conPassword" type="password" placeholder="Konfirmasi Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                            <? echo $captcha ?>


                                    </div>

                                </div>
																	<br>
                                <div class="c-btn type-1 size-3 font-3 color-4">
																	<div class="col-sm-6">
<input type="submit" id="submit" name="submit" value="DAFTAR SEKARANG">

																	</div>
                                </div>
																<?=$this->session->flashdata('pesan')?>
																 <?php echo form_close(); ?>
                            </div>
                        </div>
 

<div class="col-sm-6 wow fadeInRight">
            <img src="<?php echo base_url(); ?>img/provinsi_3.png" style="vertical-align: middle; margin-left:120px;">
          </div>

                    </div>
                    <div class="empty-space marg-lg-b80 marg-md-b60"></div>
                </div>
            </div>
        </div>

        <!-- TT-PROJECT -->
        <div class="container">
            <div class="empty-space marg-lg-b70 marg-md-b60"></div>
            <h3 class="tt-block-title c-h3">dokumentasi kegiatan</h3>
            <div class="empty-space marg-lg-b50 marg-md-b30"></div>

            <div class="tt-project-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/1.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan Dalam Kota</h4>
                            
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/2.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan Lagoi</h4>
                            
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/3.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan Dalam Kota</h4>
                            
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/4.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan A.Yani</h4>
                            
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/5.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan A.Yani</h4>
                            
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="tt-project">
                            <img class="img-responsive" src="<?php echo base_url();?>img/6.jpg" height="241" width="370" alt="">
                            <h4 class="tt-project-title-bottom">Perbaikan Jalan Roro Dompak</h4>
                           
                        </div>
                        <div class="empty-space marg-lg-b30"></div>
                    </div>
                </div>
            </div>
            <div class="empty-space marg-lg-b50 marg-md-b30"></div>
        </div>

        <div class="bg-1">
            <div class="container">
                <div class="empty-space marg-lg-b70 marg-md-b60"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tt-block-title c-h3">daftar pengaduan</h3>
                        <div class="empty-space marg-lg-b50 marg-md-b30"></div>
												<div class="tt-white-wrapper type-2">
														<div class="tt-request-form">

																		<div class="row">

													<link href="<?php echo base_url();?>assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
													<link href="<?php echo base_url();?>assets/media/css/jquery.dataTables.min.css" rel="stylesheet">
													<link href="<?php echo base_url();?>assets/media/css/responsive.css" rel="stylesheet">

													<table id="table" class="cell-border hover dt-responsive" cellspacing="0" width="100%" >

																<thead>
																	<tr>
																		<th style="text-align: center;width:10px;">No</th>
																			<th style="text-align: center;width:100px;">Tanggal Lapor</th>
																		<th style="text-align: center;width:135px;">Kota/Kabupaten</th>
																		<th style="text-align: center;">Nama Jalan</th>
																		<th style="text-align: center;width:185px;">Status Laporan</th>
																		<th style="text-align: center;width:155px;">Foto Laporan</th>
																		<th style="text-align: center;width:70px;">Detail</th>
																	</tr>
																</thead>

																<tbody style="text-align:center;">
																</tbody>


																</table>

																<script src="<?php echo base_url(); ?>assets/jquery-2.1.4.min.js"></script>

																	<script src="<?php echo base_url(); ?>assets/media/js/jquery.dataTables.min.js"></script>
																<script src="<?php echo base_url(); ?>assets/media/js/responsive2.js"></script>
																	<script src="<?php echo base_url(); ?>assets/media/js/dataTables.bootstrap.min.js"></script>
																	<script type="text/javascript">

																		var save_method; //for save method string
																		var table;
																		$(document).ready(function() {
																			table = $('#table').DataTable({
																responsive: true,

																				"processing": true, //Feature control the processing indicator.
																				"serverSide": true, //Feature control DataTables' server-side processing mode.

																				// Load data for the table's content from an Ajax source
																				"ajax": {
																						"url": "<?php echo site_url('index/ajax_list')?>",
																						"type": "POST"
																				},

																				//Set column definition initialisation properties.
																				"columnDefs": [
																				{
																					"targets": [ -1 ], //last column
																					"orderable": false, //set not orderable
																				},
																				],

																			});
																		});







																		function add_person()
																		{
																			save_method = 'add';
																			$('#form')[0].reset(); // reset form on modals
																			$('#modal_form').modal('show'); // show bootstrap modal
																			$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
																		}

																		function edit_person(id)
																		{
																			save_method = 'update';
																			$('#form')[0].reset(); // reset form on modals

																			//Ajax Load data from ajax
																			$.ajax({
																				url :"<?php echo base_url('index/ajax_edit')?>/"+id,
																				type: "GET",
																				dataType: "JSON",
																				success: function(data)
																				{

																						$('[name="id"]').val(data.id_user);
																						$('[name="Nama"]').html(data.Nama);
																						$('[name="Email"]').html(data.email);
																						$('[name="tlp"]').html(data.tlp_mhs);
																						$('[name="tempat_lahir"]').html(data.tempat_lahir);
																						$('[name="tanggal_lahir"]').html(data.tanggal_lahir);
																						$('[name="SizeBaju"]').html(data.SizeBaju);
																						$('[name="tahun"]').html(data.tahun_masuk);
																						$('[name="sks"]').html(data.jumlah_sks);
																						$('[name="tlp_ortu"]').html(data.telp_ayah);
																						$('[name="penyakit"]').html(data.penyakit_keras);
																						$('[name="alergi"]').html(data.alergi);
																						$('[name="datang"]').html(data.tanggal_datang);
																						$('[name="pulang"]').html(data.tanggal_pulang);

																						$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
																						$('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

																				},
																				error: function (jqXHR, textStatus, errorThrown)
																				{
																						alert('Error get data from ajax');


																				}
																		});
																		}

																		function reload_table()
																		{
																			table.ajax.reload(null,false); //reload datatable ajax
																				table1.ajax.reload(null,false);
																		}

																		function save()
																		{
																			var url;
																			if(save_method == 'add')
																			{
																					url = "<?php echo site_url('person/ajax_add')?>";
																			}
																			else
																			{
																				url = "<?php echo site_url('person/ajax_update')?>";
																			}

																			 // ajax adding data to database
																					$.ajax({
																						url : url,
																						type: "POST",
																						data: 'No',
																						dataType: "JSON",
																						success: function(data)
																						{
																							 //if success close modal and reload ajax table
																							 $('#modal_form').modal('hide');
																							 reload_table();
																						},
																						error: function (jqXHR, textStatus, errorThrown)
																						{
																								alert('Error adding / update data');
																						}
																				});
																		}

																		function delete_person(id)
																		{
																			if(confirm('Are you sure delete this data?'))
																			{
																				// ajax delete data to database
																					$.ajax({
																						url : "<?php echo site_url('Panitia/DaftarPeserta/ajax_delete')?>/"+id,
																						type: "POST",
																						dataType: "JSON",
																						success: function(data)
																						{
																							 //if success reload ajax table
																							 $('#modal_form').modal('hide');
																							 reload_table();
																						},
																						error: function (jqXHR, textStatus, errorThrown)
																						{
																								alert('Error adding / update data');
																						}
																					});

																			}
																		}

																	</script>

                        </div>
											</div>
										</div>

                        <div class="empty-space marg-md-b60"></div>
                    </div>


                </div>
                <div class="empty-space marg-lg-b30 marg-md-b50"></div>

								<div class="col-md-13 col-sm-13">
								<div class="panel panel-primary">
								<div class="panel-heading"><span class="fa fa-globe "></span> Lokasi</div>
								<div class="panel-body" style="height:600px;" id="map-canvas">
								</div>
								</div>
								</div>
<div class="empty-space marg-lg-b80 marg-md-b50 marg-xs-b30"></div>

            </div>
        </div>
    </div>


    <!-- FOOTER -->

    <footer class="tt-footer">
        <div class="container">
            <div class="empty-space marg-lg-b110 marg-md-b50 marg-xs-b30"></div>
            <div class="row">


                <div class="col-sm-6 col-md-3">
                    <h4 class="tt-footer-title">contact info</h4>
                    <div class="empty-space marg-lg-b20"></div>

                    <div class="tt-footer-contact">
                        <i class="fa fa-map-marker"></i>
												Kompleks Perkantoran Pemerintah Kepulauan Riau Gedung C2 Lantai I
                    </div>
										<div class="tt-footer-contact">
												<i class="fa fa-globe "></i>
												Pulau Dompak, Tanjungpinang
										</div>
                    <div class="tt-footer-contact">
                        <i class="fa fa-phone"></i>
                        +62-8989747242
                    </div>
										<div class="tt-footer-contact">
                        <i class="fa fa-fax"></i>
                        +62-81270060081                    </div>
                    <div class="tt-footer-contact">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:layanan@qrpuprovkepri.com">layanan@qrpuprovkepri.com</a>
                    </div>
                    <div class="tt-footer-contact">
                        <i class="fa fa-map-marker"></i>
                        Senin - Jum'at : 08.00 - 16.00

                    </div>
                    <div class="empty-space marg-md-b30"></div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="tt-footer-title">Link terkait</h4>
                    <div class="empty-space marg-lg-b20"></div>

										<div class="tt-footer-contact">
                        <i class="fa fa-external-link-square"></i>
                  <a href="http://pu.kepriprov.go.id/index.php">Dinas PU Kepulauan Riau</a>
                    </div>
										<div class="tt-footer-contact">
                        <i class="fa fa-external-link-square"></i>
                  <a href="http://pu.go.id/">Dinas PU Republik Indonesia</a>
                    </div>
                    <div class="empty-space marg-lg-b25"></div>

                    <div class="tt-footer-social">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                    </div>
                    <div class="empty-space marg-md-b30"></div>
                </div>
            </div>
            <div class="empty-space marg-lg-b70 marg-md-b50 marg-xs-b30"></div>
        </div>
        <div class="tt-footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="tt-footer-copy">Copyright © 2016.</a></div>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
    </footer>


		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" align="center">
							<img class="img-rounded" id="img_logo" src="<?php echo base_url();?>img/provinsi.png">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="fa fa-times " aria-hidden="true"></span>
							</button>
						</div>

		                <!-- Begin # DIV Form -->
		                <div id="div-forms">

		                    <!-- Begin # Login Form -->
		                    <div id="login-form">
													<?php echo form_open("UserIndex/cek_login"); ?>
				                <div class="modal-body">
						    		<div id="div-login-msg">
		                                <div id="icon-login-msg" class="fa fa-chevron-circle-right "></div>
		                                <span id="text-login-msg">masukkan Email dan password anda</span>
		                            </div>

						    		<input id="login_username" name="email" class="form-control" type="email" placeholder="Email" required>
						    		<input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox"> Remember me
		                                </label>
		                            </div>
		        		    	</div>
						        <div class="modal-footer">
		                            <div>
		                                <button type="submit" class="btn btn-primary btn-lg btn-block">MASUK</button>
		                            </div>

						        </div>
										  <?php echo form_close(); ?>
									</div>
		                    <!-- End # Login Form -->

		                    <!-- Begin | Lost Password Form -->
		                    <form id="lost-form" style="display:none;">
		    	    		    <div class="modal-body">
				    				<div id="div-lost-msg">
		                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
		                                <span id="text-lost-msg">Type your e-mail.</span>
		                            </div>
				    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
		            			</div>
				    		    <div class="modal-footer">
		                            <div>
		                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
		                            </div>
		                            <div>
		                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
		                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
		                            </div>
				    		    </div>
		                    </form>
		                    <!-- End | Lost Password Form -->

		                    <!-- Begin | Register Form -->
		                    <form id="register-form" style="display:none;">
		            		    <div class="modal-body">
				    				<div id="div-register-msg">
		                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
		                                <span id="text-register-msg">Register an account.</span>
		                            </div>
				    				<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
		                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
		                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
		            			</div>
				    		    <div class="modal-footer">
		                            <div>
		                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
		                            </div>
		                            <div>
		                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
		                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
		                            </div>
				    		    </div>
		                    </form>
		                    <!-- End | Register Form -->

		                </div>
		                <!-- End # DIV Form -->

					</div>
				</div>
			</div>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/idangerous.swiper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/imagelightbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
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
			url : "<?php echo base_url('index.php/Index/viewMarker')?>/"+id,
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
	</body>
</html>
