<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CSR - PT. PJB UBJ O&M Paiton</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo1.png" rel="icon">
  <link href="img/logo1.png" rel="pjb-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modal.css" rel="stylesheet">
  <link rel="stylesheet" href="css/calendar.css">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Java Script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="js/calendar.js"> </script>

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="headerelse">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html" class="scrollto"><img src="img/logo1.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Application
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Aplikasi UBJPTN</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/sdm/" target="_blank">Data SDM</a></li>
              <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/mdp/" target="_blank">SINFO Management Data PC</a></li>
              <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/perpus/" target="_blank">Perpustakaan</a></li>
              <li><a class="dropdown-item" href="http://absen-ujpt.ptpjb.com/" target="_blank">Absensi Online</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Monitoring LAN</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://192.168.40.3:8080/login.htm" target="_blank">PRTG</a></li>
                  <li><a class="dropdown-item" href="http://192.168.40.3:81/" target="_blank">WhatsUp</a></li>
                  <li><a class="dropdown-item" href="http://192.168.40.3:83/netflow/jspui/NetworkSnapShot.jsp" target="_blank">NetFlow</a></li>
                  <li><a class="dropdown-item" href="http://192.168.40.5/monlan" target="_blank">IPSentry</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="http://app.aptana.co.id/" target="_blank">SMS Gateway</a></li>
              <li><a class="dropdown-item" href="http://simosa.ptpjb.com/simosa" target="_blank">SiMoSa Monitoring SCM & Anggaran</a></li>
              <li><a class="dropdown-item" href="http://madutiga.ptpjb.com/dokumen/login.php" target="_blank">MADUTIGA - Dokumen Ter-Integrasi</a></li>
              <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/chcb/pages/login/" target="_blank">SIMCARD</a></li>
              <li><a class="dropdown-item" href="http://kmb.ptpjb.com/dashboard/" target="_blank">KMB - Keluar Masuk Barang</a></li>
              <li><a class="dropdown-item" href="http://imofa.ptpjb.com/pjb9/login.php" target="_blank">IMOFA Monitoring Fly Ash</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Rendal Operasi</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://10.7.40.99/kinerja" target="_blank">Operasi Manajemen</a></li>
                  <li><a class="dropdown-item" href="http://10.7.40.99/heatrate/" target="_blank">Efisiensi Manajemen</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Aplikasi PT PJB ( 1 )</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://pman.ptpjb.com/" target="_blank">PMAN</a></li>
              <li><a class="dropdown-item" href="http://box.ptpjb.com/login" target="_blank">PJB BOX</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Presensi Online</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://presensi.ptpjb.com/" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://192.168.3.93/" target="_blank">Training</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="http://portal.ptpjb.com/" target="_blank">Portal PT PJB</a></li>
              <li><a class="dropdown-item" href="http://oa.ptpjb.com/" target="_blank">Office Automation</a></li>
              <li><a class="dropdown-item" href="http://knowvation.ptpjb.com/" target="_blank">KNOWVATION</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Ellipse</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://ellprdap.ptpjb.com/" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://elldevap.ptpjb.com/" target="_blank">Training</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Maximo MultiSite</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://ubjommx.ptpjb.com/maximo" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://ubjommx.ptpjb.com:81/maximo" target="_blank">Training</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Maximo Site</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://192.168.40.24/maximo" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://192.168.40.24:81/maximo" target="_blank">Training</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="http://amp.ptpjb.com/index.php/main/login" target="_blank">AMP</a></li>
              <li><a class="dropdown-item" href="http://eproc.ptpjb.com/" target="_blank">Eproc</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Aplikasi PT PJB ( 2 )</a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Helpdesk</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://helpdesk.ptpjb.com/" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://helpdesk-dev.ptpjb.com/" target="_blank">Training</a></li>
                  <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/main/dokumen/helpdesk_manual.pdf" target="_blank">Dokumen Manual</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Verifikasi Online</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://verifikasi.ptpjb.com/sion/login.html" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://http//192.168.1.119/sion/" target="_blank">Training</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Web MO</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://192.168.1.63/home2016/" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://training-motool.ptpjb.com/indexit.php" target="_blank">Training</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="http://lapuskit.ptpjb.com/" target="_blank">Lapuskit</a></li>
              <li><a class="dropdown-item" href="http://kontrak.ptpjb.com/" target="_blank">Bank Garansi</a></li>
              <li><a class="dropdown-item" href="http://pm.ptpjb.com/QPR2016-1/Portal/QPR.Isapi.dll?QPRPORTAL&*pudev" target="_blank">QPR</a></li>
              <li><a class="dropdown-item" href="http://mail.ptpjb.com/" target="_blank">Email PT PJB</a></li>
              <li><a class="dropdown-item" href="http://supplier.ptpjb.com/" target="_blank">Supplier Master</a></li>
              <li><a class="dropdown-item" href="http://pln-pusdiklat.co.id/" target="_blank">IKP Online</a></li>
              <li><a class="dropdown-item" href="http://costmaster.ptpjb.com/budget" target="_blank">Cost Master</a></li>
              <li><a class="dropdown-item" href="http://toolcenter.ptpjb.com/toool/" target="_blank">Tool Center</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Aplikasi PT PJB ( 3 )</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://erm.ptpjb.com/" target="_blank">ERM</a></li>
              <li><a class="dropdown-item" href="http://ims.ptpjb.com/sso" target="_blank">PJB IMS</a></li>
              <li><a class="dropdown-item" href="http://plnme.ptpjb.com/Naviver/cgi-bin/WebIndex.exe" target="_blank">PLN ME</a></li>
              <li><a class="dropdown-item" href="http://simkk.ptpjb.com/system.php?fnp=1&setdate=2019-01-23&sSession=TEMP-XXXXXX-DAskceLJRaJFOKgiuaSOIhwguZmWLinq&sys=User&subsys=login" target="_blank">SIM KK</a></li>
              <li><a class="dropdown-item" href="ftp://ftp.ptpjb.com/" target="_blank">FTP PT PJB</a></li>
              <li><a class="dropdown-item" href="https://sg.ptpjb.com/" target="_blank">CITRIX</a></li>
              <li><a class="dropdown-item" href="http://ama.ptpjb.com/pjb/" target="_blank">AMA Anggaran</a></li>
              <li><a class="dropdown-item" href="http://www.ptpjb.com/" target="_blank">www.ptpjb.com</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">I-PLAN</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://iplan.ptpjb.com/login" target="_blank">Production</a></li>
                  <li><a class="dropdown-item" href="http://iplandev.ptpjb.com/" target="_blank">Training</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Aplikasi PT PJB Service</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://portal.pjbservices.com/" target="_blank">Portal PJB Services</a></li>
              <li><a class="dropdown-item" href="https://mail.ptpjbs.com/" target="_blank">Mail PJB Services</a></li>
              <li><a class="dropdown-item" href="http://presensi.pjbservices.com/" target="_blank">Presensi PJB Services</a></li>
              </li>
            </ul>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Dokumen</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/POB_APLIKASI_IT/" target="_blank">POB Aplikasi</a></li>
                <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/data_enjiniring/qrm/02.%20Pengelolaan%20IMS/IPM%20dan%20IK%20PJB%20IMS%202018/" target="_blank">PJB IMS</a></li>
                <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/data_enjiniring/" target="_blank">Data Enjiniring</a></li>
                <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/data_operasi/" target="_blank">Data Operasi</a></li>
                <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/data_pemeliharaan/" target="_blank">Data Pemeliharaan</a></li>
                <li><a class="dropdown-item" href="http://192.168.40.7/notulen/" target="_blank">Notulen Rapat Tinjauan Manajemen (RTM)</a></li>
                <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/sa/" target="_blank">Self Assesmen Konkin TW II 2017</a></li>
                <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/192.168.40.5laphar_ubjomlaphar" target="_blank">Laphar</a></li>
                <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/portal/Form_dan_Tata_Cara_LPKT_2017_UJPT.docx" target="_blank">Form LKPT 2017</a></li>
                </li>
              </ul>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Download</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ftp://ubjompaiton.ptpjb.com/download/protokoler/" target="_blank">Protokoler Meeting</a></li>
                  </li>
                </ul>
          </li>
          <li><a class="dropdown-item" href="http://ubjptn.ptpjb.com/portal/lapuskit.php" target="_blank">Lapuskit</a></li>
          <li><a class="dropdown-item" href="ftp://192.168.40.5/download/video_k3/" target="_blank">K3 Video</a></li>
          <li><a class="dropdown-item" href="http://192.168.40.7/sdm/karyawan_view.php" target="_blank">Data Karyawan</a></li>
        </ul>
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Lini Bisnis
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="{{ url('/operation') }}">Operation</a></li>
        <li><a class="dropdown-item" href="{{ url('/maintenance') }}">Maintenance</a></li>
        <li><a class="dropdown-item" href="{{ url('/engineering') }}">Engineering</a></li>
        <li><a class="dropdown-item" href="{{ url('/logistik') }}">Logistik</a></li>
        <li><a class="dropdown-item" href="{{ url('/keuangan') }}">Keuangan dan Administrasi</a></li>
      </ul>
    </li>
          <li><a href="{{ url('/#chart') }}">Chart</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Organization
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ url('/sppjbs') }}">SP PJB Service</a></li>
          <li><a class="dropdown-item" href="{{ url('/sppjb') }}">SP PJB</a></li>
          <li><a class="dropdown-item" href="ftp://192.168.40.14/" target="_blank">9PM</a></li>
          <li><a class="dropdown-item" href="{{ url('/bakorsiroh') }}">Bakorsiroh</a></li>
          <li><a class="dropdown-item" href="{{ url('/pik') }}">PIK - Persatuan Ibu dan Karyawati</a></li>
        </ul>
      </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Social Responsibilities
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="lk3.html">LK3</a></li>
          <li><a class="dropdown-item" href="csr.html">CSR</a></li>
        </ul>
      </li>
          <li><a href="#schedule">Info Unit</a></li>
          <li><a href="" data-toggle="modal" data-target="#loginmodal">Login</a></li>
        </ul>
        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">
          <img src="img/logo1.png" alt="pjb" style="width:150px;height:125px;">
          <br><strong>Login to Your Account</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
         <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
        <!--Body-->
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="Form-email1">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                   </span>
          @endif
        </div>

        <div class="md-form pb-3">
          <label data-error="wrong" data-success="right" for="password">{{ __('Password') }}</label>
          <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
              </span>
         @endif
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient">{{ __('Login') }}</button>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
        </div>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
<br>
      <div class="container">
        <div class="section-header">
          <div class="wow fadeIn">
          <h2>Dokumentasi Kegiatan CSR</h2>
        </div>
        </div>
        <div class="row wow fadeInRight">
          <img src="img/123.png" alt="pjb" style="width:300px; height:250px;" align="left">
          <p-else>Nama Kegiatan : Mengkoding - Koding Portal
          <br>Lokasi : Ruang XXXXXX
          <br>Jam : 123123123
          </p>
        </div>
<br>
        <div class="row wow fadeInLeft">
            <img src="img/intro-bg1.jpg" alt="pjb" style="width:300px; height:250px;" align="right">
            <p-else>Nama Kegiastan : Motret Unit 9
          <br>Lokasi : PLTU Paiton Unit 9
          <br>Jam : gtw
          </p>
        </div>
        </div>
<br>
  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo1.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Shortcut Links UBJPTN</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="http://madutiga.ptpjb.com/dokumen/login.php" target="_blank">MADUTIGA</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="ftp://192.168.40.14/" target="_blank">9PM</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="http://simosa.ptpjb.com/simosa" target="_blank">SiMoSa</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="http://ubjptn.ptpjb.com/perpus/" target="_blank">Perpustakaan</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="http://ubjptn.ptpjb.com/sdm/" target="_blank">Data SDM</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Shortcut Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="http://portal.ptpjb.com/" target="_blank">Portal PT PJB</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="ftp://ftp.ptpjb.com/" target="_blank">FTP PT PJB</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="href="http://mail.ptpjb.com/" target="_blank"">E-Mail PT PJB</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="href="https://mail.ptpjbs.com/" target="_blank"">E-Mail PJB Service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="http://plnme.ptpjb.com/Naviver/cgi-bin/WebIndex.exe" target="_blank">PLN ME</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Location :</strong>
              Administration Building 2nd Floor<br>
              <strong>Ext :</strong> 2020<br>
              <strong>Email :</strong> helpdesk@pjbubjom.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2019 <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        <br>Modified by Bernaz & Hasbi
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
