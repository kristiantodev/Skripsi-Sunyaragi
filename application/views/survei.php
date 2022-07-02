<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
     <title>Goa Sunyaragi Cirebon</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/cirebon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url();?>assets/survei/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/survei/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/survei/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url();?>assets/survei/css/custom.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<link href="<?php echo base_url();?>assets/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

<body class="style_3">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
	<header>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-5">
	                <a href="index.html"><img src="<?php echo base_url();?>assets/cirebon.png" alt="" width="50" height="55"></a>
	            </div>
	            <div class="col-7">
	                <div id="social">
	                    <ul>
	                        <li><a href="<?php echo site_url();?>portal"><i class="fa fa-home"></i> Home</a></li>
	                        <li><a href="<?php echo site_url();?>portal/sejarah"><i class="fa fa-map-marker"></i> Sejarah</a></li>
	                        <li><a href="<?php echo site_url();?>portal/survei"><i class="fa fa-edit"></i> Survei</a></li>
	                        <li><a href="<?php echo site_url();?>portal/kontak"><i class="fa fa-phone"></i> Contact</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</header>
	<!-- /header -->

	<div class="wrapper_centering">
	    <div class="container_centering">
	        <div class="container">
	            <div class="row justify-content-between">
	                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
	                    <div class="main_title_1">
	                        <h3><img src="<?php echo base_url();?>assets/survei/img/main_icon_1.svg" width="80" height="80" alt=""> Survei Pengunjung</h3>
	                        <p align="justify">Berikan penilaian kepuasan anda tentang pelayanan yang ada pada Goa Sunyaragi Cirebon, agar kami dapat meningkatkan kualitas dan pelayanan yang ada.</p>
	                        <p><em>- Team Goa Sunyaragi Cirebon</em></p>
	                    </div>
	                </div>
	                <!-- /col -->
	                <div class="col-xl-5 col-lg-5">
	                    <div id="wizard_container">
                          <div id="top-wizard">
                              <div id="progressbar"></div>
                          </div>
                          <!-- /top-wizard -->
                          <form id="wrapped" action="<?php echo site_url('portal/proses_survey'); ?>" method="POST" autocomplete="off">
                              <input id="website" name="website" type="text" value="">
                              <!-- Leave for security protection, read docs for details -->
                              <div id="middle-wizard">

                              <div class="step">
	                                    <h3 class="main_question"><strong>Data Diri</strong>Isi Identitas Anda</h3>
	                                    <div class="form-group">
	                                        <label for="firstname">Nama Lengkap</label>
	                                        <input type="text" name="nama_pelanggan" id="firstname" class="form-control" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-group radio_input">
	                                                <label class="container_radio">Laki-Laki
	                                                    <input type="radio" name="jk" value="L" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                                <label class="container_radio">Perempuan
	                                                    <input type="radio" name="jk" value="P" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                            </div> 
	                                    </div>
	                                    
	                                    <div class="form-group">
	                                        <label for="additional_message_label">Alamat</label>
	                                        <textarea name="alamat" id="additional_message_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'alamat');"></textarea>
	                                    </div>
	                                </div>
	                                <!-- /step 1-->
<?php $no2=1; $u=1; foreach ($surveys as $pertanyaan){ ?>
	                                <div class="step">
                                    <strong>Pertanyaan Ke-<?php echo $no2++; ?></strong><strong>
	                                    <h3 class="main_question mb-4"><font color="white"><font color="white">Dimensi : <?php echo $pertanyaan->nama_dimensi ?></font></strong><?php echo $pertanyaan->kriteria ?></font></h3>
<input type="hidden" name="id_kriteria<?php echo $u; ?>"  value="<?php echo $pertanyaan->id_kriteria ?>" class="form-control" >
	                                    <div class="review_block">
	                                    	<div class="row">
	                                        <div class="col-lg-6 col-md-6 col-6">
                                            Kinerja :
	                                       <ul>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="poor_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="5" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="poor_<?php echo $u; ?>"></label>
                                                      <label for="poor_<?php echo $u; ?>" class="wrapper">Sangat Baik</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="average_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="4" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="average_<?php echo $u; ?>"></label>
                                                      <label for="average_<?php echo $u; ?>" class="wrapper">Baik</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="excellent_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="3" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="excellent_<?php echo $u; ?>"></label>
                                                      <label for="excellent_<?php echo $u; ?>" class="wrapper">Cukup</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="outstanding_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="2" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="outstanding_<?php echo $u; ?>"></label>
                                                      <label for="outstanding_<?php echo $u; ?>" class="wrapper">Kurang</label>
                                                  </div>
                                              </li>

                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="kin_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="1" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="kin_<?php echo $u; ?>"></label>
                                                      <label for="kin_<?php echo $u; ?>" class="wrapper">Sangat Kurang</label>
                                                  </div>
                                              </li>
                                            
                                          </ul>
	                                    </div>

	                                    <div class="col-6">
                                        Harapan :
	                                    	<ul>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="poor2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="5" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="poor2_<?php echo $u; ?>"></label>
                                                      <label for="poor2_<?php echo $u; ?>" class="wrapper">Sangat Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="average2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="4" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="average2_<?php echo $u; ?>"></label>
                                                      <label for="average2_<?php echo $u; ?>" class="wrapper">Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="excellent2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="3" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="excellent2_<?php echo $u; ?>"></label>
                                                      <label for="excellent2_<?php echo $u; ?>" class="wrapper">Cukup Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="outstanding2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="2" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="outstanding2_<?php echo $u; ?>"></label>
                                                      <label for="outstanding2_<?php echo $u; ?>" class="wrapper">Kurang Penting</label>
                                                  </div>
                                              </li>

                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="har2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="1" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="har2_<?php echo $u; ?>"></label>
                                                      <label for="har2_<?php echo $u; ?>" class="wrapper">Tidak Penting</label>
                                                  </div>
                                              </li>
                                              
                                          </ul>
	                                    </div>

	                                </div>
	                                    </div>
	                                    
	                                </div>
	                                <!-- /step 2-->

	<?php $u++; } ?>                              
	                                <div class="submit step">
	                                    <h3 class="main_question">Isi Kritik dan Saran : </h3>
	                                    <div class="form-group">
	                                        <label for="additional_message_label">Saran dan Kritik</label>
	                                        <textarea name="kritik_saran" id="additional_message_label" class="form-control" style="height:200px;" onkeyup="getVals(this, 'kritik_saran');"></textarea>
	                                    </div>
	                                </div>
	                                <!-- /step 5-->

	                            </div>
	                            <!-- /middle-wizard -->

	                           <div id="bottom-wizard">
                                  <button type="button" name="backward" class="backward">&nbsp;Sebelumnya</button>
                                  <button type="button" name="forward" class="forward">Selanjutnya &nbsp;</button>
                                  <button type="submit" name="process" class="submit">&nbsp;Submit</button>
                              </div>
	                            <!-- /bottom-wizard -->

	                        </form>
	                    </div>
	                    <!-- /Wizard container -->
	                </div>
	                <!-- /col -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container_centering -->
	</div>
	<!-- /wrapper_centering -->
	
	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url();?>assets/survei/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/survei/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url();?>assets/survei/js/functions.js"></script>
 <!-- Sweet-Alert  -->
        <script src="<?php echo base_url();?>assets/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/sweet-alert2/sweet-alert.init.js"></script>
        <script src="<?php echo base_url();?>assets/alert.js"></script>

	<!-- Wizard script -->
	<script src="<?php echo base_url();?>assets/survei/js/survey_func.js"></script>

</body>
</html>