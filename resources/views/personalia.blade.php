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
                                <li><a class="dropdown-item" href="#page-top">Personalia</a></li>
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
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Personalia</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <h1 class="text-center mt-0">Para tutor dan staf PKBM Cahaya Kahuripan Bangsa.</h1>
            <hr class="divider" />
            <div class="row py-5">
                <div class="col-lg-4 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/ketua.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Lince Sari Dianawati Leatemia, M.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Kepala PKBM</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/sekre.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Elisabeth Lusitania Desiawati</h2>
                        <p class="mb-0 text-small text-muted font-italic">Sekretaris PKBM</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/pengelolakober.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Sarah Fikriyyah Nurul Adillah</h2>
                        <p class="mb-0 text-small text-muted font-italic">Pengelola Kober Cahaya Bintang</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Rina Sulistia, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor2.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Komar Kusmawan</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor3.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Wahyudiana, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor4.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Diana Yulian Herdijah, S.Si.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor5.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Dra. Dwira Maya, M.A.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor6.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Dian Nuraeni, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor7.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Susi Ernawati, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor8.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Ade Santi</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor9.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Christina Juliana Narulita Dendo</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor10.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Siti Elah Julaeha, M.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor11.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Imas Siti Aminah, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor12.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Dedi Herdiana</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor13.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Wawan Setiawan</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor14.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Wulansari, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor15.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Aldian Hudaya, S.Pd.</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor16.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Saipul Pajri Rusli</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor17.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Ivan Sholeh Dauzan Farouq</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor17.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Ucih</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/tutor17.jpeg" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Bastari</h2>
                        <p class="mb-0 text-small text-muted font-italic">Tutor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <figure class="rounded p-3 bg-white shadow-sm">
                        <img src="{{ asset('argon') }}/img/gambar/driver.png" alt="" class="w-100 card-img-top">
                        <figcaption class="p-4 card-img-bottom">
                        <h2 class="h5 font-weight-bold mb-2 font-italic">Agung Sundara</h2>
                        <p class="mb-0 text-small text-muted font-italic">Driver</p>
                        </figcaption>
                    </figure>
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
