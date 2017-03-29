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
      margin-top: -30px;
    }

  </style>
    
  <title>Kepengurusan | HMTCalendar</title>
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
        <li class="has-children bookmarks active">
          <a href="#0">Kepengurusan</a>
        </li>

        <li class="has-children comments">
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
      <h1>Kepengurusan</h1>

       <div class="column" id="top-table" style="width: 70%">
        <table class="ui celled selectable center aligned table">
          <thead>
            <th class="center aligned" style="width: 35%">Nama Kepengurusan</th>
            <th style="width: 20%">Tahun Mulai</th>
            <th style="width: 20%">Tahun Berakhir</th>
          </thead>
          <tbody>
            <tr>
              <td class="center aligned">Tasia</td>
              <td>12</td>
              <td>7g</td>
            </tr>
            <tr>
              <td class="center aligned">Ronnie</td>
              <td>38</td>
              <td>37g</td>
            </tr>
            <tr>
              <td class="center aligned">Gabriel</td>
              <td>30</td>
              <td>46g</td>
            </tr>
            <tr>
              <td class="center aligned">Logan</td>
              <td>12</td>
              <td>21g</td>
            </tr>
            <tr>
              <td class="center aligned">Clare</td>
              <td>39</td>
              <td>41g</td>
            </tr>
          </tbody>
        </table>
  </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script> <!-- Resource jQuery -->
<script type="text/javascript">
  var dt = new Date();
  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script> <!-- Show Current Date -->

</body>
</html>