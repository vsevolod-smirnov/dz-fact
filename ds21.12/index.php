//есть вопросы как сделать задачу №4 из первого дз и вопрос к задаче №3 из второго дз;
<?php
echo '<br>';
define("pi" , '3.14');
echo pi .'<br>';
echo '<br>';
echo "Задача 1".'<br>';
$i=5;
while ($i<=18) {
    echo $i .'<br>';
    $i++;
}
echo '<br>'."Задача 2".'<br>';
$num=1000;
while ($num>50) {
    $num=$num/2;
    echo $num .'; ';
}
echo '<br>';
for ($numb=1000;$numb>50;$numb=$numb/2){
    echo $numb.'; ';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" methode="GET">
    <p>Введи значение переменной: </p><input type="text" name="text">
    <input type="submit" name="submit" value="Отправить" />
</form>
<?php
 $n=$_GET["text"];
echo $n.'<br>';
switch($n) {
    case 0:
        echo '0,1,2,3,4,5,6,7,8,9,10'.'<br>';
        break;
    case 1:
        echo "0,1,2,3,4,5,6,7,8,9".'<br>';
        break;
    case 2:
        echo "0,1,2,3,4,5,6,7,8".'<br>';
        break;
    case 3:
        echo "0,1,2,3,4,5,6,7".'<br>';
        break;
    case 4:
        echo "0,1,2,3,4,5,6,7".'<br>';
        break;
    case 5:
        echo "0,1,2,3,4,5".'<br>';
        break;
    case 6:
        echo "0,1,2,3,4".'<br>';
        break;
    case 7:
        echo "0,1,2,3".'<br>';
        break;
    case 8:
        echo "0,1,2".'<br>';
        break;
    case 9:
        echo "0,1".'<br>';
        break;
    case 10:
        echo "0".'<br>';
        break;
}







?>

</body>
</html>
