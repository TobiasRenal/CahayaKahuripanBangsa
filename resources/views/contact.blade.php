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
                <a class="navbar-brand" href="/">Yayasan CKB</a>
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
                        <li class="nav-item"><a class="nav-link" href="/">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Administrator</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Contact-->
        <header class="masthead">
            <section class="page-section" id="contact">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6 text-center">
                            <h2 class="mt-0 txt-light">Punya Pertanyaan?</h2>
                            <hr class="divider" />
                            <p class="txt-light mb-5">Tulis pertanyaan anda dan kami akan menjawab secepatnya.</p>
                        </div>
                    </div>
                    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                        <div class="col-lg-6">
                            <form action="mailto:trenal68@gmail.com">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputName" type="text" placeholder="Enter your name..." />
                                    <label for="inputName">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                    <label for="inputEmail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="(123) 456-7890" />
                                    <label for="inputPhone">Nomor Telepon</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="inputMessage" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                    <label for="inputMessage">Pertanyaan</label>
                                </div>
                                <div class="d-grid"><button class="btn btn-blue btn-xl" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <i class="bi-phone fs-2 mb-3 text-muted"></i>
                            <div class="txt-light">(022) 4204721</div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!-- Services-->
        <section class="page-section bg-white" id="services">
            <div class="container px-4 px-lg-5 ">
                <h2 class="text-center mt-0">Hubungi Kami</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h3 mb-2">Alamat</h3>
                            <p class="text-muted mb-0">Jalan Maribaya No. 1 Ruko Central Lembang B-6 Lembang, Bandung Barat 40391, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h3 mb-2">Jam Kerja</h3>
                            <p class="text-muted mb-0">Senin s.d. Jumat Pukul 09.00-16.00 WIB</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h3 mb-2">Narahubung</h3>
                            <p class="text-muted mb-0">
                                Aldi : 08112163825
                                </br>
                                Desi : 081322281610
                                </br>
                                Kiki : 081286938633
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h3 mb-2">Email</h3>
                            <p class="text-muted mb-0">Email : admin@pkbmckb.org</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
