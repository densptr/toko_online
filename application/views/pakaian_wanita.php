<div class="container-fluid">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($pakaian_wanita as $brg) : ?>

            <div class="card ml-4" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small>
                    <span class="badge badge-pill badge-success">RP. <?php echo number_format($brg->harga, 0, ',', '.') ?></span>

                    <?php echo anchor('dashbord/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tamabah Ke Keranajang</div>') ?>
                    <?php echo anchor('dashbord/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>