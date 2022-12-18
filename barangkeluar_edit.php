<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Barang Keluar
      <small>Edit Barang Keluar Baru</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">
      <section class="container-fluid">       
        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Edit Barang Keluar</h6>
                                    
              <a href="barangkeluar.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
            </div>
 
          </div>
          <div class="card-body">
            <form action="barangkeluar_update.php" method="post">
            <?php 
                include 'db_connect.php';
              $id = $_GET['id'];              
              $data = mysqli_query($myConn, "select * from barangkeluar where id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
              
              <div class="form-group">
                <label>Tanggal Keluar</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="date" class="form-control" name="tgl_keluar" required="required" placeholder="Masukkan tanggal .." value="<?php echo $d['tgl_keluar'] ?>">
              </div>

              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required="required" placeholder="Masukkan jumlah .." value="<?php echo $d['jumlah'] ?>">
              </div>
              
              <div class="form-group">
                      <label>Barang_id</label>
                      <select class="form-control" name="barang_id" required="required">
                        <option value=""><?php echo $d['barang_id'] ?></option>
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
                <a class="btn btn-danger btn-sm" href="barangkeluar_hapus.php?id=<?php echo $d['id'] ?>">Hapus</a>
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