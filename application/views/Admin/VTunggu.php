
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
             <div class="main-content">
                 <!-- ###### -->
                 <!-- Header -->
                 <!-- ###### -->
 				<div class="row">
 				    <div class="col s12">
 				        <div class="page-header">
 				            <h1>
 				                <i class="material-icons">grid_on</i> LAPORAN BELUM DIVERIVIKASI
 				            </h1>

 				            <p>Daftar Laporan Masuk Yang Belum Di Verifikasi</p>
 				        </div>
 				    </div>
 				</div>


                 <!-- #### -->
                 <!-- Body -->
                 <!-- #### -->
 				<section id="app_datatables">
 					<!-- ########## -->
 					<!-- DataTables -->
 					<!-- ########## -->
 					<div class="row">
 						<div class="col s12">




              <link href="<?php echo base_url();?>assets/media/css/jquery.dataTables.min.css" rel="stylesheet">


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




            <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 style="color : white;"> Detail Mahasiswa </h3>
                  </div>
                  <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                      <input type="hidden" value="" name="id"/>

                      <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;" >Nama Lengkap</label>

                          <div class="col-md-5" style="margin-top : 7px;">

                          : <span name="Nama"></span>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Email</label>
                          <div class="col-md-7" style="margin-top : 7px;">

                          : <span name="Email"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">No Telepon</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="tlp"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Tempat Lahir</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="tempat_lahir"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Tanggal Lahir</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="tanggal_lahir"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Tahun Masuk</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="tahun"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Jumlah SKS</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="sks"></span> sks
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">No Telepon Orang Tua</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="tlp_ortu"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Penyakit</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="penyakit"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Alergi</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="alergi"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Tanggal Kedatangan</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="datang"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-4" style="text-align : left;">Tanggal Kepulangan</label>
                          <div class="col-md-5" style="margin-top : 7px;">
                          : <span name="pulang"></span>
                          </div>
                        </div>
                      </div>
                    </form>
                      </div>
                      <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
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
        <script src="<?php echo base_url();?>assets/Admin/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/Admin/js/datatables.js" type="text/javascript"></script>

  </html>
