<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kategori</title>
  
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
    <h4>LAPORAN KATEGORI</h4>
  </center>

  <?php include 'db_connect.php'; ?>
  
  <table class="table">
    <thead>
      <tr>
        <th width="1%">NO</th>
        <th>KATEGORI</th>
        <th>KETERANGAN</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      include 'db_connect.php';
      $no=1;
      $data = mysqli_query($myConn,"SELECT * FROM kategori");
      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td><?php echo $d['keterangan']; ?></td>
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
$dompdf->stream("Laporan_kategori.pdf");    
?>

</body>
</html>
