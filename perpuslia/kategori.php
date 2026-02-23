 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                   <div class="row mb-3">
                    <div class="col-md-12"></div>
                    <a href="?page=kategori_tambah" class=" class ="btn btn-primary">Tambah Kategori</a>
                   </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                         <tr>
                                            <th>No.</th>
                                            <th>Nama kategori</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama kategori</th>
                                           <th>
                                            <?php if (isset($_SESSION['user']['level']) && $_SESSION['user']['level'] == 'admin'): ?>
                                            <th>Aksi</th>
                                            <?php endif; ?> 
                                           </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                     <?php
                                      $i = 1;
                                     $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                     while ($data = mysqli_fetch_array($query)) :  
                                    ?>
                                     <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $data['kategori']; ?></td>
                                     <td>
                                        
                                       
                                    
                                 <a href="hapus-kategori_ubah&&?id=<?= $data['id_kategori']; ?>" class="btn btn-danger">ubah</a>
                                     
                                 <a href="ubah-kategori_hapus&&?id=<?= $data['id_kategori']; ?>" 
                                     onclick="return confirm('apakah anda yakin mengapus data ini?')"
                                        class="btn btn-danger">hapus</a>
                                     </tr>
                                    <?php endwhile; ?>

                                    </tbody>

                                    </tbody>
                                </table>    