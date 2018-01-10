<!-- 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.-->
<html>
    <head>
        <title>3</title>
    </head>
    <body>
        <form method="get">
            <textarea name="a"></textarea>
            <button type="submit">submit</button>
        </form>
    </body>
</html>
<?php
    $len = $_GET['a'];
    $file = file_get_contents('file.txt');
    $arr = (explode(' ',$file));
        for ($i = 0; $i < count($arr); $i++) {
            if (mb_strlen($arr[$i]) == $len){
                unset($arr[$i]);
        }
    }
    file_put_contents('new.txt',implode(" ", $arr));

?>