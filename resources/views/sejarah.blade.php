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
                                <li><a class="dropdown-item" href="#page-top">Latar Belakang & Sejarah</a></li>
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
        <!-- <header class="masthead">
        </header> -->
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Latar Belakang & Sejarah</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    Pusat Kegiatan Belajar Masyarakat (PKBM) merupakan prakarsa pembelajaran masyarakat yang didirikan dari, oleh, dan untuk masyarakat. 
                    PKBM adalah suatu institusi yang berbasis masyarakat (Community Based Institution). Terminologi PKBM dari masyarakat, berarti bahwa pendirian PKBM merupakan inisiatif dari masyarakat itu sendiri. 
                    Keinginan itu datang dari suatu kesadaran akan pentingnya peningkatan mutu kehidupan melalui suatu proses transformasional dan pembelajaran. 
                    Inisiatif ini dapat dihasilkan melalui suatu proses sosialisasi akan pentingnya PKBM sebagai wadah pemberdayaan masyarakat kepada beberapa anggota atau tokoh masyarakat setempat oleh pihak pemerintah ataupun pihak lain di luar komunitas tersebut.
                </p>
                <p class="mb-4">
                    Oleh masyarakat,berarti bahwa penyelenggaraan, pengembangan, dan keberlanjutan PKBM sepenuhnya menjadi tanggung jawab masyarakat itu sendiri. 
                    Ini juga bermakna adanya semangat kebersamaan, kemandirian, dan gotong royong dalam pengelolaan PKBM serta penyelenggaraan berbagai program pendidikan masyarakat pada lembaga tersebut. 
                </p>
                <p class="mb-4">
                    Untuk masyarakat,berarti bahwa keberadaan PKBM sepenuhnya untuk kemajuan dan keberdayaan kehidupan masyarakat tempat lembaga tersebut berada. 
                    Eksistensi lembaga didasarkan pada pemilihan program-program yang sesuai dengan kebutuhan pendidikan atau pemberdayaan masyarakat. 
                    Hal ini tidak menutup kemungkinan anggota masyarakat di luar komunitas tersebut ikut serta dalam berbagai program dan kegiatan yang diselenggarakan PKBM. 
                    Masyarakat bertindak sekaligus sebagai subjek dan objek dalam berbagai kegiatan yang diselenggarakan oleh PKBM. 
                    Berdasarkan data dari Badan Pusat Statistik (BPS) Kabupaten Bandung Barat tahun 2010 mengenai Penduduk Usia 10 tahun ke Atas Menurut Kelompok Umur dan Partisipasi Sekolah Laki-laki + Perempuan, penduduk Bandung barat Usia Sekolah, 10 – 19 tahun, ternyata masih banyak yang tidak/belum sekolah serta tidak bersekolah lagi (putus sekolah). 
                    Kemudian berdasarkan informasi PKBM milik beberapa yayasan swasta di Lembang, angka putus sekolah di kecamatan Lembang diperkirakan mencapai lebih dari seribu orang. 
                    Bahkan kehadiran beberapa PKBM di Lembang ternyata belum mampu  memangkas kisaran jumlah putus sekolah yang tinggi, yang sebagian besar disebabkan faktor ekonomi. 
                </p>
                <p class="mb-4">
                    Berikut data dari Badan Pusat Statistik (BPS) Kabupaten Bandung Barat.
                    </br>
                    </br>
                    <img src="{{ asset('argon') }}/img/gambar/tabelpenduduk.png" alt="Tabel Penduduk" class = "center-img">
                </p>
                <p class="mb-4">
                    Sebagai terobosan atas lingkaran kesulitan ini, Yayasan Cahaya Kahuripan Bangsa (CKB) mengambil inisiatif 
                    untuk menyelenggarakan PKBM secara mandiri bagi masyarakat Lembang dan sekitarnya, yang merupakan bagian dari Kabupaten Bandung Barat, secara gratis. 
                </p>
                <p class="mb-4">
                    Akhirnya setelah melengkapi berbagai persyaratan perizinan sesuai dengan ketetapan Dinas Pendidikan Bandung Barat, pada 4 Juni 2013, 
                    Kepala Dinas Pendidikan Pemuda dan Olahraga Kabupaten Bandung Barat menerbitkan Surat Keputusan (SK) Nomor 421/2522.1 
                    tentang Pemberian Izin Penyelenggaraan Pusat Kegiatan Belajar Masyarakat (PKBM) Cahaya Kahuripan Bangsa (CKB) yang berlaku untuk dua tahun.  
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
