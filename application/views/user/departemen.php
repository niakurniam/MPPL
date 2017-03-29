<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"> <!-- Resource style -->
  <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script> <!-- Modernizr -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/table.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/dropdown.css">

  <style type="text/css">
    html{
      font-size: 60%;
    }

    .cd-side-nav > ul > li > a::before {
    /* icon before item name */
    background: url(assets/images/cd-nav-icons.svg) no-repeat 0 0;
    }

    .has-children > a::after {
      /* arrow icon */
      background: url(assets/images/cd-arrow.svg);
    }

    .cd-search::before {
      /* lens icon */
      background: url(assets/images/cd-search.svg) no-repeat 0 0;
    }

    .cd-main-content .content-wrapper h1 {
      text-align: left;
      padding: 2em 0;
    }

    #top-table{
      margin-top: 30px;
    }

    #margin-top1{
      margin-top: -30px;
    }

    .ui.selection.dropdown {
  cursor: pointer;
  word-wrap: break-word;
  line-height: 1em;
  white-space: normal;
  outline: 0;
  -webkit-transform: rotateZ(0deg);
          transform: rotateZ(0deg);
  min-width: 14em;
  min-height: 2.71428571em;
  background: #FFFFFF;
  display: inline-block;
  padding: 0.78571429em 2.1em 0.78571429em 1em;
  color: rgba(0, 0, 0, 0.87);
  box-shadow: none;
  border: 1px solid rgba(34, 36, 38, 0.15);
  border-radius: 0.28571429rem;
  -webkit-transition: box-shadow 0.1s ease, width 0.1s ease;
  transition: box-shadow 0.1s ease, width 0.1s ease;
}
.ui.selection.dropdown.visible,
.ui.selection.dropdown.active {
  z-index: 10;
}
select.ui.dropdown {
  height: 38px;
  padding: 0.5em;
  border: 1px solid rgba(34, 36, 38, 0.15);
  visibility: visible;
}
.ui.selection.dropdown > .search.icon,
.ui.selection.dropdown > .delete.icon,
.ui.selection.dropdown > .dropdown.icon {
  cursor: pointer;
  position: absolute;
  width: auto;
  height: auto;
  line-height: 1.21428571em;
  top: 0.78571429em;
  right: 1em;
  z-index: 3;
  margin: -0.78571429em;
  padding: 0.78571429em;
  opacity: 0.8;
  -webkit-transition: opacity 0.1s ease;
  transition: opacity 0.1s ease;
}

/* Compact */
.ui.compact.selection.dropdown {
  min-width: 0px;
}

/*  Selection Menu */
.ui.selection.dropdown .menu {
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-overflow-scrolling: touch;
  border-top-width: 0px !important;
  width: auto;
  outline: none;
  margin: 0px -1px;
  min-width: calc(100% +  2px );
  width: calc(100% +  2px );
  border-radius: 0em 0em 0.28571429rem 0.28571429rem;
  box-shadow: 0px 2px 3px 0px rgba(34, 36, 38, 0.15);
  -webkit-transition: opacity 0.1s ease;
  transition: opacity 0.1s ease;
}
.ui.selection.dropdown .menu:after,
.ui.selection.dropdown .menu:before {
  display: none;
}

  </style>
    
  <title>Departemen | HMTCalendar</title>
</head>
<body>
  <header class="cd-main-header">
    <a href="#0" class="cd-logo"><img src="<?php echo base_url(); ?>assets/images/cd-logo.svg" alt="Logo"></a>
    
    <div class="cd-search is-hidden">
      <form action="#0">
        <input type="search" placeholder="Search...">
      </form>
    </div> <!-- cd-search -->

    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>

    <nav class="cd-nav">
      <ul class="cd-top-nav">
        <li class="has-children account">
          <a href="#0">
            <img src="<?php echo base_url(); ?>assets/images/user.png" alt="avatar">
            User
          </a>

          <ul>
            <li><a href="#0">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header> <!-- .cd-main-header -->

  <main class="cd-main-content">
    <nav class="cd-side-nav">
      <ul>
        <li class="cd-label">Menu</li>
        <li class="has-children overview">
          <a href="#0">Dashboard</a>
        </li>
        <li class="has-children bookmarks">
          <a href="#0">Kepengurusan</a>
        </li>

        <li class="has-children comments active">
          <a href="#0">Departemen</a>
        </li>

        <li class="has-children users">
          <a href="#0">Anggota</a>
        </li>

        <li class="has-children images">
          <a href="#0">Gallery</a>
          
          <ul>
            <li><a href="#0">Tambah Foto</a></li>
          </ul>
        </li>

        <li class="has-children date">
          <a href="#0">Event</a>
          
          <ul>
            <li><a href="#0">Tambah Event</a></li>
            <li><a href="#0">Edit Event</a></li>
            <li><a href="#0">Penilaian Event</a></li>
          </ul>
        </li>

      </ul>

      <ul>
        <li class="cd-label">Action</li>
        <li class="action-btn"><a href="#0">+ Button</a></li>
      </ul>
    </nav>

    <div class="content-wrapper">
      <h1>Departemen</h1>
      <div class="ui divider" id="margin-top1"></div>
        <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">Gender</div>
          <div class="menu">
            <div class="item" data-value="male" data-text="Male">
              <i class="male icon"></i>
              Male
            </div>
            <div class="item" data-value="female" data-text="Female">
              <i class="female icon"></i>
              Female
            </div>
          </div>
      </div>
           <div class="column" id="top-table" style="width: 50%">
            <table class="ui celled selectable center aligned table" id="table1">
              <thead>
                <th class="center aligned" style="width: 1%">No.</th>
                <th style="width: 10%; margin-right: 12px">Nama Departemen</th>
              </thead>
              <tbody>
                <tr>
                  <td class="center aligned">1</td>
                  <td class="left aligned">Departemen PSDM</td>
                </tr>
                <tr>
                  <td class="center aligned">2</td>
                  <td class="left aligned">Departemen Dalam Negeri</td>
                </tr>
                <tr>
                  <td class="center aligned">3</td>
                  <td class="left aligned">Departemen Pengembangan Profesi</td>
                </tr>
                <tr>
                  <td class="center aligned">4</td>
                  <td class="left aligned">Departemen Hubungan Luar</td>
                </tr>
                <tr>
                  <td class="center aligned">5</td>
                  <td class="left aligned">Departemen Ristek</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script> <!-- Resource jQuery -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/semantic.js">

</body>
</html>