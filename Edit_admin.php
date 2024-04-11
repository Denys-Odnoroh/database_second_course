<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $query = "UPDATE admin SET Name='$name', Phone='$phone', Password='$password' WHERE AdminId=$id";

    if (mysqli_query($link, $query)) {
        echo "Дані про адміністратора оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про адміністратора: " . mysqli_error($link);
    }
}
?>
