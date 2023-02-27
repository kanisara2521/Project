<html>
<haed>
    <meta charset="UTF-8">
    <title>Insertข้อมูสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>

</haed>

<body style ="background-color : #AAD4E0">
<div class="container text-center">
<?php
 require('connect.php');

$sql = 'select * from book';

$BookID  = $_REQUEST['BookID'];
$MemberID         = $_REQUEST['MemberID'];
$PackID        = $_REQUEST['PackID'];
$Book_date       = $_REQUEST['Book_date'];

$sql = "
    INSERT INTO book
    VALUES ('$BookID','$MemberID','$PackID','$Book_date');
    ";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "New record Inserted successfully";
} else {
    echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";

?>
<br><br>
<form action ="proj.php" method = "Post">
<input class="btn btn-dark" type="submit" value="กลับ">
</body>
</html>