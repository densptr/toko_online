<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h5>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                } ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url() . 'dashbord/proses_pesanan'; ?>" method="post">

                <div class="form-grup">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-grup">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>J&T</option>
                        <option>TIKI</option>
                        <option>POST Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label>BANK</label>
                    <select class="form-control">
                        <option>BCA - 12210908</option>
                        <option>BTN - 12210854</option>
                        <option>BNI - 12211041</option>
                        <option>BRI - 12210900</option>
                        <option>MANDIRI - 12211033</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Pesan</button>

                </from>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>