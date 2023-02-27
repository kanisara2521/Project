
<html>

<head></head>

<body>
  <?php
   require('connect.php');

  $sql = '
    SELECT * 
    FROM member;
    ';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
      <th width="100">
        <div align="center">memberID</div>
      </th>
      <th width="100">
        <div align="center">Fname</div>
      </th>
      <th width="100">
        <div align="center">Lname</div>
      </th>
      <th width="100">
        <div align="center">Tel</div>
      </th>
      <th width="100">
        <div align="center">Address</div>
      </th>
      <th width="100">
        <div align="center">Delete</div>
      </th>
      <th width="100">
        <div align="center">Update</div>
      </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["memberID"]; ?></td>
        <td><?php echo $objResult["Fname"]; ?></td>
        <td><?php echo $objResult["Lname"]; ?></td>
        <td><?php echo $objResult["Tel"]; ?></td>
        <td><?php echo $objResult["Address"]; ?></td>
        <td align="center"><a href="delete.php?memberID=<?php echo $objResult["membereID"]; ?>">Delete</a></td>
        <td align="center"><a href="up1.php?memberID=<?php echo $objResult["memberID"]; ?>">Update</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>