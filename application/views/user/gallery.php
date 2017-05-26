<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Gallery | HMTCalendar </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/vendor.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/app-seagreen.css">
        <!-- Theme initialization -->
        <style type="text/css">
            #table-right{
                margin-left: 10px;
                margin-right: 10px;
            }

            th {
                text-align: center;
            }

            #dropdown-right{
                margin-left: 15px;
                margin-right: 15px;
            }

            .header .header-block-nav .profile .img
            {
                background-color: #d7dde4;
            }
        </style>
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-buttons">
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('assets/user.png')"> </div> <span class="name">
                      User
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="<?php echo base_url('logout') ?>"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> SI HMTCalendar </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li>
                                   <a href="<?php echo base_url('event_controller/list_event_today2'); ?>"> <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('kepengurusan_controller/tampil_kepengurusan'); ?>"> <i class="fa fa-group"></i> Kepengurusan </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('departemen_controller/daftar_departemen'); ?>"> <i class="fa fa-flag"></i> Departemen </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('anggota_controller/daftar_anggota'); ?>"> <i class="fa fa-user"></i> Anggota </a>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-picture-o"></i> Gallery <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="<?php echo base_url('gallery_controller/foto'); ?>">
                                        Lihat Foto
                                        </a> </li>
                                        <li> <a href="<?php echo base_url('gallery_controller/upload_foto') ?>">
                                        Tambah Foto
                                        </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-calendar"></i> Event <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="<?php echo base_url('event_controller/daftar_event'); ?>">
                                            Lihat Event
                                        </a> </li>
                                        <li> <a href="<?php echo base_url('event_controller/adding_event'); ?>">
                                            Tambah Event
                                            </a> </li>
                                            <li> <a href="<?php echo base_url(); ?>penilaian_controller/daftar_penilaian">
                                            Penilaian Event
                                        </a> </li>
                                        <li> <a href="<?php echo base_url(); ?>penilaian_controller/adding_penilaian">
                                            Tambah Penilaian
                                        </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Gallery </h1>
                    </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item" id="table-right">
                        <!--    <div class="title-block">
                                <h3 class="title"> Inline Forms </h3>
                            </div> -->
                        <div class="col-md-12">
                            <form class="form-inline">
                                <div class="form-group"> <label for="tahun_kepengurusan">Kepengurusan</label> <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                </div>
                                <div class="form-group"> <label for="nama_departemen">Departemen</label> <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                </div>
                                <div class="checkbox"> <label>
                                    <input type="checkbox"> Remember me
                                </label> </div>
                                &nbsp
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card" id="table-right">
                            <div class="card-block">
                                    <!--    <section class="example">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%">No</th>
                                                        <th style="width: 20%">Departemen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center">1</td>
                                                        <td>Otto</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">2</td>
                                                        <td>Thornton</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">3</td>
                                                        <td>the Bird</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </section> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </article>
                <footer class="footer">
                    <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                            <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                        </ul>
                    </div>
                </footer>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>
                                <h4 class="modal-title">Media Library</h4>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="<?php echo base_url() ?>js/vendor.js"></script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
        <script type="text/javascript">
		  var dt = new Date();
		  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
		</script> <!-- Show Current Date -->

    </body>

</html>
