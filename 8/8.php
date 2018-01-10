<!--Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов.
При наличии таких слов - выводить сообщение "Некорректный комментарий".
Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.-->
<html>
<head></head>
<body>
<div>
    <?php
    if (isset($_POST['comment'])) {
        addComment('D:\OSPanel\domains\functions\8\test.txt', ['date' => date('Y-m-d H:i:s'), 'comment' => $_POST['comment']]);
    }
    $comments = readComments('D:\OSPanel\domains\functions\8\test.txt');
    foreach ($comments as $comment) {
        echo '<div>' . ($comment['date'] ) . ': ' . htmlentities(maskBadWords($comment['comment'])) . '</div>';
    }
    ?>
</div>
<form method="post">
    <textarea name="comment"></textarea>
    <button type="submit">Comment</button>
</form>
</body>
</html>

<?php
function maskBadWords($comment) {
    $arr = ['сука', 'пиздец', 'бля'];
    foreach ($arr as $value) {
        $comment = str_replace($value,'*****', $comment);
    }
    return $comment;
}
function readComments($path)
{
    if (file_exists($path)) {
        return unserialize(file_get_contents($path));
    } else {
        return [];
    }
}
function addComment($path, array $comment)
{
    $comments = readComments($path);
    $comments[] = $comment;
    writeComments($path, $comments);
}
function writeComments($path, array $comments)
{
    file_put_contents($path, serialize($comments));
}
?>