<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/assets/admindash/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/admindash/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/admindash/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="info">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/admindash/img/logo-small.png">
          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Menu
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      @if(Auth::check())
      <div class="sidebar-wrapper">
      <ul class="nav">
        @if(Auth::user()->status==='1')
        <li>
          <a href="{{ url('/admin') }}">
          <i class="nc-icon nc-image"></i>
          <p>Dashboard</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/photosintro') }}">
          <i class="nc-icon nc-image"></i>
          <p>Photos Intro</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/createadmin') }}">
        <i class="nc-icon nc-single-02"></i>
        <p>Create Admin</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/chart') }}">
          <i class="nc-icon nc-chart-bar-32"></i>
          <p>Chart</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/bpp') }}">
          <i class="nc-icon nc-money-coins"></i>
          <p>BPP Milestone</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/event') }}">
          <i class="nc-icon nc-book-bookmark"></i>
          <p>Event</p>
        </a>
        </li>
        <li>
          <a href="{{ url('/admin/photosevent') }}">
          <i class="nc-icon nc-album-2"></i>
          <p>Photos Event</p>
        </a>
      </li>
      <li class="active">
        <a href="{{ url('/admin/operation') }}">
          <i class="nc-icon nc-settings-gear-65"></i>
          <p>Operation</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/maintenance') }}">
          <i class="nc-icon nc-settings"></i>
          <p>Maintenance</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/engineering') }}">
          <i class="nc-icon nc-laptop"></i>
          <p>Engineering</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/logistik') }}">
          <i class="nc-icon nc-delivery-fast"></i>
          <p>Logistik</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/keuangan') }}">
          <i class="nc-icon nc-bank"></i>
          <p>Keuangan</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/sppjbs') }}">
          <i class="nc-icon nc-shop"></i>
          <p>SP PJB Service</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/sppjb') }}">
          <i class="nc-icon nc-shop"></i>
          <p>SP PJB</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/bakorsiroh') }}">
          <i class="nc-icon nc-shop"></i>
          <p>Bakorsiroh</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/pik') }}">
          <i class="nc-icon nc-shop"></i>
          <p>PIK</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/lk3') }}">
          <i class="nc-icon nc-shop"></i>
          <p>LK3</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/csr') }}">
          <i class="nc-icon nc-shop"></i>
          <p>CSR</p>
        </a>
      </li>

      @elseif (Auth::user()->status==='2')
        <li>
          <a href="{{ url('/admin') }}">
          <i class="nc-icon nc-image"></i>
          <p>Dashboard</p>
        </a>
        </li>
        <li>
        <a href="{{ url('/admin/chart') }}">
          <i class="nc-icon nc-chart-bar-32"></i>
          <p>Chart</p>
        </a>
        </li>
        <li class="active">
        <a href="{{ url('/admin/operation') }}">
          <i class="nc-icon nc-settings-gear-65"></i>
          <p>Operation</p>
        </a>
        </li>

      @else
        <li>
          <a href="{{ url('/admin') }}">
          <i class="nc-icon nc-image"></i>
          <p>Dashboard</p>
        </a>
      </li>
      </ul>
      </div>
      @endif
      @endif
      </div>
      </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Operation</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
      {{ Auth::user()->name }}
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>



                              </ul>
          </li>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Photos</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nama File
                      </th>
                      <th>
                        Foto
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                       @foreach( $Photooperation as $foto)
                      <tr>
                        <td>
                          <p> {{$foto->filename}}</p>
                        </td>
                        <td>
                            <img src="{{ asset ('upload/Photooperation') }}/{{$foto->filename}}" style="height: 120px; width: 170px;">
                        </td>
                        <td>
                           <form action="{{action('PhotooperationController@destroy', $foto['id'])}}" method="post">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                  <br><strong>Upload Photo</strong><br><br>
                  <form action="{{ route('operation')}} " method="post" class="form-horizontal" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="file" name="filename" accept="image/jpeg" class="btn btn-danger">
                  <input type="submit" name="filename" class="btn btn-info" value="Upload">
                  Max. Size : 8 Mb
                </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Karyawan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <strong>Create Data Karyawan</strong><br><br>
                    <form action="{{ route('karyawanoperation')}} " method="post" class="form-horizontal" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    Id Karyawan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="idkaryawan"  id="idkaryawan" placeholder="Masukkan id karyawan" class="col-md-3">
                    <br><br>Nama Karyawan &nbsp&nbsp : <input type="text" name="namakaryawan" id="namakaryawan" placeholder="Masukkan nama karyawan" class="col-md-5">
                    <br><br>Jabatan Karyawan : <select name="jabatan" class="col-md-2">
                      <option value="OJT 6">OJT 6</option>
                      <option value="OJT 10">OJT 10</option>
                      <option value="Operator Senior Main Unit Boiler Board">Operator Senior Main Unit Boiler Board</option>
                      <option value="Operator Senior Main Unit Turbin Board">Operator Senior Main Unit Turbin Board</option>
                      <option value="Operator Senior Main Unit Boiler Lokal">Operator Senior Main Unit Boiler Lokal</option>
                      <option value="Operator Senior Main Unit Turbin Lokal">Operator Senior Main Unit Turbin Lokal</option>
                      <option value="Operator Senior Main Unit Electrical">Operator Senior Main Unit Electrical</option>
                      <option value="Operator Senior Common Unit CHCB CCR">Operator Senior Common Unit CHCB CCR</option>
                      <option value="Operator Junior Main Unit WTP">Operator Junior Main Unit WTP</option>
                      <option value="Operator Junior Main Unit Boiler Board">Operator Junior Main Boiler Board</option>
                      <option value="Operator Junior Main Unit Turbin Board">Operator Junior Main Turbin Board</option>
                      <option value="Operator Junior Main Unit Turbin ( Electrical )">Operator Junior Main Unit Turbin ( Electrical )</option>
                      <option value="Operator Junior Main Unit ( Electrical )">Operator Junior Main Unit ( Electrical )</option>
                      <option value="Operator Junior Turbin ( Electric )">Operator Junior Turbin ( Electric )</option>
                      <option value="Operator Junior Common Unit Stacker Reclaimer">Operator Junior Common Unit Stacker Reclaimer</option>
                      <option value="Operator Junior Common Unit Ship Unloader">Operator Junior Common Unit Ship Unloader</option>
                      <option value="Operator Junior Common Unit Ash Handling">Operator Junior Common Unit Ash Handling</option>
                      <option value="Operator Junior Main Unit Boiler Lokal">Operator Junior Main Unit Boiler Lokal</option>
                      <option value="Operator Junior Main Unit Turbin Lokal">Operator Junior Main Unit Turbin Lokal</option>
                      <option value="Operator Junior Coal Dan Ash Handling">Operator Junior Coal Dan Ash Handling</option>
                      <option value="Operator Junior Common Unit Coal Handling Board">Operator Junior Common Unit Coal Handling Board</option>
                      <option value="Staff Senior Kimia Dan Laboratorium">Staff Senior Kimia Dan Laboratorium</option>
                      <option value="Staff Senior Rendal Operasi">Staff Senior Rendal Operasi</option>
                      <option value="Staff Senior Bahan Bakar">Staff Senior Bahan Bakar</option>
                      <option value="Staff Senior Kinerja, Niaga, Settlement">Staff Senior Kinerja, Niaga, Settlement</option>
                      <option value="Staff Junior Bahan Bakar">Staff Junior Bahan Bakar</option>
                      <option value="Staff Junior Rendal Operasi">Staff Junior Rendal Operasi</option>
                      <option value="Staff Junior Kimia Dan Laboratorium">Staff Junior Kimia Dan Laboratorium</option>
                      <option value="Supervisor Senior Coal And Ash Handling Unit A">Supervisor Senior Coal And Ash Handling Unit A</option>
                      <option value="Supervisor Senior Coal And Ash Handling Unit B">Supervisor Senior Coal And Ash Handling Unit B</option>
                      <option value="Supervisor Senior Coal And Ash Handling Unit C">Supervisor Senior Coal And Ash Handling Unit C</option>
                      <option value="Supervisor Senior Coal And Ash Handling Unit D">Supervisor Senior Coal And Ash Handling Unit D</option>
                    </select>
                    <br><br>
                      <input type="submit" name="submitdatakaryawan" class="btn btn-info" value="Create">
                    </form>
                    <br>
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Jabatan
                      </th>
                    </thead>
                    <tbody>
                      @foreach( $operation as $datakaryawan)
                      <tr>
                        <td>
                          <p> {{$datakaryawan->id_karyawan}}</p>
                        </td>
                        <td>
                            <p> {{$datakaryawan->nama_karyawan}}</p>
                        </td>
                        <td>
                          <p> {{$datakaryawan->jabatan}}</p>
                        </td>
                        <td>
                          <form action="{{action('KaryawanoperationController@destroy', $datakaryawan['id'])}}" method="post">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Prestasi</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <strong>Create Data Prestasi</strong><br>
                    <form action="{{ route('prestasioperation')}} " method="post" class="form-horizontal" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <br>Nama Prestasi : <input type="text" name="namaprestasi" id="namaprestasi" placeholder="Masukkan nama prestasi" class="col-md-5">
                    <br><br>Tahun Prestasi : <input type="text" name="tahunprestasi" id="tahunprestasi" placeholder="Masukkan tahun prestasi" class="col-md-5">
                    <br><br>
                      <input type="submit" name="submitdataprestasi" class="btn btn-info" value="Create">
                    </form>
                    <br>
                    <thead class=" text-primary">
                      <th>
                        Nama Prestasi
                      </th>
                      <th>
                        Tahun Prestasi
                      </th>
                    </thead>
                    <tbody>
                        @foreach( $prestasi as $dataprestasi)
                      <tr>
                        <td>
                            <p> {{$dataprestasi->namaprestasi}}</p>
                        </td>
                        <td>
                          <p> {{$dataprestasi->tahunprestasi}}</p>
                        </td>
                        <td>
                          <form action="{{action('PrestasioperationController@destroy', $dataprestasi['id'])}}" method="post">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                        </td>
                      </tr>
                    </tbody>
                     @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/admindash/js/core/jquery.min.js"></script>
  <script src="../assets/admindash/js/core/popper.min.js"></script>
  <script src="../assets/admindash/js/core/bootstrap.min.js"></script>
  <script src="../assets/admindash/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/admindash/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/admindash/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/admindash/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/admindash/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
