<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Barang</title>
  
</head>
<body>

  <style type="text/css">
    body{
      font-family: sans-serif;
    }

    .table{
      width: 100%;
    }

    th,td{
    }
    .table,
    .table th,
    .table td {
      padding: 5px;
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>

  <center>
    <h4>LAPORAN BARANG</h4>
  </center>

  <?php include 'db_connect.php'; ?>
  
  <table class="table">
    <thead>
      <tr>
        <th width="1%">NO</th>
        <th>SPESIFIKASI</th>
        <th>STOK</th>
        <th>LOKASI</th>
        <th>KATEGORI_ID</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      include 'db_connect.php';
      $no=1;
      $data = mysqli_query($myConn,"SELECT * FROM barang");
      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['spesifikasi']; ?></td>
        <td><?php echo $d['stok']; ?></td>
        <td><?php echo $d['lokasi']; ?></td>
        <td><?php echo $d['kategori_id']; ?></td>
      </tr>

      <?php 
    }
    ?>
  </tbody>
</table>

<?php 
require_once("dompdf1/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$dompdf->stream("Laporan_barang.pdf");    
?>

</body>
</html>
