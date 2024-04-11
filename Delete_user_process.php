<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['id'];

    $deleteQuery = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($link, $deleteQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $userId);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Користувача успішно видалено.";
        } else {
            echo "Помилка: " . mysqli_error($link);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Помилка при підготовці запиту: " . mysqli_error($link);
    }
} else {
    echo "Невірний метод запиту.";
}
?>
