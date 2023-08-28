                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>

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
                            <a href="<?= base_url; ?>/user/create">
                                <button class="m-0 font-weight-bold btn btn-primary">Tambah User</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>level</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>level</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data['user'] as $row) :?>
                                        <tr>
                                            <td><?= $row['id_user'];?></td>
                                            <td><?= $row['username'];?></td>
                                            <td><?= $row['level'];?></td>
                                            <td>
                                                <a href="<?= base_url;?>/user/edit/<?= $row['id_user']?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-pen"></i></a> 
                                                <a href="<?= base_url;?>/user/hapus/<?= $row['id_user']?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');"><i class="fas fa-fw fa-trash"></i></a>
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

           