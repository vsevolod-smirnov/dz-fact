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
    <p>Введи значение переменной: </p><input type="number" name="number">
    <input type="submit" name="submit" value="Отправить" />
</form>
<?php
 $n=$_GET["number"];
echo $n.'<br>';
 if ($n=0)

     {
         echo '0,1,2,3,4,5,6,7,8,9,10'.'<br>';
     }
 elseif($n=1)
 {
     echo "0,1,2,3,4,5,6,7,8,9".'<br>';
 }
 elseif($n=2)
 {
     echo "0,1,2,3,4,5,6,7,8".'<br>';
 }
 elseif($n=3)
 {
     echo "0,1,2,3,4,5,6,7".'<br>';
 }
 elseif($n=4)
 {
     echo "0,1,2,3,4,5,6,7".'<br>';
 }
 elseif($n=5)
 {
     echo "0,1,2,3,4,5".'<br>';
 }
 elseif($n=6)
 {
     echo "0,1,2,3,4".'<br>';
 }
 elseif($n=7)
 {
     echo "0,1,2,3".'<br>';
 }
 elseif($n=8)
 {
     echo "0,1,2".'<br>';
 }
 elseif($n=9)
 {
     echo "0,1".'<br>';
 }
 elseif($n=10)
 {
     echo "0".'<br>';
 }
?>

</body>
</html>