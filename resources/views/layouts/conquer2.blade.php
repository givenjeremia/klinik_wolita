<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />

	<title>@yield('title', 'Admin Dashboard | BPM Wolita')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('conquer2/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('conquer2/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('conquer2/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="{{ asset('conquer2/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('conquer2/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet"
		type="text/css" />
	<link href="{{ asset('conquer2/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ asset('conquer2/css/style-conquer.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/css/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/css/pages/tasks.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/css/themes/light.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('conquer2/css/custom.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed ">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo m-0">
				<a href="/">
					<img src="{{ asset('logo/WOLITA_2.png') }}" style="height: 100%;,margin-top: 1px;" alt="logo" />
				</a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<img src="{{ asset('conquer2/img/menu-toggler.png') }}" alt="" />
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<li class="devider">
					&nbsp;
				</li>
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						data-close-others="true">
						{{-- <img alt="" src="{{ asset('conquer2/img/avatar3_small.jpg') }}" /> --}}
						<span class="username username-hide-on-mobile">
							{{ Auth::user()->nama }}
						</span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="divider">
						</li>
						<li>
							@if(Auth::user())
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
								<input type="submit" class="btn btn-danger" value="Logout">
							</form>

							@else
							<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
							@endif
							{{-- <a href="login.html"><i class="fa fa-key"></i> Log Out</a> --}}
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->

		</div>
		{{-- <div class="clearfix">
		</div> --}}
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
				<ul class="page-sidebar-menu">
					<li class="sidebar-toggler-wrapper">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler">
						</div>
						<div class="clearfix">
						</div>
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					</li>
					{{-- <li class="sidebar-search-wrapper">
						<form class="search-form" role="form" action="index.html" method="get">
							<div class="input-icon right">
								<i class="icon-magnifier"></i>
								<input type="text" class="form-control" name="query" placeholder="Search...">
							</div>
						</form>
					</li> --}}
					<li class="start active ">
						<a href="/">
							<i class="icon-home"></i>
							<span class="title">
								Dashboard
							</span>
							<span class="selected"></span>
						</a>
					</li>
					<li>
						<a href="/obat">
							<i class="fa fa-medkit"></i>
							<span class="title">Data Obat</span>
							<span class="selected"></span>
						</a>
						{{-- <a href="/obat"><i class="fa fa-group"></i>Data Obat</a> --}}
					</li>
					<li>
						<a href="/pasien">
							<i class="fa fa-group"></i>
							<span class="title">Data Pasien</span>
							<span class="selected"></span>
						</a>
					</li>
					<li>
						<a href="/persalinan">
							<i class="fa fa-history"></i>
							<span class="title">Riwayat Persalinan</span>
							<span class="selected"></span>
						</a>
					</li>
					<li>
						<a href="/pemeriksaan">
							<i class="fa fa-history"></i>
							<span class="title">Riwayat Pemeriksaan</span>
							<span class="selected"></span>
						</a>
					</li>
					@if (Auth::user()->role == "Admin")
					<li>
						<a href="/karyawan">
							<i class="fa fa-child"></i>
							<span class="title">Data Karyawan</span>
							<span class="selected"></span>
						</a>
					</li>

					@endif
					<li>
						<a href="javascript:;">
							<i class="fa fa-book"></i>
							<span class="title">Nota</span>
							<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/notapemeriksaan/create">Tambah Pemeriksaan</a>
							</li>
							<li>
								<a href="/notapersalinan/create">Tambah Persalinan</a>
							</li>
							<li>
								<a href="/notapemeriksaan">Nota Pemeriksaan</a>
							</li>
							<li>
								<a href="/notapersalinan">Nota Persalinan</a>
							</li>
						</ul>
					</li>
					{{-- <li class="last ">
						<a href="" onclick="document.getElementById('formlogoutdash').submit();">
							<i class="icon-user"></i>
							<span class="title">Logout</span>
						</a>
					</li> --}}
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif
				<div class="portlet">
					<div class="portlet-title text-bold">

						Hello, {{ Auth::user()->role }} Welcome To DASHBOARD
					</div>

					<div class="portlet-body ">
						<a href="#modalObatBaru" data-toggle="modal" class="icon-btn bg-info" style="min-width:12%">
							<i class="fa fa-plus"></i>
							<div>
								Obat Baru
							</div>
						</a>
						<a href="#modalPasienBaru" data-toggle="modal" class="icon-btn bg-info" style="min-width:12%">
							<i class="fa fa-plus"></i>
							<div>
								Pasien Baru
							</div>
						</a>
						@if (Auth::user()->role == 'Admin')
						<a href="#modalKaryawanBaru" data-toggle="modal" class="icon-btn bg-info" style="min-width:12%">
							<i class="fa fa-plus"></i>
							<div>
								Karyawan Baru
							</div>
						</a>
						<a href="trush" class="icon-btn" style="min-width:12%">
							<i class="fa  fa-trash-o"></i>
							<div>
								Trush
							</div>
						</a>
						@else
						<a href="#modalPemeriksaanBaru" data-toggle="modal" class="icon-btn" style="min-width:12%">
							<i class="fa fa-stethoscope"></i>
							<div>
								Permeriksaan Baru
							</div>
						</a>
						<a href="#modalPersalinanBaru" data-toggle="modal" class="icon-btn" style="min-width:12%">
							<i class="fa fa-plus-square"></i>
							<div>
								Persalinan Baru
							</div>
						</a>
						@endif



						<a href="#" class="icon-btn" onclick="document.getElementById('formlogoutdash').submit();"
							style="min-width:12%">
							<i class="fa fa-sign-out"></i>
							@if(Auth::user())
							<form id="formlogoutdash" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
								<div>
									{{-- <input type="submit" class="" style="background-color: transparent;"
										value="Logout"> --}}
									Logout
								</div>
							</form>
							@endif
						</a>
					</div>
				</div>
				@yield('content')
				{{-- Modal --}}
				<div class="modal fade" id="modalPasienBaru" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Tambah Pasien Baru</h4>
							</div>
							<div class="modal-body">
								{{-- Form --}}
								<form action="{{ route('pasien.store') }}" class="form-horizontal" method="post"
									enctype="multipart/form-data">
									@csrf
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">NIK</label>
											<div class="col-md-9">
												<input type="text" name="NIK" class="form-control" placeholder="NIK">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Nama</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="nama" placeholder="Nama"
													required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal Lahir</label>
											<div class="col-md-9">
												<input type="date" class="form-control" value="{{ date('Y-m-d') }}"
													name="tanggal_lahir" placeholder="dd/mm/yyyy" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Jenis Kelamin</label>
											<div class="col-md-9">
												<select class="form-control" name="jenis_kelamin" required>
													<option value="0">Pria</option>
													<option value="1">Wanita</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Umur</label>
											<div class="col-md-9">
												<input type="number" name="umur" class="form-control"
													placeholder="Umur">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Perkerjaan</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="perkerjaan"
													placeholder="Perkerjaan">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Nomor Telepon</label>
											<div class="col-md-9">
												<input type="tel" class="form-control" name="nomor_telepon"
													placeholder="Telepon" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Alamat</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="alamat"
													placeholder="Alamat" required>
											</div>
										</div>

									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-success">Tambah</button>
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Batal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modalObatBaru" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Tambah Obat Baru</h4>
							</div>
							<div class="modal-body">
								<form action="{{ route('obat.store') }}" class="form-horizontal" method="post"
									enctype="multipart/form-data">
									@csrf
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Nama</label>
											<div class="col-md-9">
												<input type="text" name="nama_obat" class="form-control"
													placeholder="Nama Obat">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Harga</label>
											<div class="col-md-9">
												<input type="number" class="form-control" name="harga"
													placeholder="Harga" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Stock</label>
											<div class="col-md-9">
												<input type="number" name="stock" class="form-control"
													placeholder="Stock">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Kadaluarsa</label>
											<div class="col-md-9">
												<input type="date" class="form-control" value="{{ date('Y-m-d') }}"
													name="kadaluarsa" placeholder="dd/mm/yyyy" required>
											</div>
										</div>

									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-success">Tambah</button>
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Batal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modalPemeriksaanBaru" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Pemeriksaan Baru</h4>
							</div>
							<div class="modal-body">
								{{-- Form --}}
								<form action="{{ route('pemeriksaan.store') }}" class="form-horizontal" method="post"
									enctype="multipart/form-data">
									@csrf
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal Periksa</label>
											<div class="col-md-9">
												<input type="date" name="tanggal_periksa" value="{{ date('Y-m-d') }}"
													class="form-control" placeholder="dd/mm/yyyy" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Nama Pasien</label>
											<div class="col-md-9">
												<select class="form-control" name="pasien_id">
													@foreach (session()->get("pasien") as $item)
													<option value="{{ $item->id }}">{{ $item->nama }}</option>
													@endforeach
													{{-- <option value="Wanita">Wanita</option> --}}
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Kunjungan Ke</label>
											<div class="col-md-9">
												<input type="number" name="kunjungan_ke" class="form-control"
													placeholder="Kunjungan Ke" required>

											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Keluhan</label>
											<div class="col-md-9">
												<input type="text" name="keluhan" class="form-control"
													placeholder="Keluhan" required>

											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Terapi</label>
											<div class="col-md-9">
												<input type="text" name="terapi" class="form-control"
													placeholder="terapi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal Kembali</label>
											<div class="col-md-9">
												<input type="date" name="tanggal_kembali" value="{{ date('Y-m-d') }}"
													class="form-control" placeholder="dd/mm/yyyy" required>
											</div>
										</div>

									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-success">Tambah</button>
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Batal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modalPersalinanBaru" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Persalinan Baru</h4>
							</div>
							<div class="modal-body">
								{{-- Form --}}
								<form action="{{ route('persalinan.store') }}" class="form-horizontal" method="post"
									enctype="multipart/form-data">
									@csrf
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal Masuk</label>
											<div class="col-md-9">
												<input type="date" name="tanggal_masuk" class="form-control"
													placeholder="dd/mm/yyyy" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal Persalinan</label>
											<div class="col-md-9">
												<input type="date" name="tanggal_persalinan" class="form-control"
													placeholder="dd/mm/yyyy" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Nama Pasien</label>
											<div class="col-md-9">
												<select class="form-control" name="pasien_id">
													@foreach (session()->get("pasien") as $item)
													<option value="{{ $item->id }}">{{ $item->nama }}</option>
													@endforeach
													{{-- <option value="Wanita">Wanita</option> --}}
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Persalinan Ke-</label>
											<div class="col-md-9">
												<input type="number" name="persalinan_ke" class="form-control"
													placeholder="persalinan_ke" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Nama Suami</label>
											<div class="col-md-9">
												<input type="text" name="nama_suami" class="form-control"
													placeholder="Nama Suami" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Perkerjaan Suami</label>
											<div class="col-md-9">
												<input type="text" name="perkerjaan_suami" class="form-control"
													placeholder="Perkerjaan Suami" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Dokter/Bidan</label>
											<div class="col-md-9">
												<select class="form-control" name="dokter_bidan">
													@foreach (session()->get("user") as $item)
													<option value="{{ $item->username }}">{{ $item->nama }} / {{
														$item->role }}</option>
													@endforeach
													{{-- <option value="Wanita">Wanita</option> --}}
												</select>
											</div>
										</div>

									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-success">Tambah</button>
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Batal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modalKaryawanBaru" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Karyawan Baru</h4>
							</div>
							<div class="modal-body">
								{{-- Form --}}
								<form method="POST" action="{{ route('user.store') }}">
									@csrf

									<div class="form-group row">
										<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name')
											}}</label>

										<div class="col-md-6">
											<input id="name" type="text"
												class="form-control @error('name') is-invalid @enderror" name="name"
												value="{{ old('name') }}" required autocomplete="name" autofocus>

											@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="form-group row">
										<label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{
											__('Tanggal Lahir') }}</label>

										<div class="col-md-6">
											<input type="date" name="tanggal_lahir" id="tanggal_lahir"
												class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail
											Address') }}</label>

										<div class="col-md-6">
											<input id="email" type="email"
												class="form-control @error('email') is-invalid @enderror" name="email"
												value="{{ old('email') }}" required autocomplete="email">

											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="username" class="col-md-4 col-form-label text-md-right">{{
											__('Username') }}</label>

										<div class="col-md-6">
											<input id="username" type="text"
												class="form-control @error('username') is-invalid @enderror"
												name="username" value="{{ old('username') }}" required>

											@error('username')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">{{
											__('Password') }}</label>

										<div class="col-md-6">
											<input id="password" type="password"
												class="form-control @error('password') is-invalid @enderror"
												name="password" required autocomplete="new-password">

											@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{
											__('Confirm Password') }}</label>

										<div class="col-md-6">
											<input id="password-confirm" type="password" class="form-control"
												name="password_confirmation" required autocomplete="new-password">
										</div>
									</div>
									<div class="form-group row">
										<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nomor
											Telepon') }}</label>

										<div class="col-md-6">
											<input id="name" type="text"
												class="form-control @error('nomor_telepon') is-invalid @enderror"
												name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>

											@error('nomor_telepon')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="form-group row">
										<label for="roles-row"
											class="col-md-4 col-form-label text-md-right">Role</label>
										<div class="col-md-6">
											<select name="roles" id="roles">
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Karyawan">Karyawan</option>
											</select>
										</div>
									</div>

									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-primary">
												{{ __('Register') }}
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END CONTAINER -->
		{{-- MODAL --}}
		{{-- <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">{{ $title_count }}</h4>
					</div>
					<div class="modal-body">
						{{ $keterangan_count }}
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div> --}}
		<!-- BEGIN FOOTER -->
		<div class="footer">
			<div class="footer-inner">
				2013 &copy; Conquer by keenthemes.
			</div>
			<div class="footer-tools">
				<span class="go-top">
					<i class="fa fa-angle-up"></i>
				</span>
			</div>
		</div>
		<!-- END FOOTER -->
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->
		<script src="{{ asset('conquer2/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
		<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js') }} before bootstrap.min.js') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->
		<script src="{{ asset('conquer2/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
			type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}"
			type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery.peity.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript">
		</script>
		<script src="{{ asset('conquer2/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"
			type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
		<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js') }} for drag & drop support -->
		<script src="{{ asset('conquer2/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}"
			type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"
			type="text/javascript"></script>
		<script src="{{ asset('conquer2/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="{{ asset('conquer2/scripts/app.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/scripts/index.js') }}" type="text/javascript"></script>
		<script src="{{ asset('conquer2/scripts/tasks.js') }}" type="text/javascript"></script>


		{{-- <script type="text/javascript" charset="utf8"
			src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> --}}
		<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
		<script type="text/javascript" language="javascript"
			src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
		{{-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.bootstrap.min.js">
		</script> --}}
		{{-- <script type="text/javascript" language="javascript"
			src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script> --}}

		<script type="text/javascript" language="javascript"
			src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
		{{-- <script type="text/javascript" language="javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" language="javascript"
			src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>

		<!-- END PAGE LEVEL SCRIPTS -->
		<script>
			jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initPeityElements();
   Index.initKnowElements();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
});
		</script>
		@yield('js')
		<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>