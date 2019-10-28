<form action="" method="post">
    <input type="text" name="text">
    <input type="submit" name="submit" value="Отправь меня!" />

<?php
$text=$_POST['text'];
$text=explode(' ',$text);
switch ($text[1]){
    case '+':
        $text=$text[0]+$text[2];
        break;
    case '-':
        $text=$text[0]-$text[2];
        break;
    case '*':
        $text=$text[0]*$text[2];
        break;
    case '/':
        $text=$text[0]/$text[2];
        break;
}
?>
    <div style="background: yellowgreen;width: auto"><?php echo $text?></div>
</form>





