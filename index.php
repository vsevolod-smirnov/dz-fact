<?php
/*//дз от 22.12.2020

for ($i=0;$i<10;$i++) {
    $arr[$i]=mt_rand(0,100);
    if ($arr[$i]%2==0){
        echo '<i>'.$arr[$i].'</i>'.'<br>';
    }
    elseif ($arr[$i]%2==1) {
        echo $arr[$i].'<br>';
    }
}
$arr2= [
        'Россия'=>['Арзамас','Москва','Питер'],
       'Украина'=>['Ахтырка','Киев'],
       'Белорусь'=>['Актау','Алматы']
        ];
foreach ($arr2 as $country => $city){
    echo 'В '. $country.' есть такие города на а:'.'<br>';
        foreach ($city as $keycity =>$namecity ){
            if ((mb_substr($city[$keycity], 0,1,'utf-8') == 'А'))
            {
                echo $namecity.'<br>';
            }
        }
}
$arr3=[];
$key=rand(1,3);
/*for ($a=0;$a<5;$a++) {
    $arr3[$a] = [];
    $numb = rand(1, 2);
    for ($b = 0; $b < $numb; $b++) {
        $arr3[$b][$n] = rand(0, 100);
    }

    foreach ($arr3 as $value => $k) {
        echo $value . ' :';
        ;
        foreach ($k as $value2 => $item2) {
            echo $item2. ' ';
            $sum++;

        }
        echo '<br>';
    }
}*/

//$z=счетчик первого уровня
//$x=cчетчик второго уровня
//$arr4[]=исходный массив;
/*
$arr4=[];
$zr=rand(1,5);
echo $zr.'<hr>';
for ($z=0;$z<$zr;$z++){
    $xr=rand(1,3);

    for ($x=0;$x<$xr;$x++){
        $arr4[$z][$x]=rand(0,1000);
    }
}
foreach ($arr4 as $value =>$k){
    echo $value.' : ';
    foreach($k as $value2 =>$k2) {
        echo $k2 . ' ';
        $sum++;
    }
    echo'<br>';
    $sum_in++;
}
echo '<hr>';
echo 'В массиве '.$sum_in.' массивов 1-го уровня'.'<br>';
echo 'В массивах 2-го уровня '.$sum.' элементов';
*/
//////////


//дз от 25.12

/*Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
добавьте троеточие в конец и выведите на экран.
Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.*/

//Задача 1
/*
$str="длина";
if (mb_strlen($str)<=5) {
 echo $str."<br>";
}
else if (mb_strlen($str)>5)  {
    echo str_replace(mb_substr($str, 0,4),"",$str)."..."."<br>";
}

//Задача 2
$str2="abc ABC Abc AbC";
for ($i=0;$i<mb_strlen($str);$i++){
    $str2=str_replace("a","1",$str2);
    $str2=str_replace("b","2",$str2);
    $str2=str_replace("c","3",$str2);

}
echo $str2."<br>";

//задача 3
$str3="abc abc abc";
for ($k=0;$k<mb_strlen($str);$k++){
    $str3=str_replace("b","1",$str3);
    echo $str3."<br>";

}
//задача 4
$str4="html css php ";
echo print_r(str_word_count($str4,1))."<br>";

//задача 5
$date_1="22-12-2020";
$date_2="24-12-2020";
$d1=(int)mb_substr($date_1,0,mb_strpos($date_1,"-"));
$d2=(int)mb_substr($date_2,0,mb_strpos($date_2,"-"));
//echo $d1.",".$d2."<br>";
$m1=(int)mb_substr($date_1,3,4);
$m2=(int)mb_substr($date_2,3,4);
echo $m1.",".$m2."<br>";
$y1=(int)mb_substr($date_1,6,10);
$y2=(int)mb_substr($date_2,6,10);
echo $y1.",".$y2."<br>";

*/
/*if ($d1>$d2)
{
    echo $diff=$d1-$d2."<br>";
}
else if ($d1<=$d2){

    echo ($diff=$d1-$d2+30)."<br>";
}*/
///////дз от 30.12
//задача 1
function rr()
{

  $k = rand(5,10);
  for ($i=0;$i<$k; $i++)
  {
      $arr1[$i]=rand(0,10);
  }
  return $arr1;
}
 rr();
echo "<pre>";
print_r(rr());
echo "</pre>";
echo "<hr>";
//задача 2
$str1="HTML, CSS, PHP, BITRIX";
function word_count($str)
{
    $arr2=str_word_count($str, 1);
    echo count($arr2);

}
echo "Количетсво слов в строке равно ";
echo word_count($str1);
echo "<hr>";

//задача 3;
function reverse_str($str)
{
    echo strrev($str);
}
reverse_str($str1);
echo "<hr>";
//задача 4
function str_len($str)
{
    return mb_strlen($str);

}
echo str_len($str1);
echo "<hr>";

//задача 5

function br($str)
{

    for ($a=0;$a<mb_strlen($str);$a++)
    {
        $b=1;
        echo mb_substr($str,$a,$b)."<br>";

    }
}
br($str1);
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

</body>
</html>