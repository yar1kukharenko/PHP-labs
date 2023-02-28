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
            echo '<p style ="text-align: center; font-size: 20px;">Домашняя работа: Feedback Form</p>'?>
            </div>
        </header>
        <main>
           <div class="main_container">
           <form method = "POST" action = "https://httpbin.org/post">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Write your name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name ="Name" placeholder="Your name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Write your email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Тип обращения</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="Appeal type" id="gridRadios1" value="Complaint" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Жалоба
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="Appeal type" id="gridRadios2" value="Offer">
                        <label class="form-check-label" for="gridRadios2">
                            Предложение
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="Appeal type" id="gridRadios3" value="Gratitude" >
                        <label class="form-check-label" for="gridRadios3">
                            Благодарность
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="textarea">Напишите ваше обращения</label>
                    <div class="row">
                        <textarea name="Appeal" id="textarea" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Вариант ответа</div>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name ="Answer Type" value ="SMS">
                        <label class="form-check-label" for="gridCheck1">
                        СМС
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2" name ="Answer Type" value ="email">
                        <label class="form-check-label" for="gridCheck2">
                        Email
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
                <a href="page2.php">Page 2</a>
           </div>
        </main>
        <footer>
            <?php
                echo '<p style ="text-align: center">Собрать сайт из двух страниц.</p>';
                echo '<p style ="text-align: center">1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.</p>';
                echo '<p style ="text-align: center">2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>';
            ?>
        </footer>
    </div>
</body>
</html>