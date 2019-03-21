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
<?php echo "___________________1_____________<br>"?>
 <?php
 $var="hello";
 echo $var[0]."<br>";
 echo $var[1]."<br>";
 echo $var[4]."<br>";
 ?>
<?php echo "___________________2_____________<br>"?>
<?php
 $a=3; echo $a."<br>";
 ?>
<?php echo "___________________3_____________<br>"?>
<?php
 $a=10;
 $b=2;
 echo $a+$b."<br>";
 echo $a-$b."<br>";
 echo $a*$b."<br>";
 ?>
<?php echo "___________________4_____________<br>"?>
<?php
$c=15;
$d=2;
$result=$c+$d;
 echo $result."<br>" ?>
<?php echo "___________________5_____________<br>"?>
<?php
$a=17;
$b=10;
$c=$a-$b;
$d=7;
$result=$c+$d;
echo $result."<br>";
?>
<?php echo "___________________6_____________<br>"?>
<?php
 $minutVChase=60;
 $sekundVMinute=60;
 $sekundVChase=$minutVChase*$sekundVMinute;
 ?>
<?php echo "___________________7_____________<br>"?>
<?php
 $var=1;
 $var+=12;
 $var-=14;
 $var*=5;
 $var/=7;
 $var++;
 $var--;
 echo $var."<br>";
 ?>
<?php echo "___________________8_____________<br>"?>
<?php
$age=36;
echo "Мне $age лет!"."<br>";
?>
<?php echo "___________________9_____________<br>"?>
<?php
 $num="12345";
 $sum=0;
 for ($i=0;$i<strlen($num);$i++) {
     $sum+=$num[$i];
  }
 echo $sum;
?>

</body>
</html>