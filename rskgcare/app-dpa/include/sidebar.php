<?php 
$user = $_SESSION['username'];
mysql_connect('localhost', 'root', '');
mysql_select_db('rskg_dpa'); 
$role = mysql_query("SELECT * FROM tb_user WHERE username = '$user' ");
$data = mysql_fetch_array($role);
/*VALIDATION FOR FILTER USER = ADMINISTARTOR ALL */
/*START VALIDATION AND SHOW MENU LIST*/
?>
<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
          <li class="nav-divider">
            Menu
          </li>
          <?php if ($data['user_role'] == 'admin') { ?>
            <li class="nav-item ">
              <a class="nav-link" href="index.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="nav-icon fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="nota_intern.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-bookmark"></i>Nota Intern</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="agenda_rapat.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-calendar"></i>Agenda Rapat</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="surat_keputusan.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-clipboard"></i>Surat Keputusan</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="dokumen_eksternal.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-file"></i>Dokumen Eksternal</a>
            </li>
            <li class="nav-divider">
              Features
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="kode.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-file"></i>Kode Bagian/Instalasi/Komite</a>
            </li>
          <?php } ?>
          <?php if ($data['user_role'] == 'superadmin') { ?>
            <li class="nav-item ">
              <a class="nav-link" href="index.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="nav-icon fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="nota_intern.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-bookmark"></i>Nota Intern</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="agenda_rapat.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-calendar"></i>Agenda Rapat</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="surat_keputusan.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-clipboard"></i>Surat Keputusan</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="dokumen_eksternal.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-file"></i>Dokumen Eksternal</a>
            </li>
            <li class="nav-divider">
              Features
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="kode.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-file"></i>Kode Bagian/Instalasi/Komite</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="users.php?ntf=0" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fas fa-users"></i>Users</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </div>
</div>