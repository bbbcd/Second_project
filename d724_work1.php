<?
$a =1;
$b=2;
$b.=$a;
echo $b;//字符串拼接 21

$student=[90,100,20,30];
echo count($student);
foreach($student as $k=>$v){
    if($v==100){
        echo '<br>'.$k;
    }
    if($k ==['0']){
        echo $v;
    }
    echo array_column($student,'0');
}
?>