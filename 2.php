<!-- 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.-->
<html>
<head>
    <title>2</title>
</head>
<body>
    <form method="get">
        <textarea name="a"> </textarea>
        <button type="submit">submit</button>
    </form>
    <?php
        $text = $_GET['a'];
        function top($text){
            $text = explode(' ',$text);
            for($i = 0; $i < count($text); $i++){
                for($j = 0; $j < count($text)-1; $j++){
                    if (mb_strlen($text[$j]) > mb_strlen($text[$j+1])){
                        $str = $text[$j];
                        $text[$j] = $text[$j + 1];
                        $text[$j+1] = $str;
                    }
                }
            }
            return (array_slice($text,0 , 3));
        }
        print_r (top($text));
            ?>
</body>
</html>


<!--разбить на массив, потом array multicastor, array_slice от 0 до 3-->