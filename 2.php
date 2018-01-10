<!-- 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.-->
<html>
<head>
    <title>2</title>
</head>
<body>
<form method="get">
    <textarea name="text"> </textarea>
    <button type="submit" name="button">submit</button>
</form>
<?php
$string = isset($_GET['text']) ? $_GET['text'] : false;
function top ($string)
{
    $arr = [];
    $exp = (explode(' ', $string));
    foreach ($exp as $value) {
        $arr[$value] = mb_strlen($value);
    }
    arsort($arr);
    return array_slice($arr,0,3);
}
if (isset($_GET['button'])) {
    echo "<pre>";
    print_r (top($string));
    echo "<pre>";
}
?>
</body>
</html>