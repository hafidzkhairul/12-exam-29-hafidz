<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1 class="h3 mb-0 text-gray-800">
      Kategori
      <small>Tambah Kategori Baru</small>
    </h1>
    
  </section>

  <section class="content">
    <div class="row">
      <section class="container-fluid">       
        <div class="card shadow mb-4">

          <div class="card-header py-3">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
              <h6 class="h3 mb-0 font-weight-bold text-primary">Tambah Kategori Baru</h6>
                                    
              <a href="kategori.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-reply"></i> &nbsp Kembali</a>               
            
        </div>
 
          </div>
          <div class="card-body">
            <form action="kategori_act.php" method="post">
              
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" required="required" placeholder="Masukkan kategori ..">
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" required="required" placeholder="Masukkan keterangan ..">
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