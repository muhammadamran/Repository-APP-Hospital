<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Website - RS. Khusus Ginjal Ny. R.A. Habibie</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/rskg/header.png">
	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/gijgo.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/datatables/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Modal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<style type="text/css">
		.preloader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background-color: #ffff;
		}
		.preloader .loading {
			position: absolute;
			left: 50%;
			top: 50%;
			animation-delay: 0.100s;
			transform: translate(-50%,-50%);
			font: 14px arial;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".preloader").fadeOut();
		})
	</script>
</head>

<body>
	<div class="preloader">
        <div class="loading">
            <img src="assets/gif/radio.gif">
            <font style="font-family: arial; font-size: 25px; color: #56b16b">Loading</font>
        </div>
    </div>
	<?php include 'include/header.php' ?>
	<div class="bradcam_area breadcam_bg" style="background-image: url('assets/img/bg-pelayanan/bg-dokter1.png'); background-size: 100%; background-position: 50% 50%;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="bradcam_text">
						<h3>Jadwal Dokter</h3>
						<p><a href="index.php">Beranda </a>/ Jadwal Dokter</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="business_expert_area">
			<div class="business_tabs_area">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<ul class="nav" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#spesialis" role="tab" aria-controls="home"
									aria-selected="true">Jadwal Dokter Spesialis</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#umum" role="tab" aria-controls="profile"
									aria-selected="false">Jadwal Dokter Umum</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="border_bottom">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="spesialis" role="tabpanel" aria-labelledby="home-tab">
							<div class="row align-items-center">
								<div class="col-xl-12 col-md-12">
									<div class="business_info">
										<div class="table-responsive">
											<table id="example1" class="table table-condensed">
												<thead>
													<tr style="background-color: #225f4a; color: #ffff">
														<th>#</th>
														<th>Nama Dokter</th>
														<th>Spesialis</th>
														<th>Senin</th>
														<th>Selasa</th>
														<th>Rabu</th>
														<th>Kamis</th>
														<th>Jumat</th>
														<th>Sabtu</th>
														<th>Minggu</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$con=mysqli_connect("localhost","root","","rskg_website");
									                        // Check connection
													if (mysqli_connect_errno())
													{
														echo "Failed to connect to MySQL: " . mysqli_connect_error();
													}
													$result = mysqli_query($con,"SELECT * FROM tb_dokter WHERE status_dokter='Spesialis' ORDER BY id_dokter DESC");

													$no=0;
													if(mysqli_num_rows($result)>0){
														while($row = mysqli_fetch_array($result))
														{
															$no++;
															echo "<tr>";
															if ($row['foto']==NULL){
																echo "<td>";
																echo "<img src='assets/img/dokter/no-foto/blank.jpg' width='100px'>";
																echo "</td>";
															}else{
																echo "<td>";
																echo "<img src='assets/img/dokter/crop/$row[foto]' width='100px'>";
																echo "</td>";
															}
															if ($row['nama_dokter']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['nama_dokter'] . "</td>";
															}
															if ($row['ket_spesialis']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['ket_spesialis'] . "</td>";
															}
															if ($row['senin']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['senin'] . "</td>";
															}
															if ($row['selasa']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['selasa'] . "</td>";
															}
															if ($row['rabu']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['rabu'] . "</td>";
															}
															if ($row['kamis']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['kamis'] . "</td>";
															}
															if ($row['jumat']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['jumat'] . "</td>";
															}
															if ($row['sabtu']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['sabtu'] . "</td>";
															}
															if ($row['minggu']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td>".$row['minggu'] . "</td>";
															}
															echo "<td>
															<a href='detail-dokter.php?id=$row[id_dokter]' title='Detail Dokter'><span class='genric-btn info-border radius'>Detail</span></a>
															</td>";
															echo "</tr>";
															?>
															<?php
														}
													}mysqli_close($con);
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="umum" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row align-items-center">
								<div class="col-xl-12 col-md-12">
									<div class="business_info">
										<div class="table-responsive">
											<table id="example12" class="table table-stripe">
												<thead>
													<tr style="background-color: #225f4a; color: #ffff">
														<th>#</th>
														<th>Nama Dokter</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$con=mysqli_connect("localhost","root","","rskg_website");
									                        // Check connection
													if (mysqli_connect_errno())
													{
														echo "Failed to connect to MySQL: " . mysqli_connect_error();
													}
													$result = mysqli_query($con,"SELECT * FROM tb_dokter WHERE status_dokter='Umum' ORDER BY id_dokter ASC");
													$no=0;
													if(mysqli_num_rows($result)>0){
														while($row = mysqli_fetch_array($result))
														{
															$no++;
															echo "<tr>";
															if ($row['foto']==NULL){
																echo "<td>";
																echo "<img src='assets/img/dokter/no-foto/blank.jpg' width='150px'>";
																echo "</td>";
															}else{
																echo "<td>";
																echo "<img src='assets/img/dokter/crop/$row[foto]' width='150px'>";
																echo "</td>";
															}
															if ($row['nama_dokter']==NULL){
																echo "<td>-</td>";
															}else{
																echo "<td><font style='font-size: 15px;'>".$row['nama_dokter'] . "</font></td>";
															}
															echo "</tr>";
															?>
															<?php
														}
													}mysqli_close($con);
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'include/footer.php' ?>
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/ajax-form.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/scrollIt.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/nice-select.min.js"></script>
	<script src="assets/js/jquery.slicknav.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/gijgo.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="assets/js/jquery.form.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/mail-script.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/datatables/plugins/datatables/jquery.dataTables.js"></script>
	<script src="assets/datatables/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<script>
		$('#datepicker').datepicker({
			iconsLibrary: 'fontawesome',
			icons: {
				rightIcon: '<span class="fa fa-caret-down"></span>'
			}
		});
		$('#datepicker2').datepicker({
			iconsLibrary: 'fontawesome',
			icons: {
				rightIcon: '<span class="fa fa-caret-down"></span>'
			}
		});
		$(document).ready(function() {
			$('.js-example-basic-multiple').select2();
		});
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
		});
		$("#example12").DataTable();
		$('#example22').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
		});
	</script>
	<script type="text/javascript">
		(function () {
			var options = {
            whatsapp: "+6287802390549", // WhatsApp number
            call_to_action: "Kirim Pesan", // Call to action
            position: "right", // Position may be 'right' or 'right'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>
</html>