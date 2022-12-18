<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Hapus Barang
      <small>Data Barang</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">

      <section class="container-fluid"> 
          
        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Yakin Ingin Menghapus Barang ?</h6>
                                    
              <a href="barang.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
            </div>
 
          </div>
        
          <div class="card-body">
            <p>Dengan menghapus, semua data barang keluar dan barang masuk yang berhubungan dengan barang ini akan ikut dihapus.</p>
            <br/>
            
            <?php 
            $idd = $_GET['id'];
            ?>
            <a href="barang_hapus.php?id=<?php echo $idd; ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-check"></i> &nbsp Hapus</a> 
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>