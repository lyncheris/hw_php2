<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<?php 

		date_default_timezone_set('Europe/Moscow');

		//1

		$hour = date("H");
		$minuts = date("i");
		$seconds = date("s");
		$sec = $hour * 3600 + $minuts * 60 + $seconds;

		echo '<p><strong>1)</strong> Сегодня в сутках прошло: ' . $sec . ' секунд. </p>';

		//2 

		$a = 3;

		echo '<p><strong>2)</strong> ' . $a . '</p>';

		//3

		$a = 10;
		$b = 2;
		$summ = $a + $b;
		$razn = $a - $b;
		$proizv = $a * $b;
		$chastn = $a / $b;

		echo '<p><strong>3)</strong> Сумма: ' . $summ . '</p>';
		echo '<p>Разность: ' . $razn . '</p>';
		echo '<p>Произведение: ' . $proizv . '</p>';
		echo '<p>Частное: ' . $chastn . '</p>';

		//4

		$c = 15;
		$d = 2;
		$result = $c + $d;

		echo '<p><strong>4)</strong> ' . $result . '</p>';

		//5

		$x = 2;
		$y = 6;
		$z = 9;
		$result = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);

		echo '<p><strong>5)</strong> ' . $result . '</p>';

		//6

		$a = 4;
		$b = 8;
		$c = 3;
		$result1 = ( $a + $b) / $c;
		$result2 = ( $a + $c) / $b;
		$result3 = ( $c + $b) / $a;

		echo '<p><strong>6)</strong> ' . $result1 . '</p>';
		echo '<p>' . $result2 . '</p>';
		echo '<p>' . $result3 . '</p>';

		//7

		$a = 17;
		$b = 54;
		$summ = 0.4 * $a + 0.84 * $b;

		echo '<p><strong>7)</strong> ' . $summ . '</p>';

		//8

		$a = 4;
		$b = 8;
		$c = 3;
		$summ = $a + $b + $c;

		echo '<p><strong>8)</strong> ' . $summ . '</p>';

		//9

		$a = 17;
		$b = 10;
		$c = $a - $b;
		$d = 7;
		$result = $c + $d;

		echo '<p><strong>9)</strong> ' . $result . '</p>';

		//10

		$text = 'Привет, Мир!';

		echo '<p><strong>10)</strong> ' . $text . '</p>';

		//11

		$text1 = 'Привет, ';
		$text2 = 'Мир!';

		echo "<p><strong>11)</strong> {$text1} {$text2} </p>";

		//12


		echo '<script>
				let name = prompt ("Введите ваше имя");
				</script>';
		$name = "<script>document.writeln(name);</script>";
	
		echo "<p><strong>12)</strong> Привет, {$name}! </p>";

		//13


		echo '<script>
				let age = prompt ("Введите ваш возраст");
				</script>';
		$age = "<script>document.writeln(age);</script>";
	
		echo "<p><strong>13)</strong> Мне {$age}лет! </p>";

		//14

		$text = 'abcde';

		echo "<p><strong>14)</strong> $text[0], $text[2], $text[4]  </p>";

		//15

		$text = 'abcde';
		$text{0} = '!';
		// $search = 'a';
		// $replace = '!';
		// $a = str_replace($search, $replace, $text);

		echo "<p><strong>15)</strong> $text </p>";

		//16

		$num = '12345';
		$sum = array_sum(str_split($num));

		echo "<p><strong>16)</strong> $sum </p>";

		//17

		$var1 = 60 * 60;
		$var2 = $var1 * 24;
		$var3 = $var2 * 30;
		$var4 = $var3 * 365;
		$var5 = date("Y");
		$var6 = abs( 2000 - $var5);
		$var7 = $var4 * $var6 + date("n") * $var3 + date("z") * $var2 + date("H") * $var1 + date("s");

		echo '<p><strong>17)</strong> В часе: ' . $var1 . ' секунд. </p>';
		echo '<p>В сутках: ' . $var2 . ' секунд. </p>';
		echo '<p>В месяце: ' . $var3 . ' секунд. </p>';
		echo '<p>В году: ' . $var4 . ' секунд. </p>';
		echo '<p>С начала 2000 года прошло: ' . $var7 . ' секунд. </p>';

		//18

		$hour = date("H");
		$minuts = date("i");
		$seconds = date("s");

		echo "<p><strong>18)</strong> {$hour}:{$minuts}:{$seconds} </p>";

		//19

		$a = 12;
		$b = $a ** 2;

		echo "<p><strong>19)</strong> $b </p>";

		//20

		$var = 1;
		$var = --$var + 12;
		$var = ++$var - 14;
		$var /= $var * 5;
		$var *= $var / 7;
		$var += ++$var + 1;
		$var -= ++$var - 1;

		echo "<p><strong>20)</strong> $var </p>";

		//21

		define('SURNAME', 'Алексеенко');
		$name = 'Антон';
		$patronymic = 'Игоревич';
		$age = 24;
		$surname = SURNAME;

		// $arr1 = str_split($name);
		// $arr2 = str_split($patronymic);

		// if (defined('SURNAME')) {
		// 	echo "<p><strong>21)</strong> Меня зовут $surname $arr1[0]. $arr2[0].<br /> Мне $age года. </p>";
		// } else {
		// 	echo "<p><strong>21)</strong> Константа не существут </p>";
		// };

		if (defined('SURNAME')) {
			echo "<p><strong>21)</strong> Меня зовут " . $surname . " " . $name[0] . ". " . $patronymic[0] . "." . "<br /> Мне " . $age . " года. </p>";
		} else {
			echo "<p><strong>21)</strong> Константа не существут </p>";
		};

		//22

		$text = 'Я';
		$text = $text.' хочу ';
		$text .= $text.'знать ';
		$text .= $text.'PHP!';

		echo "<p><strong>22)</strong> $text </p>";

		//23

		$var = 10;
		$var = --$var + 1;
		$var = --$var + 1;
		$var = ++$var - 1;

		echo "<p><strong>23)</strong> $var </p>";


	?>
</body>
</html>