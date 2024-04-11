<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Замовлення</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати замовлення</h1>
        <div class="form-container">
                <form action="add_order.php" method="post">            
                        <label for="date">Дата:</label>
                        <input type="date" name="date" id="date" required>
            
                        <label for="price">Ціна:</label>
                        <input type="number" name="price" id="price" pattern="\d*" required>
            
                        <label for="userId">ID користувача:</label>
                        <input type="text" name="userId" id="userId" pattern="\d*" required>
            
                        <label for="admin_phone_number">Номер телефону адміністратора:</label>
                        <input type="text" name="admin_phone_number" id="admin_phone_number" pattern="\d*" required>
            
                        <label for="spareId">ID деталі:</label>
                        <input type="text" name="spareId" id="spareId" pattern="\d*" required>
            
                        <button type="submit">Додати замовлення</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати замовлення</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
            
        }

        
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        h1 {
            margin: 30px;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for the outline effect */
            
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            
        }

        
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            
        }

        
    </style>
    
</head>

<body>
        <h1>Редагувати замовлення</h1>
        <div class="form-container">
                <form action="edit_order.php" method="post">
                        <label for="order_id">ID замовлення для редагування:</label>
                        <input type="text" name="id" id="order_id" required>
            
                        <label for="date">Дата:</label>
                        <input type="date" name="date" id="date" required>
            
                        <label for="price">Ціна:</label>
                        <input type="number" name="price" id="price" pattern="\d*" required>
            
                        <label for="userId">ID користувача:</label>
                        <input type="text" name="userId" id="userId" pattern="\d*" required>
            
                        <label for="admin_phone_number">Номер телефону адміністратора:</label>
                        <input type="text" name="admin_phone_number" id="admin_phone_number" pattern="\d*" required>
            
                        <label for="spareId">ID деталі:</label>
                        <input type="text" name="spareId" id="spareId" pattern="\d*" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення замовлення</title>
    
</head>

<body>
        <h1>Видалення замовлення</h1>
        <div class="form-container">
                <form action="delete_order_process.php" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити це замовлення?');">
                        <label for="order_id">ID моделі замовлення для видалення:</label>
                        <input type="text" name="id" id="order_id" required>
                        <button type="submit">Видалити замовлення</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Список замовленя</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
            
        }

        
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            
        }

        
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            background-color: #fff;
            
        }

        
        th {
            background-color: #f2f2f2;
            
        }

        
        .order.expanded {
            background-color: #f0f0f0;
            
        }

        
        .hidden {
            display: none;
            
        }

        
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            
        }

        
    </style>
    
    
    <script>
                function toggleDetails(orderId) {
                        var orderDetails = document.getElementById('order_' + orderId);
                        orderDetails.classList.toggle('expanded');
            
        }
        
                function toggleOrdersVisibility() {
                        var orders = document.getElementsByClassName('order');
                        for (var i = 0; i < orders.length; i++) {
                                orders[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати всі замовлення') ? 'Сховати замовлення' : 'Показати всі замовлення';
            
        }
        </script>
    
</head>

<body>
        <h1>Список замовлень</h1>
    
            <button id="toggleButton" onclick="toggleOrdersVisibility()">Показати всі замовлення</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID замовлення</th>
                
                <th>Дата</th>
                
                <th>Ціна</th>
                
                <th>ID користувача</th>
                
                <th>Номер телефону адміністратора</th>
                
                <th>ID деталі</th>
                
            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM orders");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='order hidden' id='order_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['OrderID'] . "</td>" ;
                echo "<td>" . $row['Date'] . "</td>" ;
                echo "<td>" . $row['Price'] . "</td>" ;
                echo "<td>" . $row['UserID'] . "</td>" ;
                echo "<td>" . $row['Admin_phone_number'] . "</td>" ;
                echo "<td>" . $row['SpareID'] . "</td>" ;
                }
                } else {
                echo "Помилка: " . mysqli_error($link);
                }
                ?>
                
        </tbody>
        
    </table>
        </div>
    
</body>

</html>
