    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Supplier</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Supplier/simpan" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Supplier</label>
                        <input type="text" class="form-control" name="id_supplier">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Supplier</label>
                        <input type="text" class="form-control" name="nama_supplier">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Supplier</label>
                        <input type="text" class="form-control" name="alamat_supplier">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kontak Supplier</label>
                        <input type="text" class="form-control" name="kontak_supplier">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>

    </div>