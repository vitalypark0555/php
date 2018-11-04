<?php 
$a = "Строка";
$b = 100;
$c = 3.5;
define("d", 155);
$e = 062;
$f = 0x3A;

// 1-й пункт
echo $a.'</br>';
echo $b.'</br>';
echo $c.'</br>';
echo d.'</br>';
echo $e.'</br>';
echo $f.'</br>';
echo '</br>';
//2-й пункт
//Константа d превратилась в строку "d"
//Остальные переменные выведены без изменений
echo "$a".'</br>';
echo "$b".'</br>';
echo "$c".'</br>';
echo "d".'</br>';
echo "$e".'</br>';
echo "$f".'</br>';
echo '</br>';
//3-й пункт
//Все переменные превратились в строки
echo '$a'.'</br>';
echo '$b'.'</br>';
echo '$c'.'</br>';
echo 'd'.'</br>';
echo '$e'.'</br>';
echo '$f'.'</br>';
echo '</br>';
//4-й пункт
//Ошибка на 46 строке, т.к. восьмеричная система может содержать цифры от 0-7
echo 010;
echo 011;
echo 012;
echo 013;
echo 014;
echo 015;
echo 016;
//echo 017;
//echo 018;
//echo 019;
//echo 020;
echo '</br>';
echo '</br>';
//5-й пункт
echo '”Я помню чудное мгновенье:'.'</br>';
echo 'Передо мной явилась ты,'.'</br>';
echo 'Как мимолетное виденье,'.'</br>';
echo 'Как гений чистой красоты.”'.'</br>';
echo '<i>А.С. Пушкин</i>';

echo '</br>';
echo '</br>';
//6-й пункт
echo "
”Я помню чудное мгновенье:</br>
 Передо мной явилась ты,</br>
 Как мимолетное виденье,</br>
 Как гений чистой красоты.”</br>
<i>А.С. Пушкин</i>
";
echo '</br>';
echo '</br>';

//7-й пункт
//Выведет ошибку, что встретилось нечисловое значение.
//Т.е. невозможно вычислить сумму из-за несовпадения типов переменных.
echo 10 + "Привет";
echo '</br>';
echo '</br>';

//8-й пункт
// XOR - это ИСКЛЮЧАЮЩЕЕ ИЛИ, т.е. при одинаковых операндах всегда FALSE, при разных всегда TRUE
$q = (true xor true);
var_dump($q);
echo '</br>';
$w = (true xor false);
var_dump($w);
echo '</br>';
$e = (false xor true);
var_dump($e);
echo '</br>';
$r = (false xor false);
var_dump($r);
echo '</br>';
$a = 1;
$result = ($a xor $a);
var_dump($result);
echo '</br>';
echo '</br>';