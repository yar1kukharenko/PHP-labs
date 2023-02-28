<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <textarea name="text" id="" cols="30" rows="10">
            <?php
                $headers = get_headers('http://www.example.com');
                foreach ($headers as $header) {
                    echo $header . "\n";
                }
            ?>
        </textarea>

    </main>
</body>
</html>