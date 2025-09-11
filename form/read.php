<?php
require "conn.php";

$sql="select * from accounts";
$result=mysqli_query($conn,$sql);



echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Rewrite</th>
      </tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td><a href='update.php?id=" . $row["id"] ."'>Edit</a></td>";
    echo "</tr>";
}
echo "</table>";

