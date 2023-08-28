    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Suppplier</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Supplier/update" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Suppplier</label>
                        <input type="text" class="form-control" name="id_supplier" value="<?= $data['supplier']['id_supplier']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Suppplier</label>
                        <input type="text" class="form-control" name="nama_supplier" value="<?= $data['supplier']['nama_supplier']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Suppplier</label>
                        <input type="text" class="form-control" name="alamat_supplier" value="<?= $data['supplier']['alamat_supplier']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kontak Supplier</label>
                        <input type="text" class="form-control" name="kontak_supplier" value="<?= $data['supplier']['kontak_supplier']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>

    </div>