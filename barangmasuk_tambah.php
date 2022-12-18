<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Barang Masuk
      <small>Tambah Barang Masuk Baru</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">
      <section class="container-fluid">       
        <div class="card shadow mb-4">

          <div class="card-header py-3">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Tambah Barang Masuk Baru</h6>
                                    
              <a href="barangmasuk.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
        </div>
 
          </div>
          <div class="card-body">
            <form action="barangmasuk_act.php" method="post">
              
              <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" name="tgl_masuk" required="required" placeholder="Masukkan tanggal ..">
              </div>

              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required="required" placeholder="Masukkan jumlah ..">
              </div>
              
              <div class="form-group">
                      <label>Barang_id</label>
                      <select class="form-control" name="barang_id" required="required">
                        <option value=""> - Pilih Barang - </option>
                        <?php 
                        include 'db_connect.php';
                        
                        $barang = mysqli_query($myConn,"SELECT * from barang");
                        while($b=mysqli_fetch_array($barang)){
                          ?>
                          <option value="<?php echo $b['id']; ?>"><?php echo $b['id']; echo ". "; echo $b['spesifikasi'];?></option>
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