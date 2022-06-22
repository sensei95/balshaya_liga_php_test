<?php
    $myfile = "data.txt";
    $file_content = '';
    if (isset($_POST['text']) && !empty($_POST['text'])){
        //Валидация данных
        $text = filter_input(INPUT_POST,'text',FILTER_SANITIZE_STRING);
        //Записивает в файле данные из поля формы
        file_put_contents($myfile,$text,FILE_APPEND);
    }

    //Читает содержимое файла в строку
     $file_content = file_get_contents($myfile);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; min-height: 100vh; ">
<form action="" method="post">
    <div class="form-body" style="margin-bottom: 30px">
        <input type="text" name="text">
        <button type="submit">
            Submit
        </button>
    </div>
    <div class="file-content">
        <h1>Содержание файла</h1>
        <p><?= $file_content; ?></p>
    </div>
</form>
</body>
</html>