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
                            <a href="#"><i class="fa fa-home"></i>Dashboard</a>

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
                        <h4 class="page-title">MENU DAFTAR LAPORAN ON-GOING</h4>
                        <p class="text-muted page-title-alt">SELAMAT DATANG DI HALAMAN OPERATOR</p>
                    </div>
                </div>




                <div class="row">
                    <div class="col-sm-13">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Tabel Daftar LAPORAN</b></h4>
                              <h5><i>Menampilkan daftar pengaduan yang sudah diverifikasi oleh operator. Klik detail untuk mengupdate status laporan.</i></h5>
                            <br>
                            <link href="<?php echo base_url();?>assets/media/css/jquery.dataTables.min.css" rel="stylesheet">
                              <link href="<?php echo base_url();?>assets/Operator/css/buttons.dataTables.min.css" rel="stylesheet">
                              <link href="<?php echo base_url();?>assets/media/css/responsive.css" rel="stylesheet">


                            <table id="table" class="hover dt-responsive" cellspacing="0" width="100%" >

                                  <thead>
                                    <tr>
                                      <th style="text-align: center;width:10px;">No</th>
                                      <th style="text-align: center;width:90px;">Tanggal Lapor</th>
                                      <th style="text-align: center;width:135px;">Kota/Kabupaten</th>
                                      <th style="text-align: center;width:165px;">Nama Jalan</th>
                                      <th style="text-align: center;width:165px;">Detail Laporan</th>
                                      <th style="text-align: center;width:155px;">Foto Laporan</th>
                                      <th style="text-align: center;width:180px;">Detail</th>
                                    </tr>
                                  </thead>

                                  <tbody style="text-align:center;">
                                  </tbody>


                                  </table>

                                  <script src="<?php echo base_url(); ?>assets/jquery-2.1.4.min.js"></script>

                                    <script src="<?php echo base_url(); ?>assets/media/js/jquery.dataTables.min.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/Operator/js/dataTables.buttons.min.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/Operator/js/buttons.print.min.js"></script>
                                  <script src="<?php echo base_url(); ?>assets/media/js/responsive2.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/media/js/dataTables.bootstrap.min.js"></script>
                                    <script type="text/javascript">

                                    var save_method; //for save method string
                                    var table;
                                    $(document).ready(function() {
                                      table = $('#table').DataTable({
                                        dom: 'Bfrtip',
                                        buttons: [
                                        'print'
                                        ],
                                responsive: true,

                                        "processing": true, //Feature control the processing indicator.
                                        "serverSide": true, //Feature control DataTables' server-side processing mode.

                                          // Load data for the table's content from an Ajax source
                                          "ajax": {
                                              "url": "<?php echo site_url('Admin/DaftarLaporan/ajax_list')?>",
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
                                          url :"<?php echo base_url('index.php/Admin/DaftarLaporan/ajax_edit')?>/"+id,
                                          type: "GET",
                                          dataType: "JSON",
                                          success: function(data)
                                          {
                                              $('[name="idlapor"]').val(data.idLaporan);
                                              $('[name="id"]').html(data.idLaporan);
                                              $('[name="nama"]').html(data.namaLengkap);
                                              $('[name="tgl"]').html(data.tanggalLaporan);
                                              $('[name="namaKota"]').html(data.namaKota);
                                              $('[name="jalan"]').html(data.namaJalan);
                                              $('[name="detail"]').html(data.detailLaporan);
                                              $('[name="status"]').html(data.status);

                                              $('#con-close-modal').modal('show'); // show bootstrap modal when complete loaded
                                              $('.modal-title').text('DETAIL LAPORAN'); // Set title to Bootstrap modal title

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

                                      }

                                      function save()
                                      {
                                        if(confirm('Yakin verifikasi laporan ini?'))
                                        {

                                        var id = $("#idlapor").val();
                                        var Terselesaikan= $("#Terselesaikan").val();



                                         // ajax adding data to database
                                            $.ajax({
                                              url : "<?php echo base_url('index.php/Admin/DaftarLaporan/ajax_confirm')?>/"+id,
                                              type: "POST",
                                              data : $("#form").serialize(),
                                              dataType: "JSON",
                                              success: function(data)
                                              {
                                                if (data){
                                                 //if success close modal and reload ajax table
                                                 $('#con-close-modal').modal('hide');
                                                    $.Notification.notify('success','bottom right','Laporan Berhasil Di update', 'Laporan yang sudah terselesaikan akan masuk ke table laporan terselesaikan!!.');
                                                 reload_table();
                                               }
                                              },
                                              error: function (jqXHR, textStatus, errorThrown)
                                              {
                                                  alert('Error adding / update data');
                                              }
                                          });
                                      }
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
                      </div>                <!-- end row -->


                      <div class="row">
                    <div class="col-sm-13">
                      <div class="panel panel-primary">
                      <div class="panel-heading"><span class="fa fa-globe "></span> Lokasi</div>
                      <div class="panel-body" style="height:600px;" id="map-canvas">
                      </div>
                      </div>
                      </div>
                    </div>



                <!-- end row -->


                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Modal Content is Responsive</h4>
                                        </div>
                                         <form action="#" id="form" class="form-horizontal">
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-4" style="text-align : left;" >ID </label>
                                                      <input type="hidden" value="" id="idlapor" name="idlapor"/>
                                                      <div class="col-md-5" style="margin-top : 7px;">

                                                        : <span name="id"></span>

                                                      </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-4" style="text-align : left;">NAMA PELAPOR</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="nama"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-4" style="text-align : left;">TANGGAL LAPOR</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="tgl"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-4" style="text-align : left;">KOTA / KABUPATEN</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="namaKota"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label class="control-label col-md-4" style="text-align : left;">NAMA JALAN</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="jalan"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin">
                                                      <label class="control-label col-md-4" style="text-align : left;">DETAIL LAPORAN</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="detail"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin">
                                                      <label class="control-label col-md-4" style="text-align : left;">STATUS LAPORAN</label>
          <div class="col-md-7" style="margin-top : 7px;">

          : <span name="status"></span>
          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin">
                                                      <label class="control-label col-md-4" style="text-align : left;">UPDATE STATUS</label>
          <div class="col-md-6">

           <select id="updateStatus" name="updateStatus" class="form-control col-md-6" >
              <option value="Menunggu Verifikasi">Menunggu Verifikasi</option>
             <option value="Sedang diproses">Sedang diproses</option>
  <option value="Survey Lapangan">Survey Lapangan</option>
  <option value="Perbaikan">Perbaikan</option>
  <option value="Pending">Terselesaikan</option>
</select>
          </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                         </form>
                                        <div class="modal-footer">
                                            <button type="submit" onclick="save()" class="btn btn-danger waves-effect waves-light">Update Laporan</button>
                                              <button type="button" id="simpanVerifikasi"  class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





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
