<!--Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.-->
<html>
<head>
    <title>6</title>
</head>
<body>
<form method=post enctype=multipart/form-data>
    <input type=file name=uploadfile>
    <input type=submit value=Upload></form>
</body>
</html>
<?php
$uploaddir = '.\gallery';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
    if(copy($_FILES['uploadfile']['tmp_name'],$uploadfile))
    {
        echo "successfully";
        echo "<br>";
    }
    else
    {
        echo "error";
        echo "<br>";
    }
$basedir = 'D:\OSPanel\domains\functions\6\gallery';
$files = scandir($basedir);
$cols = 3;
$k = 0;
    echo "<table>";
            foreach ($files as $values){
                if ($values != '.' && $values != '..'){
                    if ($k % $cols == 0)
                        echo "<tr>";
                        echo "<td>";
                        $prin = gallery . '\\' . $values;
                        echo "<img src='$prin' width='200' height='200'>";
                        echo "<br>";
                    }
                    echo "</td>";
                if ((($k+1) % $cols == 0)) echo "</tr>";
                $k++;
            }
    echo "<table>";