<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Користувачі</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати користувача</h1>
        <div class="form-container">
                <form action="add_user.php" method="post">
                        <label for="login">Логін:</label>
                        <input type="text" name="login" id="login" required>
            
                        <label for="phone">Телофон:</label>
                        <input type="text" name="phone" id="phone" pattern="\d*" required>
            
                        <label for="email">Електронна пошта:</label>
                        <input type="text" name="email" id="email" required>
            
                        <label for="address">Адреса:</label>
                        <input type="text" name="address" id="address" required>
            
                        <label for="password">Пароль:</label>
                        <input type="text" name="password" id="password" maxlength="30" minlength="5" required>
            
                        <button type="submit">Додати користувача</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати дані про користувача</title>
    
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
        <h1>Редагувати дані про користувача</h1>
        <div class="form-container">
                <form action="edit_user.php" method="post">
                        <label for="user_id">ID користувача для редагування:</label>
                        <input type="text" name="id" id="user_id" required>

                        <label for="login">Логін:</label>
                        <input type="text" name="login" id="login" required>
            
                        <label for="phone">Телофон:</label>
                        <input type="text" name="phone" id="phone" pattern="\d*" required>
            
                        <label for="email">Електронна пошта:</label>
                        <input type="text" name="email" id="email" required>
            
                        <label for="address">Адреса:</label>
                        <input type="text" name="address" id="address" required>
            
                        <label for="password">Пароль:</label>
                        <input type="text" name="password" id="password" maxlength="30" minlength="5" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення користувача</title>
    
</head>

<body>
        <h1>Видалення користувача</h1>
        <div class="form-container">
                <form action="delete_user_process.php" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити цього користувача?');">
                        <label for="user_id">ID користувача для видалення:</label>
                        <input type="text" name="id" id="user_id" required>
                        <button type="submit">Видалити користувача</button>
            
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

        
        .user.expanded {
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
                function toggleDetails(userId) {
                        var userDetails = document.getElementById('user_' + userId);
                        userDetails.classList.toggle('expanded');
            
        }
        
                function toggleUsersVisibility() {
           	            var users = document.getElementsByClassName('user');
           	            for (var i = 0; i < users.length; i++) {
               	                users[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати користувачів') ? 'Сховати користувачів' : 'Показати користувачів';
            
        }
        </script>
    
</head>

<body>
        <h1>Список користувачів</h1>
    
            <button id="toggleButton" onclick="toggleUsersVisibility()">Показати користувачів</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID користувача</th>
                
                <th>Логін</th>
                
                <th>Пароль</th>
                
                <th>Електронна пошта</th>
                
                <th>Адреса</th>
                
            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM Users");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='user hidden' id='user_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['id'] . "</td>" ;
                echo "<td>" . $row['login'] . "</td>" ;
                echo "<td>" . $row['phone'] . "</td>" ;
                echo "<td>" . $row['email'] . "</td>" ;
                echo "<td>" . $row['address'] . "</td>" ;
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
