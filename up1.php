<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<html>
    <haed>
    <meta charset="UTF-8">
    <title>Updeteข้อมูสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
</haed>

<body <body style ="background-color :#C4B3C3">
<div class="container text-center">
    <?php
    $update_ID    = $_REQUEST['memberID'];
    $memberID   = $update_ID;
    ?>
    <h2>Update Data : member</h2><br>
    <form action="up3.php?MemberID=<?php echo $memberID; ?>" method="post" name="member">
        <table border="1" align="center">
            <tr>
                <td>MemberID : </td>
                <td><input type="text" name="memberID" value="<?php echo $memberID; ?>" disabled></td>
            </tr>
            <tr>
                <td>Fname : </td>
                <td> <input type="text" name="Fname"></td>
                
            </tr>
            <tr>
                <td>Lname : </td>
                <td><input type="text" name="Lname"></td>
            </tr>
            <tr>
                <td>Tel : </td>
                <td><input type="text" name="Tel"></td>
                <td>
                </td>
            </tr>
            <tr>
            <td>Address : </td>
                <?php
                // address Query from Table
                require('connect.php');
                $sql = '
    SELECT Address 
    FROM member;
    ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td><select name="Address">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["Address"]; ?>><?php echo $objResult["Address"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                    </tr>
        </table>

        <br>
        <input class="btn btn-dark" type="submit" value="Update Data">
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";   
    ?>
</body>

</html>