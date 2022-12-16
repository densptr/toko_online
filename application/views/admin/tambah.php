<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Silahkan tambah Barang
            </div>

            <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/from-data">
                <div class="form-group">
                    <label for="name" class="card-header">Id Barang</label>
                    <input type="text" name="id_brg" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Name Barang</label>
                    <input type="text" name="nama_brg" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Stok</label>
                    <input type="text" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" class="card-header">Gambar Produk</label><br>
                    <input type="text" name="gambar" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">Tambahkan</i></button>
                <button type="reset" class="btn btn-danger btn-sm"><i>Reset</i></button>
            </form>

        </div>
    </div>
</div>