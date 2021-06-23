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
                                        <li><a class="dropdown-item" href="#page-top">Kursus Komputer</a></li>
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
                        <h2 class="text-white mt-0">Kursus Komputer</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    PKBM Cahaya Kahuripan Bangsa menyelenggarakan kursus komputer administrasi perkantoran. 
                    Dengan mengikuti kursus komputer di PKBM CKB, Anda dapat menggunakan aplikasi office untuk membuat berbagai laporan, perhitungan dengan rumus-rumus, 
                    menyiapkan penampilan presentasi, mengirim surat elektronik, mengakses internet, dan menggunakan aplikasi Google dengan G Suite for Education.
                </p>
                <h2 class="mb-4">
                    Keahlian apa yang akan saya kuasai?
                </h2>
                <p class="mb-4">
                    Ada tiga tingkatan kursus komputer administrasi perkantoran PKBM CKB:
                </p>
                <p class="mb-4">
                    <ol>
                        <li>
                            Dasar untuk mereka yang sama sekali belum pernah menggunakan komputer atau mereka yang pernah menggunakan komputer namun belum begitu terbiasa. 
                            Lulusan tingkat Dasar diharapkan sudah mengenal komputer dan bisa mengerjakan pekerjaan perkantoran sederhana.
                            
                        </li>
                        </br>
                        <li>
                            Menengah untuk mereka yang biasa menggunakan komputer namun belum mengenal semua fitur office secara detail dan mengerjakan pekerjaan yang sifatnya kompleks. 
                            Lulusan tingkat Menengah diharapkan sudah mampu menggunakan aplikasi Office untuk melakukan pekerjaan-pekerjaan rutinan sederhana maupun yang lebih rumit.
                            
                        </li>
                        </br>
                        <li>
                            Mahir untuk mereka yang sudah mahir menggunakan aplikasi Office namun belum mengenal fitur-fitur dan keterampilan khusus untuk menyempurnakan 
                            penguasaan keterampilan Office Anda. Lulusan tingkat Mahir diharapkan mampu menyelesaikan permasalahan-permasalahan dan tantangan-tantangan yang berkaitan 
                            dengan administrasi yang sifatnya bukan suatu hal yang rutin (misalnya, mengerjakan makalah penelitian, menerjemahkan dokumen, menyusun daftar indeks, 
                            dan lainnya) dan menyusun sendiri serta menerapkan langkah-langkah penyelesaiannya dengan terampil dan cepat.
                            
                        </li>
                        </br>
                    </ol> 
                </p>
                <p class="mb-4">
                    Ada beberapa aplikasi yang diajarkan pada kursus komputer aplikasi perkantoran PKBM CKB.
                </p>
                <h3 class="mb-4">
                    Microsoft Office Word
                </h3>
                <p class="mb-4">
                    <img src="{{ asset('argon') }}/img/portfolio/thumbnails/msword.png" alt="Word" style="width:170px;height:170px;margin-right:15px;" class="fl-left">
                    <div class = "w-50 align-middle tengah">
                        Microsoft Word adalah perangkat lunak pengolah kata andalan Microsoft. 
                        Word pertama kali diterbitkan pada tahun 1983 dengan nama Multi-Tool Word untuk Xenix. Microsoft Word, 
                        sejak versi 2013, cukup dinamakan Word saja.
                    </div>
                </p>
                </br>
                <h3 class="mb-4">
                    Microsoft Office Excel
                </h3>
                <p class="mb-4">
                    <img src="{{ asset('argon') }}/img/portfolio/thumbnails/msexcel.png" alt="Word" style="width:170px;height:170px;margin-right:15px;" class="fl-left">
                    <div class = "w-50 align-middle tengah">
                        Microsoft Excel adalah perangkat lunak lembar kerja yang dibuat oleh Miceosoft. 
                        Excel memiliki fitur kalkulasi dan pembuatan grafik yang paling populer dalam dunia komputer aplikasi perkantoran hingga saat ini.
                    </div>
                </p>
                </br>
                <h3 class="mb-4">
                    Microsoft Office PowerPoint
                </h3>
                <p class="mb-4">
                    <img src="{{ asset('argon') }}/img/portfolio/thumbnails/mspoint.png" alt="Word" style="width:170px;height:170px;margin-right:15px;" class="fl-left">
                    <div class = "w-50 align-middle tengah">
                        Microsoft PowerPoint adalah perangkat lunak presentasi yang dikembangkan di Microsoft. 
                        Aplikasi ini sangat banyak digunakan, khususnya di kalangan perkantoran, pebisnis, pendidik, pelajar, dan kalangan lainnya. 
                        PowerPoint digunakan untuk menyiapkan tayangan presentasi.
                    </div>
                </p>
                </br>
                <h3 class="mb-4">
                    Google Mail (Gmail)
                </h3>
                <p class="mb-4">
                    <img src="{{ asset('argon') }}/img/portfolio/thumbnails/gmail.png" alt="Word" style="width:170px;height:170px;margin-right:15px;" class="fl-left">
                    <div class = "w-50 align-middle tengah">
                        Gmail adalah layanan surat elektronik milik Google. 
                        Sebagai bentuk apresiasi kerjasama PKBM CKB dengan Google melalui G Suite for Education, 
                        seluruh peserta kursus komputer akan difasilitasi dengan keterampilan menggunakan Gmail untuk berkirim surat elektronik. 
                        Gmail bisa diakses dari komputer maupun gawai.
                    </div>
                </p>
                </br>
                <h3 class="mb-4">
                    Google Chrome
                </h3>
                <p class="mb-4">
                    <img src="{{ asset('argon') }}/img/portfolio/thumbnails/chrome.png" alt="Word" style="width:170px;height:170px;margin-right:15px;" class="fl-left">
                    <div class = "w-50 align-middle tengah">
                        Google Chrome adalah peramban internet sumber terbuka yang dikembangkan oleh Google dengan menggunakan mesin penyaji WebKit. 
                        Google Chrome menjadi peramban web paling populer. Di PKBM CKB, peserta kursus akan dibekali keterampilan menjelajah internet dengan Chrome, 
                        menggunakan layanan internet, serta keterampilan literasi digital yang komprehensif.
                    </div>
                </p>
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
