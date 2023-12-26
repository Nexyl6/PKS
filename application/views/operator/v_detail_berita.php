<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/operator/dashboard') ?>" style="color:#FD5602">Home</a></li>
                        <li class="breadcrumb-item active">Detail Berita</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mt-2">
                            <a href="../../../file/<?php echo $data->foto; ?>" target="_blank">
                                <img src="../../../file/<?php echo $data->foto; ?>" class="img-fluid" alt="Foto Berita">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div>
                            <h3 class="judul"><?php echo str_replace('-', ' ', $data->judul_berita) ?></h3>
                            <h6 class="tanggal"><?php echo date('d F Y', strtotime($data->tanggal_berita)); ?></h6>
                        </div>
                        <div class="mt-3" style="text-align: justify;">
                            <p><?php echo nl2br($data->artikel); ?></p>
                            <a href="<?= base_url('admin/berita/data_berita') ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>


        <!-- /.card -->

    </section>
    <!-- /.content -->
    <style>
        .gambar {
            width: 500px;
            height: auto;
        }
    </style>
</div>
<!-- /.content-wrapper -->