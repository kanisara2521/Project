<html>
<head>
    <meta charset="UTF-8">
    <title>Packagetour</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <style>
      table tr td {border : solid 1px black ;},
      </style>
</head>
<body style ="background-color :#FF9292">
    <?php
    $servername = 'localhost';
    $username ='root';
    $password = '12345678';
    $propatcha = 'propatcha';
   
    $conn = mysqli_connect($servername, $username, $password, $propatcha);
   
    $sql = 'select * from packagetour';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query[".$sql. "]");
    ?>
  
    <div class="container text-center">
    <h1> Packagetour </h2> <br> 
<table  border="1" cellspacing="2" cellpadding="2"align="center" >

  <tr>
    <td class="fw-bold" align="center" width="100">PackID</td>
    <td  class="fw-bold" align="center" width="250">Pack_name</td>
    <td class="fw-bold" align="center" width="650">Pack_details</td>
    <td class="fw-bold" align="center" width="120">Pack_price</td>
    <td class="fw-bold" align="center" width="120">BOOK</td>
   

    
  </tr>
  <?php
  $i = 1;
  while ($objResult = mysqli_fetch_array($objQuery)){
 
  ?>
  <tr>
    <td align="center" ><?php echo $objResult["PackID"]; ?></td>
    <td align="center" ><?php echo $objResult["Pack_name"]; ?></td>
    <td ><?php echo $objResult["Pack_details"]; ?></td>
    <td align="center" ><?php echo $objResult["Pack_price"]; ?></td>
    <td align="center"><a href="book2.php?PackID=<?php echo $objResult["PackrID"]; ?>">BOOK</a></td>


  </tr>
<?php
$i++;
}
?>

</table>
<br><br><br>
<div class="container text-center">
<form action ="proj.php" method = "Post">
<input class="btn btn-primary" type="submit" value="กลับ">

<?php
mysqli_close($conn); //ปิดฐานข้อมูล
echo "<br><br>";
?>
</div>
</div>
</body>
</html>