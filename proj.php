<html>
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <style>
      table tr td {border : solid 1px black ;},
      </style>
</head>
<body style ="background-color :#DFC8C8">
    <?php
    $servername = 'localhost';
    $username ='root';
    $password = '12345678';
    $propatcha = 'propatcha';
   
    $conn = mysqli_connect($servername, $username, $password, $propatcha);
   
    $sql = 'select * from member';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query[".$sql. "]");
    ?>
  
    <div class="container text-center">
    <h1> MEMBER </h2> <br> 
<table  border="1" cellspacing="2" cellpadding="2"align="center" >

  <tr>
    <td class="fw-bold" align="center" width="100">MemberID</td>
    <td  class="fw-bold" align="center" width="100">Fname</td>
    <td class="fw-bold" align="center" width="100">Lname</td>
    <td class="fw-bold" align="center" width="120">Tel</td>
    <td class="fw-bold"  align="center" width="100">Address</td>
    <td class="fw-bold" align="center" width="100">Delete</td>
    <td class="fw-bold" align="center" width="100">Update</td>


    
  </tr>
  <?php
  $i = 1;
  while ($objResult = mysqli_fetch_array($objQuery)){
 
  ?>
  <tr>
    <td align="center" ><?php echo $objResult["MemberID"]; ?></td>
    <td ><?php echo $objResult["Fname"]; ?></td>
    <td ><?php echo $objResult["Lname"]; ?></td>
    <td align="center" ><?php echo $objResult["Tel"]; ?></td>
    <td ><?php echo $objResult["Address"]; ?></td>
    <td align="center"><a href="delete.php?MemberID=<?php echo $objResult["MemberID"];?>">Delete</a></td>
    <td align="center"><a href="up1.php?memberID=<?php echo $objResult["MemberID"]; ?>">Update</a></td>
   
  </tr>
<?php
$i++;
}
?>

</table>
<br><br><br>
<div class="container text-center">
<form method="post">
<input class="btn btn-primary" type="button"  value="ผู้จัดทำ" onClick="this.form.action='mem.php'; submit()">
<input class="btn btn-primary" type="button"  value="Packagtour" onClick="this.form.action='pack.php'; submit()">
<input class="btn btn-primary" type="button"  value="Insert" onClick="this.form.action='in1.php'; submit()">
<input class="btn btn-primary" type="button"  value="แสดงการจอง" onClick="this.form.action='book1.php'; submit()">
</form>
</div>
<?php
mysqli_close($conn); //ปิดฐานข้อมูล
echo "<br><br>";
?>
</div>
</div>
</body>
</html>