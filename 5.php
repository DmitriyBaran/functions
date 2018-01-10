<!--  5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.-->
<?php
function fol($dir,$word){
    $arr=(scandir($dir));
    for ($i = 0; $i < count($arr); $i++) {
        $pos=strpos($arr[$i],$word);
        if($pos!==false){
            $result[]=$arr[$i];
        }
    }return $result;
}
print_r(fol('D:\OSPanel\domains','fun'));
?>