<?php
//дз от 22.12.2020

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