<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE tasks SET title = ? WHERE id = ?");
    $stmt->bind_param("si", $title, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
