<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оберіть категорію</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style1.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand p-0" href="index.php">Головна сторінка</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link order-1" aria-current="page" href="Spares.php">Деталі</a>
                    <a class="nav-link order-2" href="Car_model.php">Авто</a>
                    <a class="nav-link order-3" href="Users.php">Користувачі</a>
                    <a class="nav-link order-4" href="Admin.php">Адміністратори</a>
                    <a class="nav-link order-5" href="Order.php">Замовлення</a>
                    <a class="nav-link order-6" href="Supply.php">Поставки</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1 {
            margin: 30px;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for the outline effect */
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .item {
            width: 40%;
            margin-bottom: 20px;
        }

        .item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    <h1>Оберіть категорію</h1>
    <div class="container">
        <div class="item">
            <img class="rounded-img" src="img/Spares.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Spares.php'">Деталі</button>
        </div>
        <div class="item">
            <img class="rounded-img" src="img/Order.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Order.php'">Замовлення</button>
        </div>
        <div class="item">
            <img class="rounded-img" src="img/Car_model.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Car_model.php'">Моделі авто</button>
        </div>
        <div class="item">
            <img class="rounded-img" src="img/Supply.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Supply.php'">Поставки</button>
        </div>
        <div class="item">
            <img class="rounded-img" src="img/Users.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Users.php'">Користувачі</button>
        </div>
        <div class="item">
            <img class="rounded-img" src="img/Admin.jpg" alt="Картинку не завантажено"/>
            <button onclick="location.href='Admin.php'">Адміністратори</button>
        </div>
    </div>
</body>
</html>
