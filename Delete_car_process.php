<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST['id'];

    $deleteQuery = "DELETE FROM car_model WHERE ModelID = ?";
    $stmt = mysqli_prepare($link, $deleteQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $car_id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Автомобіль успішно видалено.";
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
