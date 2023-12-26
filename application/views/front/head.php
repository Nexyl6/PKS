<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PKS | Partai Keadilan Sejahtera</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/sl-slide.css">

    <script src="<?php echo base_url(); ?>assets/home/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/home/images/img/pks.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo base_url('../PKS'); ?>">
                    <!-- <img src="<?php echo base_url('file/pkslogo4.jpeg'); ?>"  alt="logo pks"> -->
                </a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active" style="font-size: 20px;"><a href="<?php echo base_url('../PKS'); ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url('admin/pks/lihat_sejarah') ?>">SEJARAH</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PKS <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('pks/lihat_visimisi') ?>"><strong>Visi Misi</strong></a></li>
                                <li><a href="<?php echo base_url('admin/struktur/lihat_struktur') ?>"><strong>Struktur Organisasi</strong></a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                        <li class="login">
                            <a href="<?php echo base_url('auth') ?>"><i class="icon-lock"></i></a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
    <section id="slide-show">

        <style>
            #slider1 {
                width: 100%;
                overflow: hidden;
                white-space: nowrap;
            }

            #slider1 {
                display: inline-block;
                width: 100%;
                /* Atur lebar setiap slide */
                box-sizing: border-box;
                text-align: center;
                padding: 20px;
            }
        </style>

        <?php $initialUrl = base_url("file/Beranda/1.jpg") ?>
        <div id="slider1" class="sl-slider-wrapper" style="background-image: url('<?= $initialUrl ?>'); background-position: center;background-attachment: fixed; background-size: 100%; background-color: white;"></div>

        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
        </nav>
        <!--/Slider Next Prev button-->
    </section>

    <!--/Slider-->

    <section class="main-info">
        <div class="container">
            <div class="row-fluid">
                <div class="span9">
                    <h4>KOMENTAR TOKOH</h4>
                    <h5 class="no-margin">"Kita terlatih Berkoban dengan ekonomi dan waktu berharga yang kita miiki. Sekali lagi, tidak mungkin orang mencintai kita, kalau kita tak memiliki akhlak yang baik, dengan kesantunan dan ketawadhuan"</h5>
                </div>

            </div>
        </div>
    </section>

    <!--Services-->
    <!--/Services-->

    <section id="clients" class="main">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="clearfix">
                        <h4 class="pull-left" style="font-size: 20px; color: black;">BERITA PKS</h4>
                        <div class="pull-right">
                            <a class="prev" href="#newCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a>
                            <a class="next" href="#newCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="newCarousel" class="carousel slide clients">
                        <!-- Carousel items -->
                        <style>
                            .desc {
                                margin-top: 15px;
                                /* Sesuaikan nilai ini sesuai kebutuhan Anda */
                            }

                            @media (max-width: 768px) {
                            .thumbnails li {
                            width: 100%; 
                            }

                            .thumbnails li img {
                            width: 60%;
                            }

                            }

                        </style>

                        <div class="carousel-inner">
                            <?php
                            // Sort data by ID in descending order
                            usort($data, function ($a, $b) {
                                return $b->id_berita - $a->id_berita;
                            });

                            $chunked_data = array_chunk($data, 4); // Membagi data menjadi kelompok dengan masing-masing kelompok berisi 4 elemen
                            foreach ($chunked_data as $chunk) {
                            ?>
                                <div class="item <?php echo $chunk === reset($chunked_data) ? 'active' : ''; ?>">
                                    <div class="gap">
                                        <ul class="thumbnails">
                                            <?php foreach ($chunk as $key) {
                                                $judul_berita = str_replace('-', ' ', $key->judul_berita);
                                                $judul_berita_truncated = substr($judul_berita, 0, 100);
                                            ?>
                                                <li class="span3">
                                                    <div class="image-container">
                                                        <a href="<?php echo base_url('berita/detail/' . $key->id_berita . '/' . $key->judul_berita) ?>" target="_blank">
                                                        <img class="img-responsive" src="<?php echo base_url('file/' . $key->foto) ?>" alt="Gambar Berita" style="height: 150px">
                                                        </a>
                                                    </div>
                                                    <div class="desc" style="font-size: 14px; color: black;">
                                                        <h5>
                                                            <a href="<?= base_url('berita/detail/' . $key->id_berita . '/' . $key->judul_berita) ?>" target="_blank" style="color: black;">
                                                                <?= strtoupper($judul_berita_truncated); ?>
                                                            </a>
                                                        </h5>
                                                        <!-- Tampilkan judul berita di bawah gambar -->
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- /Carousel items -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="clients" class="main">
        <div class="container">
            <div class="row-fluid">
                <div class="span2">
                    <div class="clearfix">
                        <h4 class="pull-left" style="font-size: 20px; color: black;">FOTO KEGIATAN</h4>
                        <div class="pull-right">
                            <a class="prev" href="#activityCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> 
                            <a class="next" href="#activityCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                        </div>
                    </div>
                    <p>DEWAN PENGURUS DAERAH</p>
                    <p>
                    <h1>PARTAI KEADILAN SEJAHTERA</h1>
                    </p>
                </div>


                <style>
                    .thumbnails li img {
                    width: 220px;
                    height: 170px;
                    }

                    .thumbnails li {
                    text-align: center; 
                    padding: 10px;
                    }

                    .thumbnails li img {
                    display: inline-block;  
                    }

                </style>

                <div class="span10">
                    <div id="activityCarousel" class="carousel slide clients">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <?php
                                        foreach ($kegiatan as $key) {


                                        ?>
                                            <li class="span3"><a href="./file/<?php echo $key->gambar ?>" target="_blank"><img class="img-responsive" src="./file/<?php echo $key->gambar ?>" target="_blank"></a></li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <?php
                                        foreach ($kegiatan2 as $key) {


                                        ?>
                                            <li class="span3"><a href="./file/<?php echo $key->gambar ?>" target="_blank"><img src="./file/<?php echo $key->gambar ?>" target="_blank"></a></li>
                                        <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel items -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Bottom-->
    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">

            <!--row-fluids-->
            <div class="row-fluid">

                <!--Contact Form-->
                <div class="span10">
                    <ul class="unstyled address"></ul>
                    <h4>ALAMAT</h4>
                    <ul class="unstyled address" style="font-size: 14px;">
                        <li>
                            <i class="icon-home"></i><strong>Alamat:</strong><br>Jl.Parit Baru,Pelaihari
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> humas@pks.id
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Call Center:</strong> 0853-4996-0024
                        </li>
                    </ul>
                </div>
                <!--End Contact Form-->
                <!--Icon link -->
                <h1>
                    <a href="https://www.instagram.com/pkstanahlautofficial/"><i class="fa-brands fa-instagram"></i>

                        <a href="https://fb.com/HumasPartaiKeadilanSejahtera"><i class="fa-brands fa-facebook"></i>

                            <a href="https://youtube.com/PKSTVIndonesia"><i class="fa-brands fa-youtube"></i>

                                <a href="https://tiktok.com/@pksejahtera"><i class="fa-brands fa-tiktok"></i>
                </h1>
                <!--Icon link -->

            </div>

        </div>
        <!--/row-fluid-->
        </div>
        <!--/container-->

    </section>
    <!--/bottom-->

    <script src="<?php echo base_url(); ?>assets/home/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/main.js"></script>
    <!-- Required javascript files for Slider -->
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.ba-cond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.slitslider.js"></script>
    <!-- /Required javascript files for Slider -->

    <!-- SL Slider -->
    <script type="text/javascript">
        var slideIndex = 1;
        var imageUrls = [
            '<?= base_url("/file/Beranda/1.jpg") ?>',
            '<?= base_url("/file/Beranda/2.jpg") ?>',
            '<?= base_url("/file/Beranda/6.jpg") ?>'
        ];

        function showSlide(index) {
            if (index >= 1 && index <= imageUrls.length) {
                var slide = document.getElementById('slider1');
                slide.style.backgroundImage = 'url(' + imageUrls[index - 1] + ')';
            }
        }

        document.querySelector('.nav-arrow-prev').addEventListener('click', function() {
            slideIndex = (slideIndex === 1) ? imageUrls.length : slideIndex - 1;
            showSlide(slideIndex);
        });

        document.querySelector('.nav-arrow-next').addEventListener('click', function() {
            slideIndex = (slideIndex === imageUrls.length) ? 1 : slideIndex + 1;
            showSlide(slideIndex);
        });
    </script>
    <!-- /SL Slider -->

    <!-- /dropdown-toggle -->
    <script src="<?php echo base_url(); ?>https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- /dropdown-toggle -->
</body>

</html>