<?php include 'header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="barangmasuk_pdf.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>CETAK PDF</a>
                                <h6 class="h3 mb-0 font-weight-bold text-primary">Barang Masuk</h6>
                                    
              <a href="barangmasuk_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i>Tambah Barang Masuk</a>              
            
        </div>
            
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tgl Masuk</th>
                        <th>Jumlah</th>
                        <th>Barang_id</th>
                        <th width="10%">OPSI</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                  include 'db_connect.php';
                  $no=1;
                  $data = mysqli_query($myConn,"SELECT * FROM barangmasuk");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      
                      <td><?php echo $d['tgl_masuk']; ?></td>
                      <td><?php echo $d['jumlah']; ?></td>
                      <td><?php echo $d['barang_id']; ?></td>

                      <td>                        
                        <a class="btn btn-warning btn-sm" href="barangmasuk_edit.php?id=<?php echo $d['id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="barangmasuk_hapus_konf.php?id=<?php echo $d['id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'footer.php'; ?>