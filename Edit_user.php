<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $login = $_POST["login"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    $query = "UPDATE users SET login='$login', phone='$phone', email='$email', address='$address', password='$password' WHERE id=$id";

    if (mysqli_query($link, $query)) {
        echo "Дані про користувача оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про автомобіль: " . mysqli_error($link);
    }
}
?>
