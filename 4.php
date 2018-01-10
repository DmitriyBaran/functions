<!--  Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.-->
<?php
function fol ($dir){
    $dir = "D:\OSPanel\domains";
    $file = scandir($dir);

    foreach  ($file as $value){
        echo $value . "<br>";
        }
    }
    return fol($value);

?>