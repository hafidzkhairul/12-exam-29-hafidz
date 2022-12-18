<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Barang
      <small>Edit Barang Baru</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">
      <section class="container-fluid">       
        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Edit Barang</h6>
                                    
              <a href="barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
            </div>
 
          </div>
          <div class="card-body">
            <form action="barang_update.php" method="post">
            <?php 
                include 'db_connect.php';
              $id = $_GET['id'];              
              $data = mysqli_query($myConn, "select * from barang where id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
              
              <div class="form-group">
                <label>Spesifikasi</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" class="form-control" name="spesifikasi" required="required" placeholder="Masukkan spesifikasi .." value="<?php echo $d['spesifikasi'] ?>">
              </div>

              <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" required="required" placeholder="Masukkan jumlah .." value="<?php echo $d['stok'] ?>">
              </div>
              
              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" required="required" placeholder="Masukkan lokasi .." value="<?php echo $d['lokasi'] ?>">
              </div>

              <div class="form-group">
                      <label>Kategori_id</label>
                      <select class="form-control" name="kategori_id" required="required" value="<?php echo $d['kategori_id'] ?>">
                        <option value="<?php echo $d['kategori_id'] ?>"> <?php echo $d['kategori_id'] ?></option>
                        <?php 
                        include 'db_connect.php';
                        
                        $kategori = mysqli_query($myConn,"SELECT * from kategori");
                        while($k=mysqli_fetch_array($kategori)){
                          ?>
                          <option value="<?php echo $k['id']; ?>"><?php echo $k['id']; echo ". "; echo $k['kategori'];?></option>
                          <?php 
                        }
                        ?>
                      </select>
                    </div>

              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-danger btn-sm" href="barang_hapus.php?id=<?php echo $d['id'] ?>">Hapus</a>
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