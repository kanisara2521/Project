<html>
<haed>
    <meta charset="UTF-8">
    <title>Deleteการจอง</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>

</haed>
<body style ="background-color : #EEB189">
<div class="container text-center">
<?php
$delete_ID = $_REQUEST['BookID'];
require('connect.php');
$sql = '
    DELETE FROM book
    WHERE BookID = '.$delete_ID. ';
    ';

$objQuery = mysqli_query($conn, $sql) ;
if ($objQuery){
    echo "Record".$delete_ID."was Deleted.";
}else{
    echo "Error : Delete";
}
mysqli_close($conn); //ปิดฐานข้อมูล
echo "<br>";
?>
<br><br>
<form action ="book1.php" method = "Post">
<input class="btn btn-dark" type="submit" value="กลับ">

</body>
</html>