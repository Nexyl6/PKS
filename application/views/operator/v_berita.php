<style>
    .btn-danger {
        background-color: #FD5602;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #FE6E00;
    }

    .pagination .page-link {
        color: #FD5602;
        border-color: #FD5602;
    }

    .pagination .page-item.active .page-link {
        background-color: #FD5602;
        border-color: #FD5602;
    }
</style>
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
                        <li class="breadcrumb-item active">Data Berita</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div id="flash-message">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <a href="<?= base_url('admin/berita/form_tambah_berita') ?>" class="btn btn-danger"><i class="fas fa-plus"></i> Tambah Berita</a>
                            </div>
                            <!-- <form action="#" method="get" class="form-inline float-right">
                                 <div class="input-group input-group-sm">
                                     <input class="form-control form-control-navbar" type="search" name="cari_berita" placeholder="Search" aria-label="Search">
                                     <div class="input-group-append">
                                         <button class="btn btn-navbar" type="submit">
                                             <i class="fas fa-search"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form> -->
                        </div>
                        <!-- Default box -->
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <?php
                                    $no = 1;
                                    $per_page = 6; // Jumlah berita per halaman
                                    $start = $this->input->get('page') ? $per_page * ($this->input->get('page') - 1) : 0;

                                    foreach (array_slice($data, $start, $per_page) as $key) {
                                    ?>
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                            <div class="card bg-light d-flex flex-column flex-fill">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-12 text-center mt-3">
                                                            <a href="../../file/<?php echo $key->foto; ?>" target="_blank">
                                                                <img src="../../file/<?php echo $key->foto; ?>" class="img-fluid" alt="Foto Berita" style="height:150px">
                                                            </a>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <h1 class="lead text-center"><b><?php echo str_replace('-', ' ', $key->judul_berita); ?></b></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-center">
                                                        <a href="<?= base_url('admin/berita/detail_berita/' . $key->id_berita) ?>" class="btn btn-secondary mr-2"><i class="fas fa-eye" title="Lihat Detail"></i></a>
                                                        <a href="<?= base_url('admin/berita/form_edit_berita/' . $key->id_berita) ?>" class="btn btn-danger mr-2"><i class="fas fa-edit" title="Edit Berita"></i></a>
                                                        <a href="<?= base_url('admin/berita/hapus_berita/' . $key->id_berita) ?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash" title="Hapus Berita"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination justify-content-center m-0">
                            <?php
                            $total_pages = ceil(count($data) / $per_page);
                            $current_page = $this->input->get('page') ? $this->input->get('page') : 1;

                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "<li class='page-item " . ($current_page == $i ? 'active' : '') . "'><a class='page-link' href='" . base_url('admin/berita/data_berita') . "?page=" . $i . "'>$i</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script>
    setTimeout(function() {
        document.getElementById('flash-message').style.display = 'none';
    }, 3000);
</script>