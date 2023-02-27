<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div >
            <?php echo '<img src = "./mospolytech-logo-black.svg" alt = "">';
            echo '<p style ="text-align: center; font-size: 20px;">Домашняя работа: Hello, World!</p>'?>
            </div>
        </header>
        <main>
            <?php 
                $digits = 1;
                $count =  rand(pow(10, $digits-1), pow(10, $digits)-1);
                for ($i = 0; $i<$count; $i++) {
                    echo '<p style ="text-align: center">'.$i.' Hello, World</p>';
                };
            ?>
        </main>
        <footer>
            <?php
                echo '<p style ="text-align: center">Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>'
            ?>
        </footer>
    </div>
</body>
</html>