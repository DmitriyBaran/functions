<!-- 11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
что каждое новое предложение начиняется с большой буквы. -->
<html>
<head>
    <title>11</title>
</head>
<body>
<?php
echo up($_GET['a']);
?>
        <form method="get">
            <textarea name="a"></textarea>
            <button type="submit">submit</button>
        </form>
    <?php
        function up($a){
            return ucfirst(explode('.',$_GET['a']));
        }
    ?>
</body>
</html>