<!--Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в
первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.-->
<html>
    <head>
        <title>1</title>
    </head>
    <body>
        <?php
            if (isset($_GET['a']) && isset($_GET['b'])){
                echo implode(' ',getCommonWords(explode(' ',$_GET['a']),explode(' ',$_GET['b'])));
            }
                ?>
        <form method="get">
            <textarea name="a"></textarea>
            <textarea name="b"></textarea>
            <button type="submit">submit</button>
        </form>
        <?php
            function getCommonWords($a, $b){
                return array_intersect($a, $b);
            }
        ?>
    </body>
</html>