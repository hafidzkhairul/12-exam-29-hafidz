<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Hapus Kategori
      <small>Data Kategori</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">

      <section class="container-fluid"> 
          
        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Yakin Ingin Menghapus Kategori ?</h6>
                                    
              <a href="kategori.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
            </div>
 
          </div>
        
          <div class="card-body">
            <p>Dengan menghapus, semua data termasuk data barang, barang masuk, dan barang keluar akan dihapus dari database.</p>
            <br/>
            
            <?php 
            $idd = $_GET['id'];
            ?>
            <a href="kategori_hapus.php?id=<?php echo $idd; ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-check"></i> &nbsp Hapus</a> 
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>