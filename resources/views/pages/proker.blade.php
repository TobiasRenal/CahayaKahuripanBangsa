<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Program Kerja | Yayasan CKB</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
  @endauth
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/datapengurus">
                    <i class="ni ni-badge text-blue"></i> Organisasi
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="ni ni-briefcase-24 text-orange"></i><strong>Program Kerja</strong>
                </a>
            </li>
            <li class="nav-item ">
                    <a class="nav-link" href="/dataasset">
                        <i class="ni ni-paper-diploma text-blue"></i> Asset
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/datainventaris">
                        <i class="ni ni-paper-diploma text-blue"></i> Inventaris
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/datakeuangan">
                        <i class="ni ni-money-coins text-green"></i> Keuangan
                    </a>
                </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="GET" action="/dataproker">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text" name="cari">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="/datarole" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Role Edit</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text"><strong>Success!</strong> Data berhasil ditambahkan!</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h1 class="h1 text-white d-inline-block mb-0">Program Kerja</h1>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- Add DATA -->
            <div class="row">
              <div class="col-md-4">
                  <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Tambah Data</button>
                  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <h2 class="text-center">Tambah Program Kerja</h2>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form action="{{ url('/dataproker/store') }}" method="POST">
                              @csrf
                              <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Nama Program" type="text" name="NamaProgramWebs">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Budget" type="text" name="BudgetWeb">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Pencapaian" type="text" name="PencapaianWeb">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-settings-gear-65"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Kendala" type="text" name="KendalaWeb">
                                </div>
                              </div>
                              <div>
                                <select class="form-control" name="roleidWeb" aria-labelledby="role">
                                @foreach($role as $rl)
                                  <option value="{{$rl->role_id}}">{{$rl->role_name}}</option>
                                @endforeach
                                </select>
                              </div>
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Tambah Data</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF THE ADD DATA-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="table-responsive">
      <table class="table align-items-center">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Program</th>
            <th scope="col">Budget</th>
            <th scope="col">Pencapaian</th>
            <th scope="col">Kendala</th>
            <th scope="col">Divisi</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($proker as $prk)
          <tr>
          <th>{{'PK-'.$prk->id_program}}</th>
            <th scope="row">
              <div class="media align-items-center">
                <div class="media-body">
                  <span class="mb-0 text-sm">{{$prk->nama_program}}</span>
                </div>
              </div>
            </th>
            <td>
              {{'Rp.'.number_format($prk->besar_anggaran, 0, ',', '.')}}
            </td>
            <td>
              <span class="badge badge-dot">
                <i class="bg-success"></i> {{$prk->pencapaian}}
              </span>
            </td>
            <td>
              {{$prk->kendala}}
            </td>
            <td>
            {{$prk->role_id}}
            </td>
            <td class="text-right">
              <div class="dropdown">
                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a class="dropdown-item" href="{{ url('/dataproker/'.$prk->id_program) }}">Update</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#response" href="#">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
          <div class="modal fade" id="response">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"id="exampleModalLongTitle">Hapus Data</h5>
                  <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="list-group">
                    <div class="d-flex w-100 justify-content-between">
                      <h3>Apa anda yakin akan menghapus?</h3>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ url('/dataproker/delete/'.$prk->id_program) }}" method="POST">
                    @method('delete')
                    @csrf
                      <button class="btn btn btn-danger">Hapus</button>
                      <button class="btn btn-primary" data-dismiss="modal">Batal</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
