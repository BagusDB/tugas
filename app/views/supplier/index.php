                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Supplier</h1>

                    <div class="row">
                        <div class="col-sm-12">
                        <?php
                            Flasher::Message();
                        ?>
                        </div>
                    </div>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?= base_url; ?>/supplier/create">
                                <button class="m-0 font-weight-bold btn btn-primary">Tambah Supplier</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Kontak Supplier</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Kontak Supplier</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data['supplier'] as $row) :?>
                                        <tr>
                                            <td><?= $row['id_supplier'];?></td>
                                            <td><?= $row['nama_supplier'];?></td>
                                            <td><?= $row['alamat_supplier'];?></td>
                                            <td><?= $row['kontak_supplier'];?></td>
                                            <td>
                                                <a href="<?= base_url;?>/supplier/edit/<?= $row['id_supplier']?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-pen"></i></a> 
                                                <a href="<?= base_url;?>/supplier/hapus/<?= $row['id_supplier']?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');"><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           