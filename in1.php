<html>

<head>
<meta charset="UTF-8">
    <title>Insertข้อมูสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>

</head>

<body style ="background-color : #73C088">
<div class="container text-center">
    <h2>Insert Data : member</h2> <br>
    <form action="in2.php" method="post" name="member">
   
        <table border="1" align="center">
            <tr>
                <td>MemberID : </td>
                <td><input type="text" name="MemberID"></td>
            </tr>
            <tr>
                <td>Fname : </td>
                <td>
                    <input type="text" name="Fname"><br>
                </td>
            </tr>
            <tr>
                <td>Lname : </td>
                <td><input type="text" name="Lname"></td>
            </tr>
            <tr>
                <td>Tel : </td>
                <td><input type="text" name="Tel"></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><input type="text" name="Address"></td>
            </tr>
                    </select>
                </td>
            </tr>
        </table>

        <br>
        <input  class="btn btn-dark" type="submit" value="Insert Data">
    </form>

    </div>
</body>
</html>
