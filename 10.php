<!--10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.-->
<html>
<head>
    <title>10</title>
</head>
<body>
    <form method="get">
        <textarea name="text"></textarea>
        <button type="submit">submit</button>
    </form>
    <?php
        function unique ($text)
        {
            $text = explode(' ',$text);
            return count(array_unique($text));
        }
        echo unique($_GET['text']);
    ?>
</body>
</html>
