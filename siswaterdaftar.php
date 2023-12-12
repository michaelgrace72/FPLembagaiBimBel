<?php
include 'includes/dbhinc.php';

try {
    $stmt = $pdo->query("SELECT * FROM users"); // Change $conn to $pdo
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>User Type</th></tr>";
        foreach ($users as $user) {
            if($user['usertype'] == 'guru'){
                continue;
            }
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['username']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['usertype']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
