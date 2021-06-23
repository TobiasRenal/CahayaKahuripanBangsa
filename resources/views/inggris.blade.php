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
                                        <li><a class="dropdown-item" href="#page-top">Kursus Bahasa Inggris</a></li>
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
                        <h2 class="text-white mt-0">Kursus Bahasa Inggris</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    Bahasa adalah alat komunikasi. Bahasa menghubungkan masyarakat lokal dengan masyarakat dunia. Tanpa bahasa, manusia tidak dapat berkomunikasi, 
                    manusia tidak bisa menyampaikan pikiran dan perasaannya. 
                    Penguasaan bahasa, khususnya penguasaan keterampilan berbicara, mendengar, 
                    membaca dan menulis, merupakan bagian yang penting untuk dipelajari agar menghindari miskomunikasi yang dapat berujung menjadi konflik sosial. 
                    Pembelajaran bahasa menjadi semakin penting bagi semua orang, khususnya pembelajaran Bahasa Inggris, terlebih dengan perkembangan zaman yang demikian canggih, 
                    yang di dalamnya termasuk perkembangan ilmu pengetahuan dan teknologi yang sangat pesat dan cepat. 
                    Dengan penguasaan Bahasa Inggris, seseorang diharapkan dapat berkomunikasi di kancah internasional serta dapat menguasai ilmu pengetahuan 
                    dan teknologi yang pada umumnya ditulis dalam bahasa Inggris. Proses pembelajaran bahasa Inggris diharapkan dapat diarahkan 
                    agar individu dapat berkomunikasi dengan baik.
                </p>
                <p class="mb-4">
                    Di PKBM Cahaya Kahuripan Bangsa, Bahasa Inggris adalah bahasa asing pertama yang dipelajari oleh para warga belajar pendidikan kesetaraan Paket A, Paket B, dan Paket C. 
                    Bahasa Inggris juga merupakan bahasa asing pertama yang wajib dipelajari oleh setiap peserta didik dalam satuan pendidikan dasar 
                    dan menengah formal serta di tingkat Perguruan Tinggi. 
                    Kewajiban seorang idnividu mempelajari bahasa Inggris merupakan upaya pemerintah Indonesia dalam menghadapi tantangan Revolusi Industri 4.0. 
                    Bahasa Inggris sebagai bahasa internasional menjadi penting dalam rangka menjembatani komunikasi antarbangsa di dunia. 
                    Perkembangan pesat dunia internasional tidak dapat ditawar lagi jika kita tidak mau ketinggalan dengan bangsa lain bangsa lain. 
                    Peningkatan kualitas sumber daya manusia Indonesia justru terletak bagaimana bangsa Indonesia dapat bersaing di dunia internasional. 
                    Dalam rangka menunjang keberhasilan pembelajaran bahasa Inggris di satuan pendidikan formal, kehadiran lembaga kursus dan pelatihan menjadi sangat penting. 
                    Hal ini dapat dirasakan dengan banyaknya lulusan pendidikan formal yang belum mampu berbahasa Inggris sehingga 
                    mereka merasa perlu mengikuti proses pembelajaran bahasa Inggris di luar sekolah. 
                    Kesempatan mempraktikkan berbahasa Inggris secara aktif diberikan lebih banyak di lembaga kursus dan pelatihan karena rasio pendidik dan peserta yang relatif kecil.
                </p>
                <p class="mb-4">
                    Dengan demikian, PKBM Cahaya Kahuripan Bangsa dengan program Kursus Bahasa 
                    Inggris Gratis ikut berperan secara aktif dalam meningkatkan kualitas sumber daya manusia Indonesia. 
                    Untuk mengarahkan proses pembelajaran dan memandu kualitas lulusan agar sesuai dengan apa yang diharapkan oleh masyarakat, 
                    standar kompetensi lulusan Kursus Bahasa Inggris diperlukan sebagai acuan.
                </p>
                <p class="mb-4">
                    Di PKBM Cahaya Kahuripan Bangsa, terdapat dua program Bahasa Inggris yang diselenggarakan.
                    </br>
                    English For Kids — program kursus keterampilan berbahasa Inggris minimal untuk anak-anak agar dapat mengenal kosakata – kosakata dasar dalam Bahasa Inggris.
                    </br>
                    Survival English — program kursus keterampilan berbahasa Inggris minimal untuk dapat melakukan fungsi sosial dalam masyarakat dengan menggunakan struktur kalimat dan kosa kata sederhana. 
                </p>
                <h1 class="txt-blue mb-4 text-center">
                    SKL English for Kids
                </h1>
                <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kompetensi Inti</th>
                    <th scope="col">Kompetensi Dasar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            Peserta kursus dapat melafalkan huruf-huruf dan kata-kata dalam Bahasa Inggris dengan aturan pelafalan Bahasa Inggris yang berlaku secara umum
                        </td>
                        <td>
                            1.1. Melafalkan huruf-huruf Bahasa Inggris
                            </br>
                            </br>
                            1.2. Melafalkan beberapa kosa kata Bahasa Inggris dengan berbagai perbedaan aturan pelafalan (schwa, dll.)
                            </br>
                            </br>
                            1.3. Membaca kalimat-kalimat sederhana yang ditulis dalam Bahasa Inggris dan memahami makna yang terkandung dalam kalimat tersebut.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            Peserta kursus mengenali benda-benda yang ada di sekitarnya dalam konteks kehidupan sehari-hari di rumah dan di sekolah
                        </td>
                        <td>
                            2.1. Mengenal dan menyebutkan benda-benda yang ditemui dalam kehidupan sehari-hari di rumah dan di sekolah.
                            </br>
                            </br>
                            2.2. Menjawab pertanyaan lisan dan tertulis tentang perbendaan yang ditemui dalam kehidupan sehari-hari di rumah dan di sekolah.
                            </br>
                            </br>
                            2.3. Mengajukan pertanyaan tentang perbendaan yang ditemui dalam kehidupan sehari-hari di rumah dan di sekolah.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            Peserta kursus dapat mengucapkan salam, membuka percakapan, dan mengakhiri percakapan (perpisahan) dengan ragam bahasa akrab dan sopan
                        </td>
                        <td>
                            3.1. Membuka percakapan dengan salam yang tepat dengan memperhatikan siapa lawan bicara
                            </br>
                            </br>
                            3.2. Menjawab ucapan salam dengan tepat sesuai dengan siapa yang mengucapkan salam
                            </br>
                            </br>
                            3.3. Mengakhiri percakapan dengan mengucapkan salam perpisahan sesuai dengan lawan bicara
                            </br>
                            </br>
                            3.4. Menjawab salam perpisahan dengan tepat sesuai dengan lawan bicara
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                            Peserta kursus dapat mengidentifikasi dan membedakan angka-angka dalam Bahasa Inggris serta menggunakannya dalam konteks kehidupan keseharian
                        </td>
                        <td>
                            4.1. Mengenal angka bilangan cacah 0, 1-12
                            </br>
                            </br>
                            4.2. Mengenal angka bilangan cacah 13-19
                            </br>
                            </br>
                            4.3. Mengenal angka bilangan cacah 20-99
                            </br>
                            </br>
                            4.4. Mengenal angka bilangan cacah 100-999
                            </br>
                            </br>
                            4.5. Mendeskripsikan banyak benda yang ditemui dalam konteks kehidupan keseharian dengan menggunakan bilangan cacah
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                            Peserta kursus dapat memperkenalkan dirinya sendiri kepada orang yang baru ditemui dalam percakapan dua orang, dan memperkenalkan diri di depan umum
                        </td>
                        <td>
                            5.1. Memperkenalkan diri sendiri dalam percakapan dua orang
                            </br>
                            </br>
                            5.2. Memperkenalkan diri sendiri dalam percakapan kelompok kecil (2-5 orang)
                            </br>
                            </br>
                            5.3. Memperkenalkan diri sendiri kepada kelompok di atas 5 orang
                            </br>
                            </br>
                            5.4. Menanyakan informasi tentang orang lain yang belum dikenal kepada teman yang mengenalnya
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>
                            Peserta kursus dapat menggunakan kata ganti benda (it, this, dan that) untuk mendeskripsikan benda dan fenomena yang ditemuinya dalam konteks kehidupan keseharian
                        </td>
                        <td>
                            6.1. Menggunakan kata ganti benda (it, this, dan that) untuk mendeskripsikan benda dan fenomena dalam kehidupan keseharian
                            </br>
                            </br>
                            6.2. Menanyakan benda dan fenomena dalam kehidupan keseharian dengan menggunakan kata ganti benda (it, this, dan that) sesuai dengan konteks percakapan
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>
                            Peserta kursus dapat menggunakan kata ganti orang untuk mendeskripsikan pribadi individu atau kelompok tertentu dalam kehidupannya
                        </td>
                        <td>
                            7.1. Menggunakan kata ganti perseorangan individu (he, she, it) serta nama individu untuk mendeskiprisikan pribadi seseorang
                            </br>
                            </br>
                            7.2. Menggunakan kata ganti jamak/kelompok (you, they, we) serta identitas kelompok (i.e. A and B) untuk mendeskripsikan kelompok tertentu
                            </br>
                            </br>
                            7.3. Menggunakan kata ganti pihak pertama dan kedua (I, you) untuk membicarakan diri sendiri atau lawan bicara
                        </td>
                    </tr>
                </tbody>
                </table>
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
