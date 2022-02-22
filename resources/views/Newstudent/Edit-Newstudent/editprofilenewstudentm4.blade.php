<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Prompt:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
	<div class="wrapper horizontal-layout-2">

		<div class="main-header" style="background-color: #8B469B;">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="{{ url('/')}}" class="logo d-flex align-items-center">
						<img src="../assets/img/logo2.png" alt="navbar brand" class="navbar-brand">
					</a>
					<!-- End Logo Header -->

					<!-- Navbar Header -->
					<nav class="navbar navbar-header navbar-expand-lg p-0">

						<div class="container-fluid p-0">
							<div class="collapse" id="search-nav">
								<p class="card-title" style="font-size: 17px;"><b>
										<font color='#ffffff'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font>
									</b></p>
								<label><small>
										<font color='#ffffff'>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่</font>
									</small></label>
							</div>
							<!-- <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
								<li class="nav-item toggle-nav-search hidden-caret">
									<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
										<i class="fas fa-school"></i>
									</a>
								</li>					
							</ul> -->
						</div>
					</nav>
					<!-- End Navbar -->
				</div>
			</div>
			<div class="nav-bottom">
				<div class="container">
					<h3 class="title-menu d-flex d-lg-none">
						เมนู
						<div class="close-menu"> <i class="flaticon-cross"></i></div>
					</h3>
					<ul class="nav page-navigation page-navigation-info bg-white">

						<li class="nav-item">
							<a class="nav-link" href="{{ url('/')}}">
								<i class="link-icon icon-home"></i>
								<span class="menu-title">หน้าแรก</span>
							</a>
						</li>
						<li class="nav-item submenu active">
							<a class="nav-link" href="#">
								<i class="link-icon icon-user-follow"></i>
								<span class="menu-title">รับสมัครนักเรียนใหม่</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{ url('/AgreeMentNewstudentRegisterM1')}}">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</a>
									</li>
									<li>
										<a href="{{ url('/AgreeMentNewstudentRegisterM4')}}">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</a>
									</li>
									<li>
										<a href="{{ url('/check/status')}}">ตรวจสอบสถานะการสมัครเข้าเรียน</a>
									</li>
									<li>
										<a href="{{ url('/Newstudent/documentIndex')}}">ส่งเอกสารรายงานตัว</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="#">
								<i class="link-icon icon-folder-alt"></i>
								<span class="menu-title">ข้อมูลนักเรียนพื้นฐาน</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{url('/agreement/student')}}">เพิ่มข้อมูลนักเรียนพื้นฐาน</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="#">
								<i class="link-icon icon-lock"></i>
								<span class="menu-title">เข้าระบบ</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{ url('/student/login')}}">นักเรียน</a>
									</li>
									<li>
										<a href="{{ url('/academic/login')}}">ฝ่ายวิชาการ</a>
									</li>
									<li>
										<a href="{{ url('/affair/login')}}">ฝ่ายกิจการนักเรียน</a>
									</li>
									<li>
										<a href="{{ url('/admin/login')}}">ผู้ดูแลระบบ</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="link-icon icon-book-open"></i>
								<span class="menu-title">คู่มือการใช้งาน</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="link-icon icon-bubbles"></i>
								<span class="menu-title">ติดต่อเรา</span>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="main-panel">
			<div class="container">
				<div class="page-inner">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i>&nbsp; ข้อมูลประจำตัวของ {{$newstudentm4Model->prename}}{{$newstudentm4Model->fname}} {{$newstudentm4Model->surname}}</div>
									</div>
								</div>
								<form action="{{ url('/updateNewstudentM4', $newstudentm4Model->id)}}" method="POST" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<!-- ข้อมูลส่วนตัว -->
									<div class="card-body">

										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->prename}}" name="prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->fname}}" name="fname">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->name_cen}}" name="name_cen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->surname}}" name="surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->id_number}}" name="id_number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>วัน/เดือน/ปีเกิด ที่ปรากฏในบัตรประชาชน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ปี พุทธศักราช:</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->year}}" name="year">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>เดือน:</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mounth}}" name="mounth">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>วัน:</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->day}}" name="day">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เพศสภาพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->sex}}" name="sex">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ศาสนา</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->religion}}" name="religion">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เชื้อชาติ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->origin}}" name="origin">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>สัญชาติ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->nationality}}" name="nationality">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->tel}}" name="tel">
												</div>
											</div>
										</div>

										<!-- ข้อมูลที่อยู่ตามทะเบียนบ้าน -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>บ้านเลขที่</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->house_number}}" name="house_number">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>หมู่</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->bloc}}" name="bloc">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ซอย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->street}}" name="street">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ถนน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->street}}" name="street">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->sub_district}}" name="sub_district">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->district}}" name="district">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->province}}" name="province">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>รหัสไปรษณีย์</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->post}}" name="post">
												</div>
											</div>
										</div>

										<!-- ข้อมูลครอบครัว -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล บิดา</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_prename}}" name="father_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_name}}" name="father_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->father_namecen}}" name="father_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_surname}}" name="father_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_id}}" name="father_id">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_job}}" name="father_job">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_tel}}" name="father_tel">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล มารดา</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_prename}}" name="mother_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_name}}" name="mother_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->mother_namecen}}" name="mother_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_surname}}" name="mother_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_id}}" name="mother_id">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_job}}" name="mother_job">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_tel}}" name="mother_tel">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

												<div class="form-group form-group-default">
													<label>ผู้ปกครอง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent}}" name="parent">

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_prename}}" name="parent_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_name}}" name="parent_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->parent_namecen}}" name="parent_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_surname}}" name="parent_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_id}}" name="parent_id">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ความสัมพันธ์ผู้ปกครอง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_status}}" name="parent_status">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_job}}" name="parent_job">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_tel}}" name="parent_tel">
												</div>
											</div>
										</div>

										<!-- ข้อมูลทางการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลทางการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>กำลังศึกษาอยู่/สำเร็จการศึกษา ชั้นมัธยมศึกษาปีที่ 3 จากโรงเรียน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>ชื่อโรงเรียนเดิม</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school}}" name="final_school">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_sub_district}}" name="final_school_sub_district">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_district}}" name="final_school_district">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_province}}" name="final_school_province">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>เลขประจำตัวนักเรียน (เฉพาะนักเรียนชั้น ม.3 โรงเรียนพร้าววิทยาคม)</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวนักเรียน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->student_id}}" name="student_id">
												</div>
											</div>
										</div>

										<!-- ความต้องการความช่วยเหลือด้านการจัดการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ความต้องการความช่วยเหลือด้านการจัดการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-check">
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ผู้ด้อยโอกาส/ฐานะยากจน</label>
															<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->poor_person}}" name="poor_person">
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ผู้พิการ/เด็กพิเศษ</label>
															<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->disabled}}" name="disabled">
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อื่นๆ</label>
															<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->etc}}" name="etc">
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- เลือกเรียนแผนการเรียนรู้ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>เลือกเรียนแผนการเรียนรู้ &nbsp;&nbsp;( เลือกอันดับ 1 - 10 ตามลำดับแผนการเรียนรู้ที่เลือก )</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 1</label>
													@if ($newstudentm4Model->major_name1 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name1 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 2</label>
													@if ($newstudentm4Model->major_name2 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name2 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 3</label>
													@if ($newstudentm4Model->major_name3 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name3 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 4</label>
													@if ($newstudentm4Model->major_name4 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name4 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 5</label>
													@if ($newstudentm4Model->major_name5 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name5 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 6</label>
													@if ($newstudentm4Model->major_name6 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name6 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 7</label>
													@if ($newstudentm4Model->major_name7 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name7 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 8</label>
													@if ($newstudentm4Model->major_name8 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name8 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 9</label>
													@if ($newstudentm4Model->major_name9 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($newstudentm4Model->major_name9 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
										</div>

										<div class="card-footer" align="center">
											<p style="text-align:center">หากทำการแก้ไขข้อมูลเรียบร้อยแล้ว<br>
												ให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
											<button type="submit" class="btn btn-success" ><strong>ยืนยัน</strong></button>
											<a href='{{ url("/ShowNewstudentM4/{$newstudentm4Model->id}" )}}' class="btn btn-danger" style="margin-left: 20px;"><strong>ย้อนกลับ</strong></a>
										</div><br>
									</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" target="_blank">&copy; 2021 Phrao wittayakom School.</a>
						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					พัฒนาโดย PWK40 & CSMJU23
				</div>
			</div>
		</footer>
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {

				$('#alert_demo_7').click(function(e) {
					swal({
						title: 'ยืนยันข้อมูล ?',
						text: "ยืนยันการแก้ไขข้อมูล",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'ตกลง',
								className: 'btn btn-success',
								type: 'submit'
							},
							cancel: {
								text: 'ย้อนกลับ',
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							swal({
								title: 'บันทึกข้อมูลเรียบร้อย!',
								text: 'สามารถตรวจสอบการแก้ไขข้อมูลได้ที่น้าตรวจสอบข้อมูล',
								type: 'success',
								buttons: {
									confirm: {
										className: 'btn btn-success'
									}
								}
							}).then(function() {
							window.location = '/check/statusM4';
						});
						} else {
							swal.close();
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>

</body>

</html>