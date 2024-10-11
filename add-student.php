<?php
session_start();
$data =$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Pefscom - Dashboard</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Fontfamily -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/plugins/feather/feather.css">

	<!-- Pe7 CSS -->
	<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
     <?php
     include "header.php";
     ?>
     <!-- /Header -->

     <!-- Sidebar -->
    <?php
    include "./sidebar.php";
    ?>
     <!-- /Sidebar -->
		<div class="page-wrapper">

			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title">Add Student!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active">Admin</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="page-header">
						<div class="row align-items-center">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Add Students</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="students.html">Student</a></li>
										<li class="breadcrumb-item active">Add Students</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card comman-shadow">
								<div class="card-body">
									<form method="post" action="proces-add-student.php" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
											</div>
											<?php
											if (isset($_GET['error'])) {
												echo "<h5 class=' mb-4 text-center text-danger'>".$_GET['error']."</h5>";
											}
											?>
											<div class="col-12 col-sm-4">  
												<div class="input-block local-forms">
													<label >First Name <span class="login-danger">*</span></label>
													<input name="fname" class="form-control" type="text" placeholder="Enter First Name" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Last Name <span class="login-danger">*</span></label>
													<input name="lname" class="form-control" type="text" placeholder="Enter last Name" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Gender <span class="login-danger">*</span></label>
													<select name="gender" class="form-control select">
														
														<option value="F">Female</option>
														<option value="M">Male</option>
														<option>Others</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms calendar-icon">
													<label >Date Of Birth  <span class="login-danger">*</span></label>
													<input name="dob" class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Roll </label>
													<input name="enrolNum" class="form-control" type="text" placeholder="Enter Roll Number" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Blood Group <span class="login-danger">*</span></label>
													<select name="BloodGroup" class="form-control select">
														<option value="null">Please Select Group </option>
														<option value="B+">B+</option>
														<option value="A+">A+</option>
														<option value="O+">O+</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Religion <span class="login-danger">*</span></label>
													<select name="religion" class="form-control select">
														<option value="null">Please Select Religion  </option>
														<option value="Muslim">Muslim</option>
														<option value="Christian">Christian</option>
														<option value="Others">Others</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >E-Mail <span class="login-danger">*</span></label>
													<input name="email" class="form-control" type="text" placeholder="Enter Email Address" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Class <span class="login-danger">*</span></label>
													<select name="class" class="form-control select">
														<option value="null">Please Select Class  </option>
														<option value="12">12</option>
														<option value="11">11</option>
														<option value="10">10</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Section <span class="login-danger">*</span></label>
													<select name="section" class="form-control select">
														<option value="null">Please Select Section   </option>
														<option value="B">B</option>
														<option value="A">A</option>
														<option value="C">C</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Admission ID </label>
													<input name="adminisID" class="form-control" type="text" placeholder="Enter Admission ID" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block local-forms">
													<label >Phone </label>
													<input name="phoneNum" class="form-control" type="text" placeholder="Enter Phone Number" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="input-block students-up-files">
													<label>Upload Student Photo (150px X 150px)</label>
													<div class="uplod">
														<label class="file-upload image-upbtn mb-0">
															Choose File <input name="photo" type="file">
														</label>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="student-submit">
													<button type="submit" name="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>							
						</div>					
					</div>					
				</div>				
			</div>


		</div>
		<!-- /Page Wrapper -->



	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>