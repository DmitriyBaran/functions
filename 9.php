<!-- 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы. -->
<html>
<head>
    <title>9</title>
</head>
<body>
        <form method="get">
            <textarea name="a"></textarea>
            <button type="submit">submit</button>
        </form>
<?php
function revers($a){
    return strrev($a);
}
echo revers($_GET['a']);
?>
</body>
</html>