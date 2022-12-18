  <?php include 'header.php'; ?>

  <div class="content-wrapper">

    <section class="content-header">
      <h1 class="h3 mb-0 text-gray-800">
        Barang
        <small>Tambah Barang Baru</small>
      </h1>
      
    </section>

    <section class="content">
      <div class="row">
        <section class="container-fluid">       
          <div class="card shadow mb-4">

            <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
                <h6 class="h3 mb-0 font-weight-bold text-primary">Tambah Barang Baru</h6>
                                      
                <a href="barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
              
          </div>
  
            </div>
            <div class="card-body">
              <form action="barang_act.php" method="post">
                
                <div class="form-group">
                  <label>Spesifikasi</label>
                  <input type="text" class="form-control" name="spesifikasi" required="required" placeholder="Masukkan spesifikasi ..">
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" class="form-control" name="stok" required="required" placeholder="Masukkan jumlah ..">
                </div>
                
                <div class="form-group">
                  <label>Lokasi</label>
                  <input type="text" class="form-control" name="lokasi" required="required" placeholder="Masukkan lokasi ..">
                </div>

              

                <div class="form-group">
                      <label>Kategori_id</label>
                      <select class="form-control" name="kategori_id" required="required">
                        <option value=""> - Pilih kategori - </option>
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
                </div>
              </form>
            </div>

          </div>
        </section>
      </div>
    </section>

  </div>
  <?php include 'footer.php'; ?>