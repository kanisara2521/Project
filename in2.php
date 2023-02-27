<html>
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
$servername = 'localhost';
$username = 'root';
$password = '12345678';
$propatcha = 'propatcha';
$conn = mysqli_connect($servername, $username, $password, $propatcha);

$sql = 'select * from member';

$MemberID  = $_REQUEST['MemberID'];
$Fname         = $_REQUEST['Fname'];
$Lname        = $_REQUEST['Lname'];
$Tel        = $_REQUEST['Tel'];
$Address          = $_REQUEST['Address'];

$sql = "
    INSERT INTO member
    VALUES ('$MemberID','$Fname','$Lname','$Tel','$Address');
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