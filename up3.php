<html>
<haed>
    <meta charset="UTF-8">
    <title>Updateข้อมูสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>

</haed>
<body style ="background-color : #AAD4E0">
<div class="container text-center">
<?php
require('connect.php');


$update_ID    = $_REQUEST['MemberID'];
$MemberID  = $update_ID;
$Fname = $_REQUEST['Fname'];
$Lname          = $_REQUEST['Lname'];
$Tel        = $_REQUEST['Tel'];
$Address     = $_REQUEST['Address'];


$sql = "
    UPDATE member
    SET Fname = '" . $Fname . "',
    Lname = '" . $Lname . "',
    Tel = '" . $Tel . "',
    Address = '" . $Address . "' 
    WHERE MemberID = " . $MemberID . " ; ";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $update_ID . " was Updated.";
} else {
    echo "Error : Update";
}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
?>
<br><br>
<form action ="proj.php" method = "Post">
<input class="btn btn-dark" type="submit" value="กลับ">
</body>
</html>