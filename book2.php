<html>

<head>
<meta charset="UTF-8">
    <title>Insertbook</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>

</head>

<body style ="background-color : #73C088">
<div class="container text-center">
    <h2>Insert Data : book</h2> <br>
    <form action="book3.php"method="post" name="book">
   
        <table border="1" align="center">
            <tr>
                <td>BookID : </td>
                <td><input type="text" name="BookID" ></td>
            </tr>
            <tr>
            <td>MemberID : </td>
                <?php
                // address Query from Table
                require('connect.php');
                $sql = '
    SELECT MemberID 
    FROM member;
    ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td><select name="MemberID">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["MemberID"]; ?>><?php echo $objResult["MemberID"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                    </tr>
                    <tr>
            <td>PackID : </td>
                <?php
                // address Query from Table
                require('connect.php');
                $sql = '
    SELECT PackID 
    FROM packagetour;
    ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td><select name="PackID">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["PackID"]; ?>><?php echo $objResult["PackID"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                    </tr>
            <tr>
                <td>Book_date : </td>
                <td><input type="date" name="Book_date"></td>
            </tr>
          
        </table>

        <br>
        <input  class="btn btn-dark" type="submit" value="Insert Data">
    </form>

    </div>
</body>
</html>
