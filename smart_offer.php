<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="<?php echo base_url()?>application/views/landing.css">

    <title>Landing Page SmartPSC</title>
</head>

<body>
    <!-- Section Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" style="font-size: 18px; color: orange" href="#">HARMONI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#tentangkami">Tentang Harmoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#pelanggan">Pelanggan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Section  -->

    <!-- section pertama -->
    <section class="pertama">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="pr-2"><strong>Bersama <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;">Smart</span><span style="color: rgb(9, 104, 67);">PSC </span> </strong> menuju layanan <span style="font-style: italic;">emergency</span> yang
                        <strong>Unggul</strong> dan <strong>terintegrasi</strong>
                    </h2>
                    <p class="text-right"><span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> telah berpengalaman mendampingi faskes/instansi yang ingin berkembang pesat,
                        didukung fleksibilitas role dan kedalaman fitur dengan teknologi yang canggih.</p> <br>
                    <a href="#hubungi-kami" class="btn btn-success rounded-pill px-4 py-2" data-target="#header-fourth"> Minta Demo atau Penjelasan <i class="fa fa-angle-right px-3 py-1 bg-white text-success rounded-pill"></i> </a>
                </div>
                <div class="col-md-6 ">
                    <img class="ms-2 gambar" src="<?php echo base_url()?>assets/images/offer/doctor2.png" width="100%" style="opacity: 90%" alt="" />
                </div>
            </div>
        </div>
        <!-- <svg class="gelombang1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L80,154.7C160,181,320,235,480,224C640,213,800,139,960,112C1120,85,1280,107,1360,117.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg> -->
    </section>
    <!-- Akhir section pertama -->
    <!-- ======= About Us Section ======= -->
    <section id="tentangkami" class="about mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-3" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: rgb(12, 95, 67);">Apa Itu </span> Smart<span style="color: rgb(6, 99, 63);">PSC</span><span style="color: rgb(7, 83, 36);">..?</span> </h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p><span style="color: red;">Smart</span> <span style="color: rgb(13, 112, 66);">PSC</span> adalah sistem
                        pelayanan gawat darurat dan kebencanaan dengan dukungan teknologi informasi melalui ???call center??????
                        ???dispatching??? ??? ???ambulance/police/disaster/fire-fighter operation management???. Sistem ini mendukung layanan kegawatdaruratan baik medis maupun non medis, termasuk kecelakaan, darurat sakit, kriminalitas, keamanan, bencana alam, kebakaran dan situasi kegawatan lain kepada masyarakat yang membutuhkan bantuan dengan cara menghubungi Call Centre lewat emergency button, emergency number, WA dan channel lain..</p>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> mampu
                        mengintegrasikan RSUD Prov./Kota/Kab., Rumah Sakit Swasta se-Prov./Kota/Kab., Ambulance Puskesmas se-
                        Prov./Kota/Kab., Kepolisian, Badan Penanggulangan Bencana Daerah, Pemadam Kebakaran, serta sektor/dinas lain
                        maupun fihak swasta terkait. Sistem ini mengutamakan kecepatan dan ketepatan pelayanan dan penanggulangan di
                        lokasi, termasuk penanganan korban mulai dari tempat kejadian sampai dengan rumah sakit.
                    </p>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p><span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> juga memberikan
                        pelayanan telesupporting termasuk telemedicine. Apabila terjadi kegawatdaruratan di masyarakat langsung
                        telepon call center, pertolongan bisa dilakukan dengan instruksi dari telepon, dan jika diperlukan maka akan
                        datang bantuan dari instansi terkait yang telah terintegrasi..</p>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p> Dalam
                        <span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> manajemen
                        operasional tim penanganan di lapangan, sudah dikelola dengan menggunakan teknologi digital. Sehingga
                        informasi bisa diperoleh dan dimanfaatkan secara langsung, akurat dan cepat, termasuk untuk keperluan
                        manajemen tingkat menengah, bahkan sampai ke eksekutif pemerintahan dan legislatif untuk pengambilan
                        keputusan jangka menengah panjang.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <section id="more-services" class="more-services mt-3 mb-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: rgb(12, 95, 67);">Implementasi</span> Smart<span style="color: rgb(9, 104, 67);">PSC</span><span style="color: black;"></span> </h2>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/1.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Launching Tulungagung</h5>
                            <p class="card-text">Launching PSC-119 Tulungagung (sekaligus sebagai Percontohan Nasional PSC) oleh Ibu
                                Menteri Kesehatan RI (2016)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/2.jpg')" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title">Command Center</h5>
                            <p class="card-text">Suasana Command Center (Call Center) PSC-119, dengan 2 Call Taker dan 1 Dispatche</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/3.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Implementasi Lapangan</h5>
                            <p class="card-text">Tim PHC turun ke lapangan setelah ditugaskan Command Center PSC-119, terkoneksi
                                dengan menggunakan Aplikasi Mobile SmartPSC pada smartphone/tablet Driver/Perawat Tim PHC</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/4.jpg')" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title">Implementasi Lapangan</h5>
                            <p class="card-text">Kelengkapan dan kecanggihan fasilitas medis dan ketrampilan para tenaga medis sangat
                                menentukan ketepatan, kecepatan & kualitas pelayanan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/6.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Event MotoGP Mandalika</h5>
                            <p class="card-text">Dala event Internasional SmartPSC mendukung penuh PCC NTB di RSUDP NTB (Province
                                Command Center)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url()?>assets/images/offer/5.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Event MotoGP Mandalika</h5>
                            <p class="card-text">Bersama NTB Medical Leaders Bp.Sudarman (PSC Loteng) dan dr.Eko, SpEM (RSUDP NTB)
                                persiapan MotoGP Medical Team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tombol">
        <div class="container  mb-5">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color:rgb(12, 95, 67);"> <span> <strong>Emergency Button </strong> </span>
                </h2>
            </div>
            <div class="row bg-success p-4 justify-content-center" style="border-radius: 15PX;">
                <div class="col-md-6 ">
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <img class="ms-2 gambar" src="<?php echo base_url()?>assets/images/offer/smartpsc1.jpg" width="100%" style="opacity: 90%;  border-radius: 15PX;" alt="" />
                        </div>
                        <div class="col-md-2"></div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <img class="ms-2  gambar" src="<?php echo base_url()?>assets/images/offer/hp1.png" width="90%" style="opacity: 90%;" alt="" />
                                </div>
                                <div class="col-md-4 col-4">
                                    <img class="ms-2  gambar" src="<?php echo base_url()?>assets/images/offer/hp2.png" width="90%" style="opacity: 90%;" alt="" />
                                </div>
                                <div class="col-md-4 col-4">
                                    <img class="ms-2  gambar" src="<?php echo base_url()?>assets/images/offer/hp3.png" width="90%" style="opacity: 90%;" />
                                </div>
                            </div>
                            <!-- <img class="ms-2  gambar" src="<?php echo base_url()?>assets/images/offer/smartpsc2.jpg" width="80%" style="opacity: 90%;  border-radius: 15PX;" alt="" /> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class=" mb-2 mt-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: rgb(255, 255, 255);"> <span style="font-family: sans-serif;font-weight: 400; color: rgb(255, 255, 255);"><strong>Emergency Button </strong> </span> Smart<span style="color: rgb(255, 255, 255);">PSC</span><span style="color: black;"></span> </h5>
                    <p class="text-right" style="color:rgb(255, 255, 255);">Emergency button SmartPSC merupakan sebuah fitur yang terdapat pada aplikasi publik SmartPSC, ada beberapa fitur diantaranya </p>
                    <p style="color: rgb(255, 255, 255);"> <strong>Emergency Service</strong> <br>Layanan permintaan bantuan kejadian emergency terhubung dengan CC dan Ambulan terdekat</p>
                    <p style="color: rgb(255, 255, 255);">
                    </p>
                    <p style="color: rgb(255, 255, 255);"> <strong>Ambulan Serrvice</strong> <br> Layanan Transportasi pengantaran dengan Mobil ambulan yang dilengkapi peralatan medis dan tenaga medis</p>
                    <p style="color: rgb(255, 255, 255);"> <strong>Home Care Service </strong> <br>Layanan permintaan bantuan medis di rumah pasien. Layanan ini terhubung dengan CC dan Tenaga Medis sesuai</p>
                    <button type="button" class="btn btn-light rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Demo <i class="fa fa-angle-right px-3 py-1 bg-success text-white rounded-pill"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-center bg-light">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Testimoni</h5>
                        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center ">
                            <div class="col-md-12">
                                <video id="video" autoplay controls>
                                    <source src="<?php echo base_url()?>assets/video/smartpsc.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->
    </section>

    <section id="pelanggan" class="pb-4 pt-4" style="background-color:#F1F7FD;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: rgb(5, 66, 33);">Clients</span> Smart<span style="color: rgb(9, 104, 67);">PSC</span><span style="color: black;"></span> </h2>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-2 col-4 mb-2">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo1.png" width="50%" class="card-img-top" alt="project1" />
                            </div>
                        </div>

                        <div class="col-md-2 col-4 mb-2">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo2.png" class="card-img-top" alt="project1" />
                            </div>
                        </div>

                        <div class="col-md-2 col-4 mb-2">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo3.png" class="card-img-top" alt="project1" />
                            </div>
                        </div>

                        <div class="col-md-2 col-4 mb-2">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo4.png" class="card-img-top" alt="project1" />
                            </div>
                        </div>

                        <div class="col-md-2 col-4 mb-2">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo5.png" class="card-img-top" alt="project1" />
                            </div>
                        </div>

                        <div class="col-md-2 col-4 mb-2 text-center">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/images/offer/logo6.png" class="card-img-top" alt="project1" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <h5 class="text-center">Support Event</h5>
                        <div class="col-md-4 col-4">
                            <img src="<?php echo base_url()?>assets/images/offer/psc1.jpg" class="card-img-top" alt="project1" />
                        </div>
                        <div class="col-md-4 col-4">
                            <img src="<?php echo base_url()?>assets/images/offer/support1.jpg" class="card-img-top" alt="project1" /> <br>
                        </div>
                        <div class="col-md-4 col-4">
                            <img src="<?php echo base_url()?>assets/images/offer/psc4.jpg" class="card-img-top" alt="project1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="p-2 mt-2">
        <div class="container mt-4 pb-2">
            <div class="row justify-content-center">
                <h2 class="text-center mb-3" class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color:rgb(12, 95, 67);">Testimoni</h2>
                <div class="col-md-2 col-12 mb-2">
                    <iframe style="width: 100%; border-radius: 10px;" src="https://www.youtube.com/embed/auWQiXDTPF4">
                    </iframe>
                </div>
                <div class="col-md-2 col-12 mb-2">
                    <iframe style="width: 100%;  border-radius: 10px;" src="https://www.youtube.com/embed/QjZQr5KOHFY">
                    </iframe>
                </div>
                <div class="col-md-2 col-12 mb-2 ">
                    <iframe style="width: 100%;  border-radius: 10px;" src="https://www.youtube.com/embed/EkeDBfIESJQ">
                    </iframe>
                </div>
                <div class="col-md-2 col-12 mb-2">
                    <iframe style="width: 100%;  border-radius: 10px;" src="https://www.youtube.com/embed/xSDMnaLqhew">
                    </iframe>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- section ke dua-->
    <section id="hubungi-kami" style="background-color:#F1F7FD;">
        <div class="container">
            <h6 class="text-center text-success pt-4"> <strong> Bantu Kami Menghubungi Anda </strong></h6>
            <p class="text-secondary text-center mt-1">Silahkan isi form di bawah ini untuk mendapatkan demo.</p>
            <div class="row justify-content-center">
                <div class="col-md-8 mt-3">

                    <form id="formClient" class="row form-group mb-4">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Nama Lengkap<span class="text-danger">*</span></label>
                            <input required type="text" name="nama" placeholder="Masukkan nama lengkap" class="form-control" id="exampleInputEmail1" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Email<span class="text-danger">*</span></label>
                            <input required type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Nomor Handphone/WA<span class="text-danger">*</span></label>
                            <input required type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nomor handphone" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Nama Lengkap Instansi/Faskes<span class="text-danger">*</span></label>
                            <input required type="text" name="instansi" placeholder="Masukkan nama instansi/perusahaan/faskes" class="form-control" id="exampleInputEmail1" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Jabatan<span class="text-danger">*</span></label>
                            <input required type="text" name="jabatan" placeholder="Masukkan jabatan" class="form-control" id="exampleInputEmail1" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1">Nomor Telepon Instansi/Perusahaan<span class="text-danger">*</span></label>
                            <input required type="text" name="telpInstansi" class="form-control" placeholder="Masukkan nomor telepon" id="exampleInputEmail1" />
                        </div>
                        <div class="mb-3 form-group text-center">
                            <button type="button" id="insertClient" class="btn btn-success btn-block rounded-pill py-2">Kirim
                                Permintaan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-success">
        <div id="header-fifth" class="d-flex flex-row p-5">
            <div class="container">
                <div class="row text-white justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Harmoni Integra</h4>
                                <p><i class="fa fa-phone-square"></i> +62 821 1013 6555</p>
                                <p> info@harmoni-integra.com <br> Jl. Wiguna Tengah 12-15 SURABAYA</p>
                                <a class="text-white" href="#">www.smartpsc.id</a>
                                <p>Copyright ?? 2017 Harmoni-Integra.</p>
                            </div>
                            <div class="col-md-6 text-white">
                                <a class="text-white" href="#"> <i class="fa fa-list-alt">
                                    </i> <strong>Produk</strong></a>
                                <br />
                                <a class="text-white" href="#tentangkami" target="_blank"> <i class="fa fa-info-circle"></i> <strong>Tentang Harmoni </strong> </a>
                                <br />
                                <a class="text-white" href="#pelanggan" target="_blank"> <i class="fa fa-user-o"></i> <strong>Pelanggan </strong> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        //Fetch form to apply custom Bootstrap validation
        $('#insertClient').click(function() {
            // 
            var form = $('#formClient');
            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
                form.addClass('was-validated')
            } else {
                new Swal({
                    title: 'loading.',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                        $.ajax({
                            url: "<?php echo base_url()?>lp/requestDemo",
                            type: 'POST',
                            data: $('#formClient').serialize(),
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                if (data["status"] == "success") {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Permintaan Anda telah terkirim',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        $('#formClient')[0].reset();
                                    })
                                } else {
                                    alert('Permintaan gagal dikirim');
                                }
                            },
                            error: function(data, cml, json) {
                                console.log(data.responseText);
                            }
                        });
                    }
                })
            }
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>