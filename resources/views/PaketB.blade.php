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
                                                    <a class="dropdown-item" href="#page-top">Paket B (Setara SMP)</a>
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
                        <h2 class="text-white mt-0">Paket B (setara SMP)</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    PKBM Cahaya Kahuripan Bangsa senantiasa menyesuaikan diri dengan dinamika perkembangan masyarakat, 
                    baik di tingkat lokal, nasional, maupun tingkat masyarakat global khususnya dalam rangka mewujudkan fungsi dan tujuan pendidikan nasional. 
                    Bersamaan dengan itu, dalam rangka meningkatkan mutu dan daya saing bangsa, pemerintah telah melakukan pengaturan 
                    kembali kurikulum dengan diterbitkannya Permendikbud No. 24 Tahun 2016 tentang kompetensi inti dan kompetensi dasar pelajaran pada kurikulum 
                    2013 di tingkat pendidikan dasar dan pendidikan menengah.
                </p>
                <p class="mb-4">
                    Pendidikan kesetaraan adalah program pendidikan nonformal yang menyelenggarakan pendidikan umum yang dapat diikuti oleh semua tingkatan. 
                    Pada tingkatan Paket B setara SMP/MTs, tujuannya secara khusus adalah mempersiapkan manusia yang dapat bekerja di lingkungan masyarakat. 
                    Untuk memastikan kualitas lulusan pendidikan kesetaraan setara dengan pendidikan formal, serta dengan mempertimbangkan tujuan tersebut, 
                    pengembangan kurikulum dilakukan dengan mengacu pada dan melalui kontekstualisasi kompetensi inti dan kompetensi dasar yang ditetapkan oleh pemerintah.
                </p>
                <p class="mb-4">
                    Pada hakikatnya, prinsip dan strategi yang diterapkan oleh PKBM Cahaya Kahuripan Bangsa dalam pengembangan kurikulum Pendidikan 
                    Kesetaraan Paket B setara SMP/MTs adalah dengan memastikan kompetensi dasar setara atau ekuivalen dengan kompetensi dasar pendidikan 
                    formal serta mempertimbangkan kebutuhan dan tantangan hidup bermasyarakat. Hal ini dapat menjadikan pendidikan kesetaraan sebagai pendidikan 
                    alternatif untuk memecahkan masalah sekaligus sebagai gambaran ideal peningkatan kualitas dan pengembangan pendidikan.
                </p>
                <p class="mb-4">
                    Struktur kurikulum Paket B merupakan pola susunan mata pelajaran dan beban belajar yang harus ditempuh oleh peserta didik dalam kegiatan pembelajaran, 
                    meliputi mata pelajaran, dan bobot satuan kredit kompetensi (SKK).
                </p>
                <p class="mb-4">
                    Penyusunan kurikulum pendidikan kesataraan mengacu pada komptensi inti dan kompetensi dasar kurikulum pendidikan dasar dan menengah 
                    (Permendikbud No. 24 tahun 2016). Kompetensi inti dan kempetensi dasar tersebut dilakukan kontekstualisasi dan fungsionalsasi tanpak 
                    mengurangi kualitas dan standar kompetensi yang ada. Di PKBM Cahaya Kahuripan Bangsa, pada mata pelajaran agama dan budi pekerti 
                    sepenuhnya menggunakan kurikulum pendidikan dasar dan menegah yang ditetapkan oleh Menteri Pendidikan dan Kebudayaan Republik Indonesia.
                </p>
                <p class="mb-4">
                    Muatan belajar Paket B dinyatakan dalam satuan kredit kompetensi (SKK) yang menunjukkan bobot kompetensi yang harus dicapai oleh 
                    peserta didik dalam mengikuti program pembelajaran, baik melalui pembelajaran tatap muka, tutorial, dan atau belajar mandiri. 
                    SKK merupakan penghargaan terhadap pencapaian kompetensi sebagai hasil belajar peserta didik dalam menguasai suatu mata pelajaran. 
                    SKK diperhitungkan untuk setiap mata pelajaran yang terdapat dalam struktur kurikulum. Satu SKK dihitung berdasarkan pertimbangan muatan SK dan KD tiap mata pelajaran.
                </p>
                <p class="mb-4">
                    SKK dapat digunakan untuk alih kredit kompetensi yang diperoleh dari jalur pendidikan informal, 
                    formal, kursus, keahlian dan kegiatan mandiri. Satu SKK adalah satu satuan kompetensi yang dicapai 
                    melalui pembelajaran 1 jam pelajaran tatap muka atau 2 jam pelajaran tutorial atau 3 jam pelajaran mandiri, 
                    atau kombinasi secara proporsional dari ketiganya.
                </p>
                <!-- Baru sampe sini -->
                <p class="mb-4">
                    SKK merupakan penghargaan terhadap pencapaian kompetensi sebagai hasil belajar warga belajar dalam menguasai suatu mata pelajaran. 
                    SKK diperhitungkan untuk setiap mata pelajaran yang terdapat dalam struktur kurikulum. Satu SKK dihitung berdasarkan pertimbangan muatan KI dan KD tiap mata pelajaran.
                </p>
                <p class="mb-4">
                    SKK dapat digunakan untuk alih kredit kompetensi yang diperoleh dari jalur pendidikan informal, formal, 
                    kursus, keahlian dan kegiatan mandiri. Satu SKK adalah satu satuan kompetensi yang dicapai melalui pembelajaran 
                    1 jam pelajaran tatap muka atau 2 jam pelajaran tutorial atau 3 jam pelajaran mandiri, atau kombinasi secara proporsional dari ketiganya. 
                    Di PKBM Cahaya Kahuripan Bangsa sendiri, tidak semua SKK diimplementasikan pada pembelajaran tatap muka; terdapat pengaturan proporsional 
                    atas bobot SKK yang didistribusikan ke dalam tatap muka, tutorial, dan mandiri sehingga pembelajaran pendidikan kesetaraan dapat berlangsung 
                    dengan kekhasan pendidikan kesetaraan dan tetap berupaya mencapai tujuan yang telah ditetapkan, yaitu agar lulusan Paket A memiliki keterampilan 
                    untuk memenuhi kebutuhan hidup.
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
