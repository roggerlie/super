<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulir Pernyataan Orangtua</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/date-picker/css/datepicker.min.css') }}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder" style="display: flex;
            flex-direction: column;
            justify-content: center;
            align-self: center;
            align-items: center;">
				<img style="width: 50%" src="{{ asset('assets/images/logo-removebg-preview.png') }}" alt="">
                <div style="justify-content: center;
                display: flex;
                flex-direction: column;
                align-content: center;
                align-items: center;">
                    <h1>Setuju : {{ App\Models\Pernyataan::where('status', 'Approved')->count() }}</h1>
                    <h1>Tidak Setuju : {{ App\Models\Pernyataan::where('status', 'Rejected')->count() }}</h1>
                </div>
			</div>
            <form id="form" action="{{ route('pernyataan.simpan') }}" method="POST">
                @csrf
            	<div class="form-header">
            		<a href="#">#Form Pernyataan Orangtua / Wali</a>
            		<h3>Pembelajaran Tatap Muka Disekolah Panca Budi Medan</h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label for="">
	                    		Nama orangtua/wali
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="nama_ortu">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Alamat:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="alamat_ortu">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		No. handphone
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="hp_ortu">
	                    	</div>
	                    </div>
	                </section>

					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Nama Siswa
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="nama_siswa">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Jenjang Pendidikan
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="jenjang" class="form-control">
                                    <option value="">-- Pilih Jenjang --</option>
									<option value="TK" class="option">TK</option>
									<option value="SD" class="option">SD</option>
									<option value="SMP" class="option">SMP</option>
									<option value="SMA" class="option">SMA</option>
									<option value="SMKBM" class="option">SMKBM</option>
									<option value="SMKTR" class="option">SMKTR</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Kelas
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="kelas">
	                    	</div>
	                    </div>
	                    <div class="form-row" style="margin-bottom: 3.4vh">
	                    	<label for="">
	                    		NIS/NISN
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="nisn">
	                    	</div>
	                    </div>
	                    <div class="form-row" style="margin-bottom: 3.4vh">
	                    	<label for="">
	                    		Alamat
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="alamat_siswa">
	                    	</div>
	                    </div>
                        <div class="form-row" style="margin-bottom: 3.4vh">
	                    	<label for="">
	                    		No. Handphone
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="hp_siswa">
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 38px">
	                    	<label for="">
	                    		Pernyataan
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="status" class="form-control">
	                    			<option value="Approved" class="option">Meberikan Izin</option>
									<option value="Rejected" class="option">Tidak Memberikan Izin</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                </section>
            	</div>
            </form>
		</div>

		<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

		<!-- JQUERY STEP -->
		<script src="{{ asset('assets/js/jquery.steps.js') }}"></script>

		<!-- DATE-PICKER -->
		<script src="{{ asset('assets/vendor/date-picker/js/datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/date-picker/js/datepicker.en.js') }}"></script>

		<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
