<?php
require "connst.php";

$sql="select * from accounts";
$result=mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
            <th>Username</th>
            <th>Password</th>
          </tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "</tr>";
}
echo "</table>";
