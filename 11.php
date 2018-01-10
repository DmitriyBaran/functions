<!-- 11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
что каждое новое предложение начиняется с большой буквы. -->

<?php
    function up ($a)
    {
        $a = "string. text. text. text";
        // echo mb_detect_encoding($a);
        $exp = explode('. ',$a);
        foreach ($exp as $value){
            $value = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
            echo ucfirst($value) . '. ';
        }
    }
    return up($value); //работает только для латиницы

?>

<!-- нужно использовать iconv-->
