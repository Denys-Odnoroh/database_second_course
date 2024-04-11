<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $OrderID = $_POST["id"];
    $Date = $_POST["date"];
    $Price = $_POST["price"];
    $UserID = $_POST["userId"];
    $Admin_phone_number = $_POST["admin_phone_number"];
    $SpareID = $_POST["spareId"];

    $query = "UPDATE orders SET OrderID='$OrderID', Date='$Date', Price='$Price', UserID='$UserID', Admin_phone_number='$Admin_phone_number', SpareID='$SpareID'";

    if (mysqli_query($link, $query)) {
        echo "Дані про замовлення оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про замовлення: " . mysqli_error($link);
    }
}
?>
