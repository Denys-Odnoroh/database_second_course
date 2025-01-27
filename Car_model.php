<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Автомобілі</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати автомобіль</h1>
        <div class="form-container">
                <form action="add_car.php" method="post">
                        <label for="model">Модель (назва):</label>
                        <input type="text" name="model" id="model" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="year">Рік випуску:</label>
                        <input type="number" name="year" id="year" maxlength="4" minlength="4" required>
            
                        <label for="brand">Марка авто:</label>
                        <input type="text" name="brand" id="brand" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="country">Країна виробник:</label>
                        <input type="text" name="country" id="country" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>

                        <button type="submit">Додати автомобіль</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати автомобіль</title>
    
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
        <h1>Редагувати автомобіль</h1>
        <div class="form-container">
                <form action="edit_car.php" method="post">
                        <label for="car_id">ID моделі автомобіля для редагування:</label>
                        <input type="text" name="id" id="car_id" required>
            
                        <label for="model">Модель (назва):</label>
                        <input type="text" name="model" id="model" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="year">Рік випуску:</label>
                        <input type="number" name="year" id="year" maxlength="4"  minlength="4" required>
            
                        <label for="brand">Марка авто:</label>
                        <input type="text" name="brand" id="brand" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="country">Країна виробник:</label>
                        <input type="text" name="country" id="country" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення автомобіля</title>
    
</head>

<body>
        <h1>Видалення автомобіля</h1>
        <div class="form-container">
                <form action="delete_car_process.php" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити цей автомобіль?');">
                        <label for="car_id">ID моделі автомобіля для видалення:</label>
                        <input type="text" name="id" id="car_id" required>
                        <button type="submit">Видалити автомобіль</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Список автомобілів</title>
    
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

        
        .car.expanded {
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
                function toggleDetails(carId) {
                        var carDetails = document.getElementById('car_' + carId);
                        carDetails.classList.toggle('expanded');
            
        }
        
                function toggleCarsVisibility() {
           	            var cars = document.getElementsByClassName('car');
           	            for (var i = 0; i < cars.length; i++) {
               	                cars[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати всі автомобілі') ? 'Сховати автомобілі' : 'Показати всі автомобілі';
            
        }
        </script>
    
</head>

<body>
        <h1>Список автомобілів</h1>
    
            <button id="toggleButton" onclick="toggleCarsVisibility()">Показати всі автомобілі</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID автомобіля</th>
                
                <th>Модель</th>
                
                <th>Рік випуску</th>
                
                <th>Марка авто</th>
                
                <th>Країна виробник</th>
                
            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM car_model");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='car hidden' id='car_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['ModelID'] . "</td>" ;
                echo "<td>" . $row['Model'] . "</td>" ;
                echo "<td>" . $row['Production_start_date'] . "</td>" ;
                echo "<td>" . $row['Brand'] . "</td>" ;
                echo "<td>" . $row['Country'] . "</td>" ;
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
