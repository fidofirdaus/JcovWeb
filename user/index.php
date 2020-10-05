<?php include('assets/header.php');
include('../app/config.php');
include('../app/functions.php');
ini_set('max_execution_time', 300); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="pt-6 container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                <h1>Jember Lawan</h1>
                <h1>COVID-19</h1>
                <h2 style="padding-top: 40px; line-height:32px;">Kamu dapat melihat penyebaran, membuat laporan dan konsultasi
                dengan gugus tugas covid-19 kabupaten jember</h2>
                <a href="#about" class="btn-get-started scrollto">Apa Itu COVID-19</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/fight.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h3>Tentang COVID-19</h3>
            </div>
            <br>
            <br>
            <div class="row justify-content-between">
                <div class="col-lg-6 order-lg-2 p2 about-img">
                    <img src="assets/img/Covid-19.png" class="img-fluid animated" alt="">
                </div>
                <div class="col-md-6 order-lg-3 p2">
                    <p data-aos="fade-up" data-aos-delay="100">
                      Coronavirus Disease 2019 atau COVID-19 adalah penyakit baru yang dapat menyebabkan gangguan pernapasan dan radang paru. Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2).
                    </p>

                    <p data-aos="fade-up" data-aos-delay="100">
                      Dari berbagai penelitian, metode penyebaran utama penyakit ini diduga adalah melalui droplet saluran pernapasan dan kontak dekat dengan penderita. Droplet merupakan partikel kecil dari mulut penderita yang dapat mengandung virus penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara.
                    </p>
                    <a data-aos="fade-up" data-aos-delay="100" href="#gejala" class="btn-get-started scrollto">Gejala Klinis COVID-19</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= gejala Section ======= -->
    <section id="gejala" class="gejala section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h3>Gejala Klinis COVID-19</h3>
            </div>
            <br>
            <div class="d-flex p-2 mt-3 mx-auto gelaja-img">
              <img src="assets/img/gejala.png" class="img-fluid" alt="">
            </div>
            <br>
            <div class="row justify-content-between">
                <div class="p1">
                    <p data-aos="fade-up" data-aos-delay="100">
                      Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).
                    </p>

                    <p data-aos="fade-up" data-aos-delay="100">
                      Jika Anda mengalami gejala, memiliki riwayat perjalanan ke wilayah terjangkit, atau berpaparan dengan orang positif/kemungkinan COVID-19. Alangkah lebih baik anda menghubungi gugus covid-19.
                    </p>
                    <a data-aos="fade-up" data-aos-delay="100" href="#data" class="btn-get-started scrollto">
                      Penyebaran COVID-19
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End gejala Section -->

    <!-- ======= Services Section ======= -->
    <section id="data" class="services section-bg">

      <?php
      $key = '';
      $get_data = tampil('penyebaran', $key);

      $queryTotal = mysqli_query($db, "SELECT SUM(positif) as totPositif, SUM(sembuh) as totSembuh, SUM(meninggal) as totMeninggal FROM penyebaran");

       ?>


      <div class="container" style="margin-top: 80px;">
          <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
              <p>Data Penyebaran di Kabupaten Jember</p>
          </div>
          <table class="table table-bordered" style="margin-bottom: 80px">
              <thead class="table-warning">
                  <tr>
                      <th scope="col" style="width: 50px" class="text-center">NO</th>
                      <th scope="col" style="width: 300px" class="text-center">KECAMATAN</th>
                      <th scope="col" style="width: 150px" class="text-center">POSITIF</th>
                      <th scope="col" style="width: 150px" class="text-center">SEMBUH</th>
                      <th scope="col" style="width: 150px" class="text-center">MENINGGAL</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $no = 1;
                  while ($data = mysqli_fetch_array($get_data)) {
                  ?>
                      <tr>
                          <td scope="row" class="text-center"><?= $no; ?></td>
                          <td class="text-center"><?= $data['kecamatan'] ?></td>
                          <td class="text-center"><?= $data['positif'] ?></td>
                          <td class="text-center"><?= $data['sembuh'] ?></td>
                          <td class="text-center"><?= $data['meninggal'] ?></td>
                      </tr>
                  <?php $no++;
                  } ?>
          </table>
          <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
              <p>Total Kasus COVID-19 di Kabupaten Jember</p>
              <?php
              while ($data = mysqli_fetch_assoc($queryTotal)) {
                  $total = $data['totPositif'] + $data['totSembuh'] + $data['totMeninggal'];
              ?>
                  <div class="row mb-5">
                      <div class="col-lg-4">
                          <div class="card" style="padding: 20px">
                              <img src="assets/img/sad.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                              <div class="card-body">
                                  <h3 class="card-title text-center"><?= $data['totPositif'] ?></h3>
                                  <h2 class="card-text text-center" style="color: chocolate;">Positif</h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card" style="padding: 20px">
                              <img src="assets/img/happy.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                              <div class="card-body">
                                  <h3 class="card-title text-center"><?= $data['totSembuh'] ?></h3>
                                  <h2 class="card-text text-center" style="color: chocolate;">Sembuh</h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card" style="padding: 20px">
                              <img src="assets/img/cry.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                              <div class="card-body">
                                  <h3 class="card-title text-center"><?= $data['totMeninggal'] ?></h3>
                                  <h2 class="card-text text-center" style="color: chocolate;">Meninggal</h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4 mt-5">
                          <h3 class="text-center">Jumlah Total : <?= $total; ?> Kasus</h3>
                      </div>
                      <div class="col-lg-4"></div>
                  </div>
              <?php } ?>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <h2>Informasi Dasar COVID-19</h2>
            <ul class="faq-list">
                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" class="" href="#faq1">Apa Itu Coronavirus dan COVID-19? <i class="icofont-simple-up"></i></a>
                    <div id="faq1" class="collapse show" data-parent=".faq-list">
                        <p>
                            Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernapasan Akut Berat/Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan, Tiongkok, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Apakah gejala COVID-19? <i class="icofont-simple-up"></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p>
                            Gejala COVID-19 sebagai berikut:<br>

                            - Demam ≥ 38°C <br>
                            - Batuk kering<br>
                            - Sesak napas<br>
                            - Nyeri tenggorokan/menelan<br>
                            Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit atau pernah merawat/kontak erat dengan penderita COVID-19, maka orang tersebut akan diperiksa melalui pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Siapa yang termasuk Orang Dalam Pemantauan (ODP)? <i class="icofont-simple-up"></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p>
                            Orang Dalam Pemantauan (ODP) adalah seseorang yang mengalami demam (≥38°C) atau riwayat demam; atau ISPA TANPA pneumonia DAN pada 14 hari terakhir sebelum timbul gejala, memenuhi salah satu kriteria: memiliki riwayat perjalanan atau tinggal di negara/wilayah yang melaporkan transmisi lokal” atau “memiliki riwayat perjalanan atau tinggal di area transmisi lokal di Indonesia”.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Siapa yang termasuk Pasien Dalam Pengawasan (PDP) ? <i class="icofont-simple-up"></i></a>
                    <div id="faq4" class="collapse" data-parent=".faq-list">
                        <p>
                            Pasien Dalam Pengawasan adalah seseorang dengan Infeksi Saluran Pernapasan Akut (ISPA) yaitu demam (≥38°C) atau riwayat demam; disertai salah satu gejala/tanda penyakit pernapasan seperti: batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan DAN pada 14 hari terakhir sebelum timbul gejala, memenuhi salah satu kriteria: "memiliki riwayat perjalanan atau tinggal di luar negeri yang melaporkan transmisi lokal" atau "memiliki riwayat perjalanan atau tinggal di area transmisi lokal di Indonesia";
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Seberapa bahaya COVID-19 ini? <i class="icofont-simple-up"></i></a>
                    <div id="faq5" class="collapse" data-parent=".faq-list">
                        <p>
                            Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus. Sekitar 1 dari setiap 6 orang mungkin akan menderita sakit yang parah, seperti disertai pneumonia atau kesulitan bernafas, yang biasanya muncul secara bertahap. Walaupun angka kematian penyakit ini masih jarang, namun bagi orang yang berusia lanjut, dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti diabetes, tekanan darah tinggi dan penyakit jantung), mereka biasanya lebih rentan untuk gejala yang lebih parah. Orang yang mengalami demam, batuk, dan sulit bernapas harus segera mendapatkan pertolongan medis.
                        </p>
                    </div>
                </li>
            </ul>

            <h2>Penularan COVID-19</h2>
            <ul class="faq-list">
                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" class="" href="#faq1_2">Bagaimana manusia bisa terinfeksi COVID-19? <i class="icofont-simple-up"></i></a>
                    <div id="faq1_2" class="collapse show" data-parent=".faq-list">
                        <p>
                            Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) dari hidung atau mulut pada saat batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di sekitarnya. Kemudian jika ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, hidung atau mulut (segitiga wajah), maka orang itu dapat terinfeksi COVID-19. Atau bisa juga seseorang terinfeksi COVID-19 ketika tanpa sengaja menghirup droplet dari penderita. Inilah sebabnya penting untuk memakai masker dan menjaga jarak dengan orang lain
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq2_2" class="collapsed">Siapa saja yang berisiko terinfeksi COVID-19?
                        <i class="icofont-simple-up"></i></a>
                    <div id="faq2_2" class="collapse" data-parent=".faq-list">
                        <p>
                            Orang yang tinggal atau bepergian di daerah di mana virus COVID-19 bersirkulasi sangat mungkin berisiko terinfeksi. Mereka yang terinfeksi adalah orang-orang yang dalam 14 hari sebelum muncul gejala melakukan perjalanan dari negara terjangkit, atau yang kontak erat, seperti anggota keluarga, rekan kerja atau tenaga medis yang merawat pasien sebelum mereka tahu pasien tersebut terinfeksi COVID-19.
                            <br>
                            Petugas kesehatan yang merawat pasien yang terinfeksi COVID-19 berisiko lebih tinggi dan harus konsisten melindungi diri mereka sendiri dengan prosedur pencegahan dan pengendalian infeksi yang tepat.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq3_2" class="collapsed">Manakah yang lebih rentan terinfeksi coronavirus: orang yang lebih tua atau orang yang lebih muda? <i class="icofont-simple-up"></i></a>
                    <div id="faq3_2" class="collapse" data-parent=".faq-list">
                        <p>
                            Tidak ada batasan usia orang-orang dapat terinfeksi oleh coronavirus ini (COVID-19). Namun orang yang lebih tua dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti asma, diabetes, penyakit jantung, atau tekanan darah tinggi) tampaknya lebih rentan mengalami gejala yang lebih parah.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq4_2" class="collapsed">Apakah COVID-19 dapat ditularkan dari orang yang tidak bergejala sakit? <i class="icofont-simple-up"></i></a>
                    <div id="faq4_2" class="collapse" data-parent=".faq-list">
                        <p>
                            Cara penularan utama penyakit ini adalah melalui tetesan kecil (droplet) yang dikeluarkan pada saat seseorang batuk atau bersin. Saat ini WHO menilai bahwa risiko penularan dari seseorang yang tidak bergejala COVID-19 sama sekali sangat kecil kemungkinannya.<br>

                            Namun, banyak orang yang teridentifikasi COVID-19 hanya mengalami gejala ringan seperti batuk ringan, atau tidak mengeluh sakit, yang mungkin terjadi pada tahap awal penyakit. Sampai saat ini, para ahli masih terus melakukan penyelidikan untuk menentukan periode penularan atau masa inkubasi COVID-19. Tetap pantau sumber informasi yang akurat dan resmi mengenai perkembangan penyakit ini.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <a data-toggle="collapse" href="#faq5_2" class="collapsed">Seberapa bahaya COVID-19 ini? <i class="icofont-simple-up"></i></a>
                    <div id="faq5_2" class="collapse" data-parent=".faq-list">
                        <p>
                            Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus. Sekitar 1 dari setiap 6 orang mungkin akan menderita sakit yang parah, seperti disertai pneumonia atau kesulitan bernafas, yang biasanya muncul secara bertahap. Walaupun angka kematian penyakit ini masih jarang, namun bagi orang yang berusia lanjut, dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti diabetes, tekanan darah tinggi dan penyakit jantung), mereka biasanya lebih rentan untuk gejala yang lebih parah. Orang yang mengalami demam, batuk, dan sulit bernapas harus segera mendapatkan pertolongan medis.
                        </p>
                    </div>
                </li>
            </ul>

            <h2>Mencegah Penularan COVID-19</h2>
            <ul class="faq-list">
                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" class="" href="#faq1_3">Bagaimana mengantisipasi penularan COVID-19? <i class="icofont-simple-up"></i></a>
                    <div id="faq1_3" class="collapse show" data-parent=".faq-list">
                        <p>
                            Hingga saat ini, belum ada vaksin untuk mencegah penularan COVID-19 tetapi Anda dapat melakukan tindakan pencegahan agar tidak tertular. Diantaranya dengan:
                        </p>
                        <ol>
                            <li>Menjaga kesehatan dan kebugaran agar sistem imunitas/kekebalan tubuh meningkat.</li>
                            <li>Mencuci tangan menggunakan sabun dan air mengalir atau menggunakan alkohol 70-80% handrub sesuai langkah-langkah mencuci tangan yang benar. Mencuci tangan sampai bersih merupakan salah satu tindakan yang mudah dan murah. Dan, sebagian besar penyebaran penyakit akibat virus dan bakteri bersumber dari tangan. Karena itu, menjaga kebersihan tangan adalah hal yang sangat penting.</li>
                            <li>Ketika batuk dan bersin, upayakan menjaga agar lingkungan Anda tidak tertular. Tutup hidung dan mulut Anda dengan tisu atau dengan lipatan siku tangan bagian dalam (bukan dengan telapak tangan) dan gunakan masker.</li>
                            <li>Hindari kontak dengan orang lain atau bepergian ke tempat umum.</li>
                            <li>Hindari menyentuh mata, hidung dan mulut (segitiga wajah). Tangan menyentuh banyak hal yang dapat terkontaminasi virus. Jika kita menyentuh mata, hidung dan mulut dengan tangan yang terkontaminasi, maka virus dapat dengan mudah masuk ke tubuh kita.</li>
                            <li>Gunakan masker penutup mulut dan hidung ketika Anda berada di luar rumah.
                            </li>
                            <li>Buang tisu dan masker yang sudah digunakan ke tempat sampah dengan benar, lalu cucilah tangan Anda.</li>
                            <li>Menunda perjalanan ke daerah/ negara dimana virus ini ditemukan.</li>
                        </ol>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq2_3" class="collapsed">Apakah masker kesehatan dapat mencegah COVID-19?
                        <i class="icofont-simple-up"></i></a>
                    <div id="faq2_3" class="collapse" data-parent=".faq-list">
                        <p>
                            Iya. Namun, Anda dapat menggunakan masker kain (berlapis 3) karena masker kesehatan dibutuhkan oleh petugas medis.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq3_3" class="collapsed">Apakah saya harus selalu menggunakan masker? <i class="icofont-simple-up"></i></a>
                    <div id="faq3_3" class="collapse" data-parent=".faq-list">
                        <p>
                            Iya. Anda wajib untuk selalu menggunakan masker saat berkegiatan di luar rumah. Masker yang digunakan dapat berupa masker kain (berlapis 3).
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq4_3" class="collapsed">Haruskah saya khawatir terhadap penyakit COVID-19 ini? <i class="icofont-simple-up"></i></a>
                    <div id="faq4_3" class="collapse" data-parent=".faq-list">
                        <p>
                            Anda diminta untuk selalu waspada dan mengikuti imbauan pemerintah. Tetap berada di rumah dan berkegiatan dari rumah dan tetap tenang. Carilah informasi yang benar dan akurat tentang perkembangan COVID-19 agar Anda mengetahui situasi wilayah Anda dan Anda dapat mengambil tindakan pencegahan yang tepat
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <a data-toggle="collapse" href="#faq5_3" class="collapsed">Apakah antibiotik efektif dalam mencegah atau mengobati COVID-19? <i class="icofont-simple-up"></i></a>
                    <div id="faq5_3" class="collapse" data-parent=".faq-list">
                        <p>
                            Tidak. Antibiotik hanya bekerja untuk melawan bakteri, bukan virus. Karena COVID-19 disebabkan oleh virus, maka antibiotik tidak bisa digunakan sebagai sarana pencegahan atau pengobatan. Namun, jika Anda dirawat di rumah sakit dan didiagnosis COVID-19, Anda mungkin akan diberikan antibiotik, karena seringkali terjadi infeksi sekunder yang disebabkan bakteri.
                        </p>
                    </div>
                </li>
            </ul>

        </div>
    </section><!-- End F.A.Q Section -->

</main><!-- End #main -->

<?php include 'assets/footer.php'; ?>
