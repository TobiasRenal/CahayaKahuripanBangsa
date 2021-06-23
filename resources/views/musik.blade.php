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
                                        <li><a class="dropdown-item" href="#page-top">Kursus Musik</a></li>
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
        <!-- <header class="masthead">
            
        </header> -->
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kursus Musik</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    PKBM Cahaya Kahuripan Bangsa menyelenggarakan kursus Gitar dan Keyboard gratis untuk anak dan dewasa. Ada tiga prinsip yang diangkat oleh PKBM CKB dalam menyelenggarakan kursus musik:
                </p>
                <p class="mb-4">
                    <ol>
                        <li>
                            Pendidikan Sesuai Usia: Kursus musik PKBM CKB dapat diikuti oleh anak dan dewasa. 
                            Masing-masing kelompok tidak akan dicampur antara anak dan dewasa, karena program kursus disesuaikan dengan usia dan 
                            perkembangan peserta kursus pada kelompok usia tersebut serta kebutuhan peserta kursus tersebut.   
                        </li>
                        </br>
                        <li>
                            Pendidikan Sosial: Kursus musik PKBM CKB tidak hanya mengedepankan keterampilan bermusik individu per individu semata, 
                            namun juga bagaimana keterampilan bermain musik tersebut mampu menumbuhkembangkan keterampilan sosial pesertanya. 
                            Peserta kursus didorong untuk bersosialisasi dan bekerja sama untuk menciptakan harmoni dalam bermain musik, misalnya dalam ensemble.                            
                        </li>
                        </br>
                        <li>
                            Pendidikan Kreatif Abad 21: Kursus musik PKBM CKB tidak hanya mendorong peserta kursusnya untuk memainkan alat musik, 
                            namun juga mengajak dan mendorong para peserta kursus untuk dapat menciptakan melodi hingga suatu hari menyusun komposisi lagu, 
                            baik secara individu maupun bersama-sama.  
                        </li>
                        </br>
                    </ol> 
                </p>
                <p class="mb-4">
                    Atas dasar ketiga prinsip tersebut, kursus Gitar dan Keyboard PKBM CKB dibuka untuk seluruh kalangan usia baik anak maupun dewasa, secara gratis.
                </p>
                <p class="mb-4">
                    <ul>
                        <li>
                            <h4>Kursus Gitar Anak</h4>
                            Masa belajar: Disesuaikan kebutuhan peserta, idealnya 3-4 tahun
                            </br>
                            Format belajar: berkelompok 2-5 orang
                            </br>
                            Waktu belajar: 1×60 menit per minggu, 4x per bulan (menyesuaikan kebutuhan peserta)   
                        </li>
                        </br>
                        <li>
                            <h4>Kursus Keyboard Anak</h4>
                            Masa belajar: 3-4 tahun (atau disesuaikan kebutuhan peserta)
                            </br>
                            Format belajar: berkelompok 2-5 orang
                            </br>
                            Waktu belajar: 1×60 menit per minggu, 4x per bulan
                        </li>
                        </br>
                        <li>
                            <h4>Kursus Gitar Dewasa</h4>
                            Masa belajar: 3-4 tahun (atau disesuaikan kebutuhan peserta)
                            </br>
                            Format belajar: berkelompok 2-5 orang
                            </br>
                            Waktu belajar: 1×60 menit per minggu, 4x per bulan
                        </li>
                        </br>
                        <li>
                            <h4>Kursus Keyboard Dewasa</h4>
                            Masa belajar: 3-4 tahun (atau disesuaikan kebutuhan peserta)
                            </br>
                            Format belajar: berkelompok 2-5 orang
                            </br>
                            Waktu belajar: 1×60 menit per minggu, 4x per bulan
                        </li>
                        </br>
                    </ul> 
                </p>
                <h3 class="mb-4">Pertanyaan Umum</h3>
                <p class="mb-4">
                    <ol>
                        <li>
                            Apakah untuk mengikuti kursus Gitar/Keyboard di PKBM CKB harus memiliki sendiri Gitar atau Keyboardnya?
                            </br>
                            </br>
                            <b>Lebih baik memiliki sendiri, namun jika tidak pun di PKBM CKB tersedia unit gitar dan keyboard yang digunakan untuk kursus.</b>
                        </li>
                        </br>
                        <li>
                            Bagaimana saya bisa mendaftar kursus musik?
                            </br></br>
                            <b>Khusus untuk kursus musik di PKBM CKB, mohon untuk mendaftar secara berkelompok  langsung datang ke kantor PKBM CKB dan mengisi formulir pendaftaran. Jadwal dan waktu kursus disesuaikan dengan kesediaan kelompok saat pertama kali mendaftar dan dapat disesuaikan kembali dengan tutor kursus saat sudah berjalan.</b>
                        </li>
                        </br>
                    </ol> 
                </p>
            </div>
        </section>
        <!-- Portfolio-->
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
