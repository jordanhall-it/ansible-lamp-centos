<?php
include 'db_config.php';

$result = $conn->query("SELECT id, name, email FROM users");

echo "<h1>Contact The Straw Hat Crew!</h1>";
echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

