<?php
include "include/connection.php";

// DATE
function tanggal_indo($tanggal, $cetak_hari = false)
{
  $hari = array ( 1 =>    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu'
  );
  $bulan = array (1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $split    = explode('-', $tanggal);
  $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
  
  if ($cetak_hari) {
    $num = date('N', strtotime($tanggal));
    return $hari[$num] . ', ' . $tgl_indo;
  }
  return $tgl_indo;
}

// ADD
if(isset($_POST["submit"]))    
{    
  $id_tlpkel       = $_POST['id_tlpkel'];
  $ext             = $_POST['ext'];
  $telepon         = $_POST['telepon'];
  $PIC             = $_POST['PIC'];
  $keterangan      = $_POST['keterangan'];
  $date_tlpkel     = $_POST['date_tlpkel'];
  $date_tlp        = $_POST['date_tlp'];

  $query = mysql_query("INSERT INTO tb_tlpkel 
    (id_tlpkel,ext,telepon,PIC,keterangan,date_tlpkel,date_tlp) 
    VALUES 
    ('','$ext','$telepon','$PIC','$keterangan','$date_tlpkel','$date_tlp')
    ");
  if ($query) {
    header("Location: ./telepon-keluar.php?ntf=1");  
  } else {
    header("Location: ./telepon-keluar.php?ntf=6");
  }
}

// EDIT
if(isset($_POST["update"]))    
{    
  $id_tlpkel       = $_POST['id_tlpkel'];
  $ext             = $_POST['ext'];
  $telepon         = $_POST['telepon'];
  $PIC             = $_POST['PIC'];
  $keterangan      = $_POST['keterangan'];
  $date_tlpkel     = $_POST['date_tlpkel'];
  $date_tlp        = $_POST['date_tlp'];

  $query = mysql_query("UPDATE tb_tlpkel SET 
    ext ='$ext',
    telepon = '$telepon',
    PIC = '$PIC',
    keterangan = '$keterangan',
    date_tlpkel = '$date_tlpkel',
    date_tlp = '$date_tlp'
    WHERE id_tlpkel ='$id_tlpkel'");
  if($query){
    header("Location: ./telepon-keluar.php?ntf=4");                                                  
  } else {
    echo "Updated Failed - Please contact your Administrator";
  }
} 

// DELETE
if(isset($_POST['delete']))
{
  $id_tlpkel = $_POST['id_tlpkel'];

  if($id_tlpkel){
    $query = mysql_query("DELETE FROM tb_tlpkel WHERE id_tlpkel = '$id_tlpkel'");
    if($query){
     header("Location: ./telepon-keluar.php?ntf=3");                     
   } else {
    header("Location: ./telepon-keluar.php?ntf=6");  
  }
} else {
  header("Location: ./telepon-keluar.php?ntf=6");  
}
}

// SEARCH
if(isset($_POST["search"]))
{    
  $query1 = '';
  if ($_POST['month']) {
    $query1 = "tanggal[month] ='$_POST[month]'";
  } else {
    if ($_POST['year']) {
      if ($query1 != '') {
        $query1 .= ' and ';
      }
      $query1 .= "tanggal[year] ='$_POST[year]'";
    }
  }
} else {
  $query1 = "tanggal[month] ='No Data' ";
  $query1 .= "and tanggal[year] ='No Data' ";
}
?>
<!DOCTYPE html>
<html>
<?php include 'include/header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include 'include/top-header.php'; ?>
    <?php include 'include/sidebar.php'; ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">
                Telepon Keluar
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Telepon Keluar</a></li>
                <li class="breadcrumb-item active">SIRS ADM</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ISI -->
      <section class="content">
        <div class="container-fluid">

          <!-- SEARCH -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-search"></i> Cari Data</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form method="post" action="">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Bulan</label>
                      <select name="month" class="form-control" id="month">
                        <option value>-- Pilih Bulan --</option>
                        <option value="1" <?= !empty($month_) && $month_ == '1' ? 'selected' : '' ?>>Januari</option>
                        <option value="2" <?= !empty($month_) && $month_ == '2' ? 'selected' : '' ?>>Februari</option>
                        <option value="3" <?= !empty($month_) && $month_ == '3' ? 'selected' : '' ?>>Maret</option>
                        <option value="4" <?= !empty($month_) && $month_ == '4' ? 'selected' : '' ?>>April</option>
                        <option value="5" <?= !empty($month_) && $month_ == '5' ? 'selected' : '' ?>>Mei</option>
                        <option value="6" <?= !empty($month_) && $month_ == '6' ? 'selected' : '' ?>>Juni</option>
                        <option value="7" <?= !empty($month_) && $month_ == '7' ? 'selected' : '' ?>>Juli</option>
                        <option value="8" <?= !empty($month_) && $month_ == '8' ? 'selected' : '' ?>>Agustus</option>
                        <option value="9" <?= !empty($month_) && $month_ == '9' ? 'selected' : '' ?>>September</option>
                        <option value="10" <?= !empty($month_) && $month_ == '10' ? 'selected' : '' ?>>Oktober</option>
                        <option value="11" <?= !empty($month_) && $month_ == '11' ? 'selected' : '' ?>>November</option>
                        <option value="12" <?= !empty($month_) && $month_ == '12' ? 'selected' : '' ?>>Desember</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tahun</label>
                      <select name="year" class="form-control" id="year">
                        <option value>-- Pilih Tahun --</option>
                        <?php for ($i=2015; $i < 2031; $i++) { ?>
                          <option value="<?= $i ?>" <?= !empty($year_) && $year_ == $i ? 'selected' : '' ?>><?= $i ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="search" id="search" class="btn btn-block btn-info">Search</button>
              </div>
            </form>
          </div>
          <!-- END SEARCH -->

          <!-- ALERT -->
          <?php include 'include/alert/success.php' ?>
          <!-- END ALERT -->

          <!-- MODAL ADD -->
          <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <label class="modal-title">Tambah Telepon Keluar</label>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Hari/Tanggal<font style="color: red">*</font></label>
                          <input type="date" class="form-control" name="date_tlpkel" value="<?php echo date('Y-m-d'); ?>" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>ext<font style="color: red">*</font></label>
                          <input type="number" class="form-control" name="ext" placeholder="ext ..." required="required">
                          <input type="hidden" class="form-control" name="id_tlpkel">
                          <input type="hidden" class="form-control" name="date_tlp" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Nomor Tujuan<font style="color: red">*</font></label>
                          <input type="text" class="form-control" name="telepon" placeholder="Telepon ..." required="required">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>PIC</label>
                          <input type="text" class="form-control" name="PIC" placeholder="PIC ...">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan ..."></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-block btn-info">Submit</button>
                      <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END MODAL ADD -->

          <!-- DATA -->
          <div class="card">
            <div class="card-header">
              <div align="right">
                <a href="cetak-telepon-keluar.php" target="_blank">
                  <span type="submit" name="search" value="search" class="btn bg-gray btn-flat">
                    <i class="fa fa-print"></i> 
                    Print
                  </span>
                </a>
                <a href="assets/file/telepon_keluar/download/ex_telepon-keluar.php">
                  <span type="submit" name="search" value="search" class="btn bg-olive btn-flat">
                    <i class="fa fa-file-excel"></i> 
                    Export Excel
                  </span>
                </a>
                <button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add" title="Tambah Data"><i class="nav-icon far fa-plus-square"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Hari/Tanggal</th>
                      <th>Ext</th>
                      <th>Nomor Tujuan</th>
                      <th>PIC</th>
                      <th>Keterangan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","","rskg_sirsadm");
                        // Check connection
                    if (mysqli_connect_errno())
                    {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $result = mysqli_query($con,"SELECT * FROM tb_tlpkel ORDER BY id_tlpkel DESC");

                    $no=0;
                    if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_array($result))
                      {
                        $no++;
                        echo "<tr>";
                        echo "<td>".$no.".</td>";
                        if ($row['date_tlpkel']==NULL){
                          echo "<td>empty</td>";
                        }else{
                          echo "<td>".tanggal_indo($row['date_tlpkel'], true) . "</td>";
                        }
                        if ($row['ext']==NULL){
                          echo "<td>empty</td>";
                        }else{
                          echo "<td>".$row['ext'] . "</td>";
                        }
                        if ($row['telepon']==NULL){
                          echo "<td>empty</td>";
                        }else{
                          echo "<td>".$row['telepon'] . "</td>";
                        }
                        if ($row['PIC']==NULL){
                          echo "<td>empty</td>";
                        }else{
                          echo "<td>".$row['PIC'] . "</td>";
                        }
                        if ($row['keterangan']==NULL){
                          echo "<td>empty</td>";
                        }else{
                          echo "<td>".$row['keterangan'] . "</td>";
                        }
                        echo "<td align= '' width='30px'>
                        <a href='#' data-toggle='modal' data-target='#edit$row[id_tlpkel]' title='Edit'><span class='btn btn-warning btn-xs'><i class='fa fa-edit'></i> </span></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[id_tlpkel]' title='Delete'><span class='btn btn-danger btn-xs'><i class='fas fa-times'></i> </span></a>
                        </td>";
                        echo "</tr>";
                        ?>

                        <!-- UPDATE -->
                        <div class="modal fade" id="edit<?php echo $row['id_tlpkel'];?>">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label class="modal-title">Update Telepon Keluar</label>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="" method="POST">
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <label>Hari/Tanggal</label>
                                        <input type="date" class="form-control" name="date_tlpkel" value="<?php echo $row['date_tlpkel']; ?>">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>ext</label>
                                        <input type="number" class="form-control" name="ext" placeholder="ext ..." value="<?php echo $row['ext']; ?>">
                                        <input type="hidden" class="form-control" name="id_tlpkel" value="<?php echo $row['id_tlpkel']; ?>">
                                        <input type="hidden" class="form-control" name="date_tlp" value="<?php echo $row['date_tlp']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Nomor Tujuan</label>
                                        <input type="text" class="form-control" name="telepon" placeholder="Nomor Tujuan ..." value="<?php echo $row['telepon']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>PIC</label>
                                        <input type="text" class="form-control" name="PIC" placeholder="PIC ..." value="<?php echo $row['PIC']; ?>">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan ..."><?php echo $row['keterangan']; ?></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <button type="submit" name="update" class="btn btn-block btn-info">Submit</button>
                                    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- END UPDATE -->

                        <!-- DELETE -->
                        <div class="modal fade" id="delete<?php echo $row['id_tlpkel'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label class="modal-title">Delete Telepon Keluar</label>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="">
                                  <div class="form-group">
                                    <label>Hapus Data Telepon Keluar?</label>
                                    <h6>Hari/Tanggal : <b><u><?php echo $row['date_tlpkel'];?></u></b></h6>
                                    <h6>ext : <b><u><?php echo $row['ext'];?></u></b></h6>
                                    <h6>Nomor Tujuan : <b><u><?php echo $row['telepon'];?></u></b></h6>
                                    <h6>Telepon : <b><u><?php echo $row['telepon'];?></u></b></h6>
                                    <h6>PIC : <b><u><?php echo $row['PIC'];?></u></b></h6>
                                    <input type="hidden" name="id_tlpkel" class="form-control" placeholder="client name" value="<?php echo $row['id_tlpkel'];?>" required>
                                  </div>
                                  <button type="submit" name="delete" class="btn btn-info btn-block btn-flat">Yes</button>
                                  <button type="button" class="btn btn-danger btn-block btn-flat" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END DELETE -->

                        <!-- ADD FILE -->
                        <div class="modal fade" id="addfile<?php echo $row['id_tlpkel'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label class="modal-title">Tambah File Lampiran</label>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label>Upload File</label>
                                    <input type="file" name="lampiran_ani" placeholder="Upload ...">
                                    <input type="hidden" name="id_tlpkel" class="form-control" placeholder="client name" value="<?php echo $row['id_tlpkel'];?>" required>
                                  </div>
                                  <button type="submit" name="uploadlampiran" class="btn btn-info btn-block btn-flat">Submit</button>
                                  <button type="button" class="btn btn-danger btn-block btn-flat" data-dismiss="modal">Close</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END FILE -->

                        <?php
                      }
                    }mysqli_close($con);
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Hari/Tanggal</th>
                      <th>Ext</th>
                      <th>Nomor Tujuan</th>
                      <th>PIC</th>
                      <th>Keterangan</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- END DATA -->

        </div>
      </section>
      <!-- END ISI -->
    </div>
  </div>
  <?php include 'include/footer.php'; ?>
  <?php include 'include/jsfile.php'; ?>
</body>
</html>
