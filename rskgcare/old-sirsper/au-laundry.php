<?php
include "include/connection.php";
include 'include/restrict.php';

// ADD
if(isset($_POST["submit"]))    
{    
  $id_ppi_rawatinap = $_POST['id_ppi_rawatinap'];
  $user_id          = $_POST['user_id'];
  $date_audit       = $_POST['date_audit'];
  $ruangan          = $_POST['ruangan'];
  $RI_1             = $_POST['RI_1'];
  $RI_2             = $_POST['RI_2'];
  $RI_3             = $_POST['RI_3'];
  $RI_4             = $_POST['RI_4'];
  $RI_5             = $_POST['RI_5'];
  $RI_6             = $_POST['RI_6'];
  $RI_7             = $_POST['RI_7'];
  $RI_8             = $_POST['RI_8'];
  $RI_9             = $_POST['RI_9'];
  $RI_10            = $_POST['RI_10'];
  $RI_11            = $_POST['RI_11'];
  $RI_12            = $_POST['RI_12'];
  $RI_13            = $_POST['RI_13'];
  $RI_14            = $_POST['RI_14'];
  $RI_15            = $_POST['RI_15'];
  $RI_16            = $_POST['RI_16'];
  $RI_17            = $_POST['RI_17'];
  $RI_18            = $_POST['RI_18'];
  $RI_19            = $_POST['RI_19'];
  $RI_20            = $_POST['RI_20'];
  $RI_21            = $_POST['RI_21'];
  $RI_22            = $_POST['RI_22'];
  $RI_23            = $_POST['RI_23'];
  $RI_24            = $_POST['RI_24'];
  $RI_25            = $_POST['RI_25'];
  $RI_26            = $_POST['RI_26'];
  $RI_27            = $_POST['RI_27'];
  $RI_28            = $_POST['RI_28'];
  $RI_29            = $_POST['RI_29'];
  $RI_30            = $_POST['RI_30'];
  $RI_31            = $_POST['RI_31'];
  $RI_32            = $_POST['RI_32'];
  $RI_33            = $_POST['RI_33'];
  $RI_34            = $_POST['RI_34'];
  $RI_35            = $_POST['RI_35'];
  $RI_36            = $_POST['RI_36'];
  $RI_37            = $_POST['RI_37'];
  $RI_38            = $_POST['RI_38'];
  $RI_39            = $_POST['RI_39'];
  $RI_40            = $_POST['RI_40'];
  $RI_41            = $_POST['RI_41'];
  $RI_42            = $_POST['RI_42'];
  $RI_43            = $_POST['RI_43'];
  $RI_44            = $_POST['RI_44'];
  $RI_45            = $_POST['RI_45'];
  $RI_46            = $_POST['RI_46'];
  $RI_47            = $_POST['RI_47'];
  $RI_48            = $_POST['RI_48'];
  $RI_49            = $_POST['RI_49'];
  $RI_50            = $_POST['RI_50'];
  $RI_51            = $_POST['RI_51'];
  $RI_52            = $_POST['RI_52'];
  $RI_53            = $_POST['RI_53'];
  $RI_54            = $_POST['RI_54'];
  $RI_55            = $_POST['RI_55'];
  $RI_56            = $_POST['RI_56'];
  $RI_57            = $_POST['RI_57'];
  $RI_58            = $_POST['RI_58'];
  $RI_59            = $_POST['RI_59'];
  $RI_60            = $_POST['RI_60'];
  $RI_61            = $_POST['RI_61'];
  $RI_62            = $_POST['RI_62'];
  $RI_63            = $_POST['RI_63'];
  $RI_64            = $_POST['RI_64'];
  $RI_65            = $_POST['RI_65'];
  $RI_66            = $_POST['RI_66'];
  $RI_67            = $_POST['RI_67'];
  $RI_68            = $_POST['RI_68'];
  $RI_69            = $_POST['RI_69'];
  $RI_70            = $_POST['RI_70'];
  $RI_71            = $_POST['RI_71'];
  $RI_72            = $_POST['RI_72'];
  $RI_73            = $_POST['RI_73'];
  $RI_74            = $_POST['RI_74'];
  $RI_75            = $_POST['RI_75'];
  $RI_76            = $_POST['RI_76'];
  $RI_77            = $_POST['RI_77'];
  $RI_78            = $_POST['RI_78'];
  $RI_79            = $_POST['RI_79'];
  $RI_80            = $_POST['RI_80'];
  $RI_81            = $_POST['RI_81'];
  $RI_82            = $_POST['RI_82'];
  $RI_83            = $_POST['RI_83'];
  $RI_84            = $_POST['RI_84'];
  $RI_85            = $_POST['RI_85'];
  $RI_86            = $_POST['RI_86'];
  $RI_87            = $_POST['RI_87'];
  $RI_88            = $_POST['RI_88'];
  $RI_89            = $_POST['RI_89'];
  $RI_90            = $_POST['RI_90'];
  $RI_91            = $_POST['RI_91'];
  $RI_92            = $_POST['RI_92'];
  $RI_93            = $_POST['RI_93'];
  $RI_94            = $_POST['RI_94'];
  $RI_95            = $_POST['RI_95'];
  $RI_96            = $_POST['RI_96'];
  $RI_97            = $_POST['RI_97'];
  $RI_98            = $_POST['RI_98'];
  $RI_99            = $_POST['RI_99'];
  $RI_100           = $_POST['RI_100'];
  $RI_101           = $_POST['RI_101'];
  $RI_102           = $_POST['RI_102'];
  $RI_103           = $_POST['RI_103'];
  $RI_104           = $_POST['RI_104'];
  $RI_105           = $_POST['RI_105'];
  $RI_106           = $_POST['RI_106'];
  $RI_107           = $_POST['RI_107'];
  $RI_108           = $_POST['RI_108'];
  $RI_109           = $_POST['RI_109'];
  $RI_110           = $_POST['RI_110'];
  $RI_111           = $_POST['RI_111'];
  $RI_112           = $_POST['RI_112'];
  $RI_113           = $_POST['RI_113'];
  $RI_114           = $_POST['RI_114'];
  $RI_115           = $_POST['RI_115'];
  $RI_116           = $_POST['RI_116'];
  $RI_117           = $_POST['RI_117'];
  $RI_118           = $_POST['RI_118'];
  $RI_119           = $_POST['RI_119'];
  $RI_120           = $_POST['RI_120'];
  $RI_121           = $_POST['RI_121'];
  $RI_122           = $_POST['RI_122'];
  $RI_123           = $_POST['RI_123'];
  $RI_124           = $_POST['RI_124'];
  $RI_125           = $_POST['RI_125'];
  $RI_126           = $_POST['RI_126'];
  $RI_127           = $_POST['RI_127'];
  $RI_128           = $_POST['RI_128'];
  $RI_129           = $_POST['RI_129'];


  $query = mysql_query("INSERT INTO tb_ppi_rawatinap 
    (id_ppi_rawatinap,user_id,date_audit,ruangan,
    RI_1,RI_2,RI_3,RI_4,RI_5,RI_6,RI_7,RI_8,RI_9,RI_10,
    RI_11,RI_12,RI_13,RI_14,RI_15,RI_16,RI_17,RI_18,RI_19,RI_20,
    RI_21,RI_22,RI_23,RI_24,RI_25,RI_26,RI_27,RI_28,RI_29,RI_30,
    RI_31,RI_32,RI_33,RI_34,RI_35,RI_36,RI_37,RI_38,RI_39,RI_40,
    RI_41,RI_42,RI_43,RI_44,RI_45,RI_46,RI_47,RI_48,RI_49,RI_50,
    RI_51,RI_52,RI_53,RI_54,RI_55,RI_56,RI_57,RI_58,RI_59,RI_60,
    RI_61,RI_62,RI_63,RI_64,RI_65,RI_66,RI_67,RI_68,RI_69,RI_70,
    RI_71,RI_72,RI_73,RI_74,RI_75,RI_76,RI_77,RI_78,RI_79,RI_80,
    RI_81,RI_82,RI_83,RI_84,RI_85,RI_86,RI_87,RI_88,RI_89,RI_90,
    RI_91,RI_92,RI_93,RI_94,RI_95,RI_96,RI_97,RI_98,RI_99,RI_100,
    RI_101,RI_102,RI_103,RI_104,RI_105,RI_106,RI_107,RI_108,RI_109,
    RI_110,RI_111,RI_112,RI_113,RI_114,RI_115,RI_116,RI_117,RI_118,RI_119,RI_120,
    RI_121,RI_122,RI_123,RI_124,RI_125,RI_126,RI_127,RI_128,RI_129) 
    VALUES 
    ('','$user_id','$date_audit','$ruangan',
    '$RI_1','$RI_2','$RI_3','$RI_4','$RI_5','$RI_6','$RI_7','$RI_8','$RI_9','$RI_10',
    '$RI_11','$RI_12','$RI_13','$RI_14','$RI_15','$RI_16','$RI_17','$RI_18','$RI_19','$RI_20',
    '$RI_21','$RI_22','$RI_23','$RI_24','$RI_25','$RI_26','$RI_27','$RI_28','$RI_29','$RI_30',
    '$RI_31','$RI_32','$RI_33','$RI_34','$RI_35','$RI_36','$RI_37','$RI_38','$RI_39','$RI_40',
    '$RI_41','$RI_42','$RI_43','$RI_44','$RI_45','$RI_46','$RI_47','$RI_48','$RI_49','$RI_50',
    '$RI_51','$RI_52','$RI_53','$RI_54','$RI_55','$RI_56','$RI_57','$RI_58','$RI_59','$RI_60',
    '$RI_61','$RI_62','$RI_63','$RI_64','$RI_65','$RI_66','$RI_67','$RI_68','$RI_69','$RI_70',
    '$RI_71','$RI_72','$RI_73','$RI_74','$RI_75','$RI_76','$RI_77','$RI_78','$RI_79','$RI_80',
    '$RI_81','$RI_82','$RI_83','$RI_84','$RI_85','$RI_86','$RI_87','$RI_88','$RI_89','$RI_90',
    '$RI_91','$RI_92','$RI_93','$RI_94','$RI_95','$RI_96','$RI_97','$RI_98','$RI_99',RI_100,
    '$RI_101','$RI_102','$RI_103','$RI_104','$RI_105','$RI_106','$RI_107','$RI_108','$RI_109',
    '$RI_110','$RI_111','$RI_112','$RI_113','$RI_114','$RI_115','$RI_116','$RI_117','$RI_118','$RI_119','$RI_120',
    '$RI_121','$RI_122','$RI_123','$RI_124','$RI_125','$RI_126','$RI_127','$RI_128','$RI_129')
    ");
  if ($query) {
    header("Location: ./au-RI.php?ntf=1");  
  } else {
    header("Location: ./au-RI.php?ntf=6");
  }
}
?>
<html class="no-js" lang="en">
<?php include 'include/head.php'; ?>
<body>
  <?php include 'include/header.php'; ?>
  <?php include 'include/sidebar.php'; ?>
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <img src="assets/icon/green/png/upload-3.png" width="50px"> 
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Form Audit Laundry</h2>
                    <p>Dashboard / Laundry</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->
    <div class="notika-status-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-element-list mg-t-30">
              <?php include 'include/alert/success.php' ?>
              <form action="" method="POST">
                <div class="bsc-tbl-bdr">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td rowspan="1" align="center">
                          <p><img src="assets/img/all-rs/rskg.png" class="lingkaran1"></p>
                        </td>
                        <td colspan="4" align="center">
                          <p>
                            <strong>Tanggal: <input type="date" name="date_audit" class="form-control" required="required"></strong>
                            <input type="hidden" class="form-control" name="ruangan" value="Laundry">
                            <input type="hidden" class="form-control" name="id_ppi_rawatinap">
                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $access['user_id']; ?>">
                          </p>
                        </td>
                        <td rowspan="2" align="center">
                          <p><strong>Rencana Tindak Lanjut</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="6" align="center" style="background-color: #00c292; color: #ffff">
                          <p><h3>Monitoring/ Audit PPI di Ruang Laundry</h3></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p><strong>Elemen untuk Evaluasi</strong></p>
                        </td>
                        <td>
                          <p><strong>Ya</strong></p>
                        </td>
                        <td>
                          <p><strong>Tidak</strong></p>
                        </td>
                        <td>
                          <p><strong>Temuan</strong></p>
                        </td>
                        <td>
                          <p><strong>Keterangan</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="6" style="background-color: #00c292;">
                          <p><strong>Personal</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Bersih, rapih, dan menggunakan pakaian yang sesuai</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_1" name="example" />
                          <!-- <p><input type="radio" value="No" name="RI_1"></p> -->
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_1" name="example" />
                          <!-- <p><input type="radio" value="No" name="RI_1"></p> -->
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_2" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_3" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Tidak menggunakan perhiasan tangan</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_4" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_4" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_5" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_6" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Menggunakan penutup kepala dan masker</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_7" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_7" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_8" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_9" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Kuku pendek dan bersih</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_10" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_10" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_11" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_12" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Rambut rapih dan menggunakan tutup kepala </p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_13" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_13" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_14" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_15" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Menggunakan sepatu tertutup</p>
                        </td>
                        <td>
                         <input type="radio" class="option-input radio" value="Yes" name="RI_16" name="example" />
                        </td>
                        <td>
                         <input type="radio" class="option-input radio" value="No" name="RI_16" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_17" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_18" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Menggunakan Gwon yang anti air</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_19" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_19" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_20" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_21" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Menggunakan sarung tangan panjang dan masker ketika menangani linen kotor</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_22" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_22" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_23" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_24" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Petugas sudah mengikuti pelatihan PPI</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_25" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_25" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_26" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_27" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Personel diinformasikan mengenal bahaya zat kimia yang digunakan </p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_28" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_28" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_29" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_30" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Pemeriksaan kesehatan berkala</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_31" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_31" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_32" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_33" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Mendapat vaksinasi penyakit menular</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_34" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_34" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_35" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_36" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="6" style="background-color: #00c292;">
                          <p><strong>Tempat Pencucian/ Pelipatan/ Penyimpanan</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Tempat bersih, lantai tidak licin dan tidak berdebu</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_37" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_37" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_38" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_39" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Transportasi linen bersih menggunakan container tertutup</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_40" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_40" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_41" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_42" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Linen kotor terpisah dari linen bersih</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_43" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_43" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_44" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_45" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Area permukaan pelipatan linen dibersihkan dengan larutan desinfektan</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_46" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_46" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_47" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_48" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Mesin cuci / mesin pengering dibersihkan setiap hari</p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_49" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_49" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_50" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_51" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <p>Trolley Transport dibersihkan setiap hari setelah digunakan </p>
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="Yes" name="RI_52" name="example" />
                        </td>
                        <td>
                          <input type="radio" class="option-input radio" value="No" name="RI_52" name="example" />
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_53" placeholder="Temuan..."></textarea></p>
                        </td>
                        <td>
                          <p><textarea class="form-control" name="RI_54" placeholder="Keterangan..."></textarea></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-block btn-success waves-effect" name="submit">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'include/footer.php'; ?>
  <!-- End Footer area-->
  <?php include 'include/jsfile.php' ?>
</body>
</html>