<?php include 'header.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <?php 
                                        include 'db_connect.php';
                                        $kategori = mysqli_query($myConn,"SELECT * FROM kategori");
                                        ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="kategori.php" >Kategori</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($kategori); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-table fa-2x text-gray-300"></i>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <?php 
                                        include 'db_connect.php';
                                        $barang = mysqli_query($myConn,"SELECT * FROM barang");
                                        ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="barang.php" >Barang</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($barang); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-table fa-2x text-gray-300"></i>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <?php 
                                        include 'db_connect.php';
                                        $barangmasuk = mysqli_query($myConn,"SELECT * FROM barangmasuk");
                                        ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="barang.php" >Barang Masuk</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($barangmasuk); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-table fa-2x text-gray-300"></i>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <?php 
                                        include 'db_connect.php';
                                        $barangkeluar = mysqli_query($myConn,"SELECT * FROM barangkeluar");
                                        ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="barang.php" >Barang Keluar</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($barangkeluar); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-table fa-2x text-gray-300"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <!-- End of Main Content -->

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php include 'footer.php'; ?>