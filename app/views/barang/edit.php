    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Barang</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Barang/update" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Barang</label>
                        <input type="text" class="form-control" name="id_barang" value="<?= $data['barang']['id_barang']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?= $data['barang']['nama_barang']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" name="harga_barang" value="<?= $data['barang']['harga_barang']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <input type="text" class="form-control" name="id_supplier" value="<?= $data['barang']['id_supplier']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" value="<?= $data['barang']['stok']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>

    </div>