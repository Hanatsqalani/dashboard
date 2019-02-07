<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard - PT. PJB UBJ O&M Paiton</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/assets/userdash/img/logo1.png" rel="icon">
  <link href="/assets/userdash/img/logo1.png" rel="pjb-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/assets/userdash/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/userdash/css/modal.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/userdash/css/calendar.css">

  <!-- Libraries CSS Files -->
  <link href="/assets/userdash/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/userdash/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/userdash/lib/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/userdash/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/assets/userdash/css/style.css" rel="stylesheet">

  <!-- Java Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/assets/userdash/js/chart.js"> </script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo1.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#intro">Home</a></li>
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
          <li><a href="#chart">Chart</a></li>
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
          <li><a class="dropdown-item" href="{{ url('/lk3') }}">LK3</a></li>
          <li><a class="dropdown-item" href="{{ url('/csr') }}">CSR</a></li>
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    @foreach( $Photointro as $foto)
  <div class="w3-content w3-section" style="max-width:1350px">
  <img class="mySlides w3-animate-fading" src="{{ asset ('upload/Photointro') }}/{{$foto->filename}}" style="width:1349px; height: 613px;">
  @endforeach
</div>
  </section>

  <font color="WHITE"><marquee direction="left" style="background:RED";>Selamat Datang di PT. Pembangkit Jawa Bali Unit Bisnis Jasa O&M PLTU Paiton</marquee></font>
  <main id="main">

    <!--==========================
      Chart Section
    ============================-->
    <section id="chart" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Chart</h2>
          <p>Here are the chart about unit</p>
        </div>

        <div class="row">
          <div class="col-lg-10 col-md-1 wow fadeInUp">
                      <h2><p><center>EAF (%)</p></h2>
                      <canvas id="line_charteaf" height="100"></canvas>

              </div>
              <br>
              <div class="col-lg-10 col-md-1 wow fadeInLeft">
                          <h2><p><center>NPHR (kcal/kwh)</p></h2>
                          <canvas id="line_chartnphr" height="100"></canvas>
                  </div>
                  <br>
                  <div class="col-lg-10 col-md-1 wow fadeInDown">
                              <h2><p><center>EFOR (%)</p></h2>
                              <canvas id="line_chartefor" height="100"></canvas>
                      </div>
                      <br>
                      <div class="col-lg-10 col-md-1 wow fadeInRight">
                                  <h2><p><center>PS (%)</p></h2>
                                  <canvas id="line_chartps" height="100"></canvas>
                          </div>
                          <br>
                          <div class="col-lg-10 col-md-1 wow fadeInUp">
                                      <h2><p><center>Biaya Pemeliharaan (Rp)</p></h2>
                                      <canvas id="line_chartbiayapemeliharaan" height="100"></canvas>
                              </div>
                              <br>
                              <div class="col-lg-10 col-md-1 wow fadeInDown">
                                          <h2><p><center>Biaya Investasi (Rp)</p></h2>
                                          <canvas id="line_chartbiayainvestasi" height="100"></canvas>
                                  </div>
        </div>
      </div>

    </section>

    <!--==========================
      BPP Section
    ============================-->
    <br>
    <section id="bpp" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>BPP</h2>
          <p>BPP Review</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                @foreach( $Bpp as $fotobpp)
                <a href="{{ asset ('upload/Bpp') }}/{{$fotobpp->fotobpp}}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset ('upload/Bpp') }}/{{$fotobpp->fotobpp}}" alt="milestone" class="img-fluid"></a>
                <br><br><center><h4>{{$fotobpp->keterangan}}</h4></center>
                @endforeach
              </div>
            </div>
          </div>
                        </div>
          </div>

        </div>
      </div>

    </section>
    <br>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is the event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Monthly</a>
          </li>
        </ul>

        <h3 class="sub-heading">List of Event</h3>

        <div class="tab-content row justify-content-center">
          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade show active" id="day-1">
            @foreach( $event as $Event)
            <div class="row schedule-item">
              <div class="col-md-2"><time> {{$Event->tanggal}}<br> {{$Event->waktu}}</time>
                <br> {{$Event->lokasi}}</div>
              <div class="col-md-10">
                <h4> {{$Event->tema}}</h4>
                <p> {{$Event->detail}}</p>
              </div>
            </div>
            @endforeach
          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Photos Section
    ============================-->
    <br>
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Documentation of the event that has been held</p>
        </div>
      </div>
      <div class="owl-carousel gallery-carousel">
        @foreach( $Photoevent as $foto)
        <a href="{{ asset ('upload/Photoevent') }}/{{$foto->filename}}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset ('upload/Photoevent') }}/{{$foto->filename}}" alt=""></a>
        @endforeach
      </div>

    </section>


    <!--==========================
      About Section
    ============================-->
    <br>
    <section id="aboutus" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>About Us</h2>
          <center /> <img src="img/logo1.png" style="width:200px;"alt="">
        </div>
        <div class="wow fadeInLeft">
          <p><center />
          <h1><strong>Visi</h1></strong>
          <br>Menjadi perusahaan terpercaya dalam bisnis pembangkitan terintegrasi dengan standar kelas dunia
          </p>
        </div>
        <div class="wow fadeInRight">
          <p><center />
          <h1><strong>Misi</h1></strong>
          <br>Memberi solusi dan nilai tambah dalam bisnis pembangkitan terintegrasi untuk menjaga kedaulatan listrik nasional
          <br>Menjalankan bisnis pembangkitan secara berkualitas, berdaya saing dan ramah lingkungan
          <br>Mengembangkan kompetensi dan produktivitas Human Capital untuk pertumbuhan yang berkesinambungan
          </p>
        </div>
      </div>
    </section><!-- #about -->
    <br>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>You can contact the helpdesk.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Location</h3>
              <address>Administration Building <br>2nd Floor</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Ext</h3>
              <p><a href="2020">2020</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:helpdesk@pjbubjom.com">helpdesk@pjbubjom.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

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
<p>PT Pembangkitan Jawa-Bali (disingkat PT PJB) adalah sebuah anak perusahaan PLN BUMN produsen listrik yang menyuplai kebutuhan listrik di Banten, DKI Jakarta, Jawa Barat, Yogyakarta, Jawa Timur dan Bali. Saat ini PT PJB mengelola 6 Pembangkit Tenaga Listrik di Pulau Jawa, dengan kapasitas total 6.511 Mega Watt.</p>
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

    <?php
    $koneksi     = mysqli_connect("localhost", "root", "", "dashboardubjom");
    $tanggaleaf     = mysqli_query($koneksi, "SELECT tanggal from charteafs");
    $realisasieaf     = mysqli_query($koneksi, "SELECT realisasi from charteafs");
    $targeteaf     = mysqli_query($koneksi, "SELECT target from charteafs");
    $tanggalnphr     = mysqli_query($koneksi, "SELECT tanggal from chartnphrs");
    $realisasinphr     = mysqli_query($koneksi, "SELECT realisasi from chartnphrs");
    $targetnphr     = mysqli_query($koneksi, "SELECT target from chartnphrs");
    $tanggalefor     = mysqli_query($koneksi, "SELECT tanggal from chartefors");
    $realisasiefor     = mysqli_query($koneksi, "SELECT realisasi from chartefors");
    $targetefor     = mysqli_query($koneksi, "SELECT target from chartefors");
    $tanggalps     = mysqli_query($koneksi, "SELECT tanggal from chartps");
    $realisasips     = mysqli_query($koneksi, "SELECT realisasi from chartps");
    $targetps     = mysqli_query($koneksi, "SELECT target from chartps");
    $tanggalpemeliharaan     = mysqli_query($koneksi, "SELECT tanggal from chartpemeliharaans");
    $realisasipemeliharaan     = mysqli_query($koneksi, "SELECT realisasi from chartpemeliharaans");
    $targetpemeliharaan     = mysqli_query($koneksi, "SELECT target from chartpemeliharaans");
    $tanggalinvestasi     = mysqli_query($koneksi, "SELECT tanggal from chartinvestasis");
    $realisasiinvestasi     = mysqli_query($koneksi, "SELECT realisasi from chartinvestasis");
    $targetinvestasi     = mysqli_query($koneksi, "SELECT target from chartinvestasis");
     ?>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
  <script src="/assets/userdash/lib/jquery/jquery.min.js"></script>
  <script src="/assets/userdash/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/assets/userdash/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/userdash/lib/easing/easing.min.js"></script>
  <script src="/assets/userdash/lib/superfish/hoverIntent.js"></script>
  <script src="/assets/userdash/lib/superfish/superfish.min.js"></script>
  <script src="/assets/userdash/lib/wow/wow.min.js"></script>
  <script src="/assets/userdash/lib/venobox/venobox.min.js"></script>
  <script src="/assets/userdash/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/assets/userdash/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/assets/userdash/js/main.js"></script>

  <!-- Jquery Core Js -->
  <script src="/assets/userdash/js/jquery.min.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="/assets/userdash/js/waves.js"></script>

  <!-- Chart Plugins Js -->
  <script src="/assets/userdash/js/Chart.bundle.js"></script>

  <!-- Custom Js -->
  <script src="/assets/userdash/js/chartjs.js"></script>
  <script>
  $(function () {
      new Chart(document.getElementById("line_charteaf").getContext("2d"), getChartJs('line'));

  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggaleaf)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targeteaf)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasieaf)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });

  </script>

  <script>

    $(function () {
      new Chart(document.getElementById("line_chartnphr").getContext("2d"), getChartJs('line'));

  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggalnphr)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targetnphr)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasinphr)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });

</script>

<script>
      $(function () {
      new Chart(document.getElementById("line_chartefor").getContext("2d"), getChartJs('line'));


  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggalefor)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targetefor)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasiefor)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });
</script>

<script>
      $(function () {
      new Chart(document.getElementById("line_chartps").getContext("2d"), getChartJs('line'));

  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggalps)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targetps)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasips)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });
</script>

<script>
      $(function () {
      new Chart(document.getElementById("line_chartbiayapemeliharaan").getContext("2d"), getChartJs('line'));

  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggalpemeliharaan)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targetpemeliharaan)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasipemeliharaan)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });
</script>

<script>
      $(function () {
      new Chart(document.getElementById("line_chartbiayainvestasi").getContext("2d"), getChartJs('line'));

  function getChartJs(type) {
      var config = null;

      if (type === 'line') {
          config = {
              type: 'line',
              data: {
                  labels: [<?php while ($p = mysqli_fetch_array($tanggalinvestasi)) { echo '"' . $p['tanggal'] . '",';}?>],
                  datasets: [
                    {
                      label: "Target",
                      data: [<?php while ($p = mysqli_fetch_array($targetinvestasi)) { echo '"' . $p['target'] . '",';}?>],
                      borderColor: 'rgba(0, 188, 212, 0.75)',
                      backgroundColor: 'rgba(0, 188, 212, 0.3)',
                      pointBorderColor: 'rgba(0, 188, 212, 0)',
                      pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                      pointBorderWidth: 1
                  }, {
                          label: "Realisasi",
                          data: [<?php while ($p = mysqli_fetch_array($realisasiinvestasi)) { echo '"' . $p['realisasi'] . '",';}?>],
                          borderColor: 'rgba(233, 30, 99, 0.75)',
                          backgroundColor: 'rgba(233, 30, 99, 0.3)',
                          pointBorderColor: 'rgba(233, 30, 99, 0)',
                          pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                          pointBorderWidth: 1
                      }]
              },
              options: {
                  responsive: true,
                  legend: false
              }
          }
      }

      return config;
  }
  });
</script>
</body>

</html>
