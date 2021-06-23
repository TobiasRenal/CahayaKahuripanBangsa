<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yayasan CKB</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('argon') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Yayasan CKB</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/sejarah">Latar Belakang & Sejarah</a></li>
                                <li><a class="dropdown-item" href="/personalia">Personalia</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Layanan
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a class="dropdown-item" href="#">Kesetaraan</a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item" href="/paketa">Paket A (Setara SD)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/paketb">Paket B (Setara SMP)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/paketc">Paket C (Setara SMA)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/pkk">PKK Paket C Vokasi</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://ltmpt.ac.id/">SBMPTN</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="/inggris">Kursus Bahasa Inggris</a></li>
                                        <li><a class="dropdown-item" href="/komputer">Kursus Komputer</a></li>
                                        <li><a class="dropdown-item" href="/musik">Kursus Musik</a></li>
                                        <li><a class="dropdown-item" href="/kober">Kober Cahaya Bintang</a></li>
                                        <li><a class="dropdown-item" href="/taekwondo">Taekwondo</a></li>
                                        <li><a class="dropdown-item" href="/karate">Karate INKAI</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Organisasi
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a class="dropdown-item" href="#">Divisi Pendidikan</a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item" href="https://pkbmckb.org/">PKBM CKB Lembang</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/tkceria">TK Ceria Bamek Kalbar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/narwastu">SD & SMP Narwastu Sumba NTT</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="/kesehatan">Divisi Kesehatan</a></li>
                                        <li><a class="dropdown-item" href="/pemberdayaan">Divisi Pemberdayaan Masyarakat</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Administrator</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Selamat datang di web resmi Yayasan Cahaya Kahuripan Bangsa</h1>
                        <hr class="divider divider-light" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Yayasan Cahaya Kahuripan Bangsa</p>
                        <a class="btn btn-primary btn-xl text-blue-75" href="#about">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Inspirasi dan inovasi berkelanjutan</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a consectetur libero. Nunc congue massa ante. Phasellus ut enim quis neque interdum condimentum at sed diam. Donec eu sem non elit mollis venenatis. Morbi eu sapien volutpat ipsum accumsan finibus mattis sed ligula. Sed lobortis arcu ut diam tristique mollis. Nulla consequat, mi ac fringilla semper, ipsum diam gravida elit, non hendrerit turpis odio id lectus. Integer non gravida ipsum. Pellentesque condimentum accumsan urna at dapibus. Aliquam quis aliquet leo.</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Program Paket Kesetaraan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Paket A</h3>
                            <p class="text-muted mb-0">Pendidikan Kesetaraan Kejar Paket A (setara SD) Tingkat I (setara kelas I-III) dan Tingkat II (setara kelas IV-VI) menggunakan Kurikulum 2013</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Paket B</h3>
                            <p class="text-muted mb-0">Pendidikan Kesetaraan Kejar Paket B (setara SMP) Tingkat III (setara kelas VII-VIII) dan Tingkat IV (setara kelas IX) kelas utama dan kelas jauh menggunakan Kurikulum 2013</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Paket C</h3>
                            <p class="text-muted mb-0">Pendidikan Kesetaraan Kejar Paket C (setara SMA) program peminatan IPS Tingkat V (setara kelas X-XI) dan Tingkat VI (setara kelas XII) kelas utama, kelas jauh dan kelas online menggunakan Kurikulum 2013</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">SBMPTN</h3>
                            <p class="text-muted mb-0">Pendidikan Untuk Mengerjar SBMPTN (Seleksi Bersama Masuk Perguruan Tinggi Negeri)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="">
            <div class="container-fluid p-0">
                <h2 class="text-center mt-0">Layanan yang tersedia</h2>
                <hr class="divider" />
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/kesetaraan.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Kesetaraan</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/inggris">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/kursusinggris.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Kursus Bahasa Inggris</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/komputer">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/kelaskomputer.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Kursus Komputer</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/musik">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/musik.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Kursus Musik</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/kober">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/paud.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Kober Cahaya Bintang</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/taekwondo">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/taekwondo.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Taekwondo</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-3">
                    </div>
                    <div class="col-lg-4 col-sm-6 container-hover">
                        <a href="/karate">
                            <img src="{{ asset('argon') }}/img/portfolio/thumbnails/karate.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text-caption">Program </br> Karate INKAI</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Google map-->
        <section class="page-section" id="services">
            <div>
                <h2 class="text-center mt-0">Temukan kami</h2>
                <hr class="divider" />
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.6350473741536!2d107.62346140649842!3d-6.814166840346534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe66435eac466ed54!2sPKBM%20Cahaya%20Kahuripan%20Bangsa!5e0!3m2!1sid!2sid!4v1623674578506!5m2!1sid!2sid" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!--Google Maps-->
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Yayasan Cahaya Kahuripan Bangsa</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('argon') }}/js/scripts.js"></script>
    </body>
</html>
