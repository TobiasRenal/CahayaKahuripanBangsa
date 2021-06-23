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
                                                    <a class="dropdown-item" href="#page-top">Paket C (Setara SMA)</a>
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
                        <h2 class="text-white mt-0">Paket C (setara SMA)</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    Untuk menyesuaikan diri dengan dinamika perkembangan masyarakat baik di tingkat lokal, nasional, maupun global, 
                    guna mewujudkan fungsi dan tujuan pendidikan nasional, serta untuk meningkatkan mutu dan daya saing bangsa, 
                    Pemerintah Republik Indonesia telah melakukan pengaturan kembali kurikulum dengan diterbitkannya Permendikbud No. 24 Tahun 2016 
                    tentang kompetensi inti dan kompetensi dasar pelajaran pada Kurikulum 2013 pada pendidikan dasa rdan pendidikan menengah.
                </p>
                <p class="mb-4">
                    PKBM Cahaya Kahuripan Bangsa sebagai pelopor pelaksanaan pendidikan gratis di masyarakat Kecamatan 
                    Lembang Kabupaten Bandung Barat melaksanakan peranan penting pendidikan bagi penyiapan generasi penerus suatu bangsa. 
                    Sesuai dengan amanat dari UUD 1945 Pasal 31 Ayat 1 bahwa setiap warga negara berhak mendapat pendidikan. Pendidikan nasional 
                    harus mampu menjamin pemerataan kesempatan pendidikan yang bermutu untuk setiap warga negara. Negara wajib memberikan kesempatan 
                    pendidikan yang sama kepada semua warga negara tanpa kecuali. Warga negara yang tidak bisa mengikuti pendidikan di jalur sekolah 
                    formal harus dijamin memiliki kesempatan mendapatkan pendidikan setara melalui jalur pendidikan nonformal.
                </p>
                <p class="mb-4">
                    Pesatnya perkembangan ilmu pengetahuan dan teknologi telah berdampak pada cepatnya perubahan di semua bidang kehidupan. 
                    Di sisi lain, apa yang dipelajari selama di sekolah sering tidak bisa mengimbangi cepatnya perubahan yang terjadi di kehidupan nyata. 
                    Sebagai konsekuensi, setiap orang harus senantiasa belajar untuk meningkatkan pengetahuan, keterampilan/keahlian, 
                    dan/atau kompetensinya agar tidak tertinggal perkembangan zaman.
                </p>
                <p class="mb-4">
                    Sejak awal kehadirannya di kancah pendidikan di Indonesia, PKBM Cahaya Kahuripan Bangsa memegang 
                    fungsi penting sebagai bagian pendidikan nonformal dalam hal mengembangkan potensi warga belajar 
                    dengan penekanan penguasaan pengetahuan akademik dan keterampilan fungsional serta pengembangan 
                    sikap dan kepribadian profesional. Pada program Paket C PKBM Cahaya Kahuripan Bangsa, beberapa tujuan yang ingin diperoleh adalah:
                </p>
                <p class="mb-4">
                    <ol>
                        <li>
                            Kelompok umum memuat mata pelajaran yang disusun mengacu pada standar pendidikan formal sesuai Peraturan Mendikbud No. 
                            21 tahun 2016 tentang Standar Isi serta kontennya dikembangkan oleh pusat dan merupakan mata pelajaran yang wajib diberikan untuk semua peserta didik.
                        </li>
                        </br>
                        <li>
                            Kelompok Perminatan. Kelompok ini merupakan upaya memberikan pilihan 
                            berdasarkan minat warga belajar serta situasi dan kondisi warga belajar 
                            dan lembaga penyelenggara. Mata pelajaran peminatan, yang terbagi menjadi 
                            3 pilihan, yaitu: Peminatan Matematika dan Ilmu Alam, Peminatan Ilmu-ilmu 
                            Sosial, dan Peminatan Ilmu Bahasa dan Budaya.
                            </br>
                            Di PKBM Cahaya Kahuripan Bangsa, khusus program Paket C, baru diselenggarakan 
                            program Peminatan Ilmu-Ilmu Sosial. Hal ini dikarenakan kurangnya minat warga 
                            belajar ke bidang peminatan lainnya, serta keterbatasan sumber daya lembaga untuk 
                            menyelenggarakan program peminatan yang lain.
                        </li>
                        <li>
                            Kelompok Khusus terdiri dari kelompok pemberdayaan dan keterampilan.
                            <ol>
                                <li>
                                    Pemberdayaan memuat kompetensi untuk menumbuhkan keberdayaan, 
                                    harga diri, percaya diri, sehingga peserta didik mampu mandiri 
                                    dan berkreasi dalam kehidupan bermasyarakat. Materimateri untuk 
                                    mencapai kompetensi dapat meliputi: Pengembangan diri, pengembangan 
                                    kapasitas dalam rangka mendukung keterampilan warga belajar.
                                </li>
                                <li>
                                    Keterampilan diberikan dengan memperhatikan variasi potensi sumber daya 
                                    daerah yang ada, kebutuhan peserta didik dan peluang kesempatan kerja yang 
                                    tersedia, sehingga peserta didik mampu melakukan aktualisasi kemandirian, 
                                    otonomi, kebebasan dan kreativitas dalam berkarya untuk mengisi ruang publik 
                                    secara produktif.
                                    </br>
                                    Muatan tersebut merupakan muatan wajib, tetapi untuk pendalaman dan spesialisasi 
                                    warga belajar dapat memilih keterampilan keahlian yang sesuai potensi, kebutuhan, 
                                    kearifan lokal dan karakteristik warga belajar serta situasi dan kondisi lingkungan, 
                                    daya dukung lingkungan, dan daya dukung lembaga.
                                    </br>
                                    </br>
                                    Keterampilan keahlian untuk Paket C terbagi menjadi dua pilihan, 
                                    yaitu non sertifikasi dan tersertifikasi. Khusus untuk keterampilan 
                                    tersertifikasi merupakan keterampilan yang dituntut uji kompetensi oleh 
                                    lembaga yang berhak di akhir programnya.
                                    </br>
                                    </br>
                                    Alokasi SKK dalam Struktur kurikulum untuk keterampilan terstruktur/tersertifi 
                                    kasi merupakan alokasi waktu untuk penguasaan pengetahuan, kebutuhan beban belajar 
                                    untuk praktik disesuaikan dengan jenis keterampilan yang diambil dan diatur oleh 
                                    lembaga yang melakukan sertifikasi.
                                </li>
                            </ol>
                        </li>
                        <li>
                            Strategi dan pendekatan pembelajaran Paket C PKBM Cahaya Kahuripan Bangsa 
                            dirancang menggunakan pendekatan berbasis mata pelajaran sesuai dengan 
                            karakteristk dan kebutuhan pendidikan kesetaraan dan warga belajar
                        </li>
                        <li>
                            Tingkatan pada pendidikan kesetaraan Paket Cadalah sebagai berikut.
                            <ol>
                                <li>
                                    Muatan dan kompetensi Tingkatan 5/ setara dengan kelas X – XI pada jenjang pendidikan formal
                                </li>
                                <li>
                                    Muatan dan kompetensi Tingkatan 6/ setara dengan kelas XII pada jenjang pendidikan formal
                                </li>
                            </ol>
                        </li>
                    </ol> 
                </p>
                <p class="mb-4">
                    Muatan belajar program pendidikan kesetaraan dinyatakan dalam satuan kredit 
                    kompetensi (SKK) yang menunjukkan bobot kompetensi yang harus dicapai oleh 
                    peserta didik dalam mengikuti program pembelajaran, baik melalui tatap muka, 
                    praktek keterampilan, dan/atau kegiatan mandiri. Satu SKK adalah satu satuan 
                    kompetensi yang dicapai melalui pembelajaran 1 jam tatap muka atau 2 jam tutorial 
                    atau 3 jam mandiri, atau kombinasi secara proporsional dari ketiganya.
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
