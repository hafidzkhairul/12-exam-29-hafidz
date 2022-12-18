<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Kategori
      <small>Edit Kategori Baru</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">
      <section class="container-fluid">       
        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Edit Kategori</h6>
                                    
              <a href="kategori.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
            </div>
 
          </div>
          <div class="card-body">
            <form action="kategori_update.php" method="post">
            <?php 
                include 'db_connect.php';
              $id = $_GET['id'];              
              $data = mysqli_query($myConn, "select * from kategori where id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
              
              <div class="form-group">
                <label>Kategori</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" class="form-control" name="kategori" required="required" placeholder="Masukkan kategori .." value="<?php echo $d['kategori'] ?>">
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" required="required" placeholder="Masukkan keterangan .." value="<?php echo $d['keterangan'] ?>">
              </div>
              
              

              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-danger btn-sm" href="kategori_hapus.php?id=<?php echo $d['id'] ?>">Hapus</a>
              </div>
              <?php 
              }
              ?>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>