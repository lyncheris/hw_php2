<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<?php 

		//1

		echo "<strong>Task 1</strong>";

		$a = 10;

		if ($a == 10) {
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		//2 

		echo "<hr/><strong>Task 2</strong>";

		$a = '1';

		if ($a === '1') {
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = 1;

		if ($a === '1') {
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};
		$a = 3;

		if ($a === '1') {
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		//3

		echo "<hr/><strong>Task 3</strong>";

		$a;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = 1;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = 3;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = -3;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = 0;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = NULL;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = true;

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = '';

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a ='0';

		if (isset($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		//4

		echo "<hr/><strong>Task 4</strong>";

		$a;

		if (empty($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = 3;

		if (empty($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		$a = NULL;

		if (empty($a))	{
			echo '<p> Верно </p>';
		}	else {
			echo '<p> Неверно </p>';
		};

		//5

		echo "<hr/><strong>Task 5</strong>";

		$a = 228;
		$b = $a % 3;
		$c = $a % 5;

		echo "<p> Остаток от деления на 3: {$b} </p>";
		echo "<p> Остаток от деления на 5: {$c} </p>";

		//6

		echo "<hr/><p><strong>Task 6</strong></p>";

		$a = 25;
	
		echo ($a > 10) ? ($a + 100) : ($a - 30);

		//7

		echo "<hr/><p><strong>Task 7</strong></p>";

		$a = 178;
		$b = (string)$a;
		$b[1] = 3;
		$b = (int)$b;
		
		echo $b;

		//8

		echo "<hr/><p><strong>Task 8</strong></p>";

		$a = 5;
	
		echo ($a > 0 && $a < 5) ? "Верно <br/>" : "Неверно <br/>";

		$a = 0;
	
		echo ($a > 0 && $a < 5) ? "Верно <br/>" : "Неверно <br/>";

		$a = -3;
	
		echo ($a > 0 && $a < 5) ? "Верно <br/>" : "Неверно <br/>";

		$a = 2;
	
		echo ($a > 0 && $a < 5) ? "Верно <br/>" : "Неверно <br/>";

		//9

		echo "<hr/><p><strong>Task 9</strong></p>";

		$a = 1;
		$b = 3;

		echo ($a <= 0 && $b >= 5) ? ($a + $b) : ($a - $b);
		echo "<br />";

		$a = 0;
		$b = 6;

		echo ($a <= 0 && $b >= 5) ? ($a + $b) : ($a - $b);
		echo "<br />";

		$a = 3;
		$b = 5;

		echo ($a <= 0 && $b >= 5) ? ($a + $b) : ($a - $b);
		echo "<br />";

		//10

		echo "<hr/><p><strong>Task 10</strong></p>";

		$a = 152;
		$b = 12;
		$c = 524;

		$result1 = ($a + $b + $c) / 3;
		$result2 = ($a + $c) * 2 - $b * 2;

		echo "Среднее арифметическое: {$result1} <br /> Разность: {$result2}";

		//11

		echo "<hr/><p><strong>Task 11</strong></p>";

		$tc = 27;
		$tf = $tc * 9 / 5 + 32;

		echo "Температура в фаренгейт: {$tf}";

		//12

		echo "<hr/><p><strong>Task 12</strong></p>";

		$a = 'abcde';

		echo ($a[0] == 'a') ? "да" : "нет";

		//13

		echo "<hr/><p><strong>Task 13</strong></p>";

		$a = 15;
		$b = -2;

		echo ($a > 30 || $b > 30) ? "yes" : "no";

		//14

		echo "<hr/><p><strong>Task 14</strong></p>";

		$a = 8;
		$b = 21;
		$c = 12;
		$d = 5;

		echo ($a > 5 && $b > 5 && !($c%6) && ($d%3)) ? "yes" : "no";

		//15

		echo "<hr/><p><strong>Task 15</strong></p>";

		$a = "You are welcome!";

		for ($i = 1; $i <=10; $i++) {
			echo "{$a} <br />";
		}

		//16

		echo "<hr/><p><strong>Task 16</strong></p>";

		$a = "253652";

		echo (($a[0] + $a[1] + $a[2]) == ($a[3] + $a[4] + $a[5])) ? "да" : "нет";

		//17

		echo "<hr/><p><strong>Task 17</strong></p>";

		$a = 5;
		$b = -21;
		$c = 2;
		$d = 0;

		if ($a > 0) {
			$d++;
		}

		if ($b > 0) {
			$d++;
		}

		if ($c > 0) {
			$d++;
		}

		echo "Количество положительных чисел: {$d}";

		//18

		echo "<hr/><p><strong>Task 18</strong></p>";

		$num = 3;

		switch($num) {
			case 1:
				echo "Зима";
			break;
			case 2:
				echo "Весна";
			break;
			case 3:
				echo "Лето";
			break;
			case 4:
				echo "Осень";
			break;
		}

		//19

		echo "<hr/><p><strong>Task 19</strong></p>";

		$year = 1600;

		echo ((!($year%4) && ($year%100)) || !($year%400)) ? "Високосный год" : "Невисокосный год";

		//20

		echo "<hr/><p><strong>Task 20</strong></p>";

		$lang = "ru";
		// $lang = "en";
		$arrRu = ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];
		$arrEn = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];

		switch ($lang) {
			case "ru":
				print_r($arrRu);
			break;
			case "en":
				print_r($arrEn);
			break;
		};

		//21

		echo "<hr/><p><strong>Task 21</strong></p>";

		$deg = 157;
		$h = $deg / 30;
		$hour = (int)$h;
		$min = ($h - $hour)*60;

		echo "Прошло: {$hour} часов {$min} минут";



		//22

		echo "<hr/><p><strong>Task 22</strong></p>";

		$num = 61;
		$b = $num % 6 ;
		$num /= 6;
		$a = $num - (int)$num;
		
		// echo $a . '<br />';
		// echo $b . '<br />';
		// echo $num . " / " . (int)$num . "<br />";
		echo ($a <= 0.5 && $b != 0) ? "Зеленый" : "Красный";

		//23

		echo "<hr/><p><strong>Task 23</strong></p>";

		$a = 0;

		for($i = 20; $i <= 45; $i++) {
			if (fmod($i, 5) == 0) $a += $i;
		}

		echo $a;

		//24

		echo "<hr/><p><strong>Task 24</strong></p>";

		$l = 50;
		$t = 100;
		$w = 250;
		$w2 = $w / 2;
		$block = "<div style=\"background-color: gray; border: 5px solid black; position: absolute; top: {$t}px; left: calc({$l}% - {$w2}px); width: {$w}px; height: {$w}px;\"></div>";

		echo $block;
		echo "Квадрат вверху страницы:р";

		//25

		echo "<hr/><p><strong>Task 25</strong></p>";

		for($i = 1; $i <=100; $i++) {
			echo $i . "<br />";
		}

		//26

		echo "<hr/><p><strong>Task 26</strong></p>";

		$a = 716541354;
		$b = (string)$a;

		for($i = 0; $i < 9; $i++) {
			if (fmod(+$b[$i], 2) == 0) $b[$i] = '0';
		}

		echo +$b;

		//27

		echo "<hr/><p><strong>Task 27</strong></p>";

		// for($i = 11; $i <=33; $i++) {
		// 	echo $i . "<br />";
		// }

		$a = 10;

		while($a < 33) {
			$a++;
			echo $a . "<br />";
		}

		//28

		echo "<hr/><p><strong>Task 28</strong></p>";

		$a = 147;
		$b = (string)$a;

		$c = $b[2];
		$d = $b[0];
		$b[0] = $c;
		$b[2] = $d;

		echo $b;

		//29

		echo "<hr/><p><strong>Task 29</strong></p>";

		// while

		$num = 1000;
		$a = 0;

		while($num >= 50) {
			$num /= 2;
			$a++;
		}

		echo 'while: ' . $num . ' количество итераций - ' . $a . '<br/>';

		// for

		$num = 1000;
		$a = 0;

		for(; $num >= 50; $num /= 2) {
			$a++;
		}

		echo 'for: ' . $num . ' количество итераций - ' . $a;

		//30

		echo "<hr/><p><strong>Task 30</strong></p>";

		$a = 544215587557455;
		$b = (string)$a;
		$c = 0;

		for($i = 0; $i < 15; $i++) {
			if ($b[$i] == 5) $c++;
		}

		echo $c;

		//31

		echo "<hr/><p><strong>Task 31</strong></p>";

		$a = "A";

		for($i = 1; $i <= 5; $i++) {
			for($j = 1; $j <= 8; $j++) {
				echo $a;
			}
			echo '<br />';
		}

		//32

		echo "<hr/><p><strong>Task 32</strong></p>";

		$a = 0;
		$b = 2;
		$c = 5;

		$a1 = $a + $b;
		$b1 = $c - $a;
		$c1 = $a + $b + $c;

		echo "a = {$a1}, b = {$b1}, c = {$c1}";

		//33

		echo "<hr/><p><strong>Task 33</strong></p>";

		$a = 3;
		$b = 2;

		$a1 = $a * 0.3 + $b * 0.4;
		$a2 = 3 * ($a * 2 + $b * 1.8);
		
		echo "а) {$a1} рублей; <br /> б) {$a2} рублей;";

		//34

		echo "<hr/><p><strong>Task 34</strong></p>";
		
		$a = 11;
		$b = -1;

		if ($a == 11 && $b == 0 ||  $a == 14 && $b == 1 || $a == 12 && $b == -1) echo "Север";
		if ($a == 12 && $b == 0 ||  $a == 11 && $b == 1 || $a == 13 && $b == -1) echo "Запад";
		if ($a == 13 && $b == 0 ||  $a == 12 && $b == 1 || $a == 14 && $b == -1) echo "Юг";
		if ($a == 14 && $b == 0 ||  $a == 13 && $b == 1 || $a == 11 && $b == -1) echo "Восток";

		//35

		echo "<hr/><p><strong>Task 35</strong></p>";

		$a = "*";
		$n = 12;

		for($i = 1; $i <= $n; $i++) {
			for($j = 1; $j <= $n; $j++) {
				echo $a;
			}
			echo '<br />';
		}

		//36

		echo "<hr/><p><strong>Task 36</strong></p>";

		for($i = 1001; $i <= 1025; $i += 3) {
			echo $i . "<br />";
		}

		//37

		echo "<hr/><p><strong>Task 37</strong></p>";

		for($i = 100; $i >=0; $i -= 4) {
			echo $i , "<br />";
		}

		//38

		echo "<hr/><p><strong>Task 38</strong></p>";

		// $arr = array();

		// for($i = 10; ; $i *= 1.01) {
		// 	if ($i > 80) break;
		// 	array_push($arr, round($i, 2));
		// }
		// $arr7 = array_sum(array_slice($arr, 0, 7));
		// $arrN = array_sum(array_slice($arr, 0, 21));
		// echo 'Пробег лыжника за второй день составил: ' . $arr[1] . ' км.' . '<br />';
		// echo 'Пробег лыжника за третий день составил: ' . $arr[2] . ' км.' . '<br />';
		// echo 'Пробег лыжника за десятый день составил: ' . $arr[9] . ' км.' . '<br />';
		// echo 'Пробег лыжника за семь дней составил: ' . $arr7 . ' км.' . '<br />';
		// echo 'Пробег лыжника за двадцать один день составил: ' . $arrN . ' км.' . '<br />';

		// for($i = 0; ; $i++) {
		// 	if (array_sum(array_slice($arr, 0, $i)) > 80) break;
		// }

		// echo 'На ' . ($i - 1) . ' день лыжнику стоит прекратить пробег.';



		$arr = array();

		for($i = 0; ; $i++) {
			if (array_sum(array_slice($arr, 0, $i)) > 80) break;
				for($j = 10; ; $j *= 1.01) {
					if ($j > 80) break;
					array_push($arr, round($j, 2));
				}
		}
			$arr7 = array_sum(array_slice($arr, 0, 7));
			$arrN = array_sum(array_slice($arr, 0, 21));
			echo 'Пробег лыжника за второй день составил: ' . $arr[1] . ' км.' . '<br />';
			echo 'Пробег лыжника за третий день составил: ' . $arr[2] . ' км.' . '<br />';
			echo 'Пробег лыжника за десятый день составил: ' . $arr[9] . ' км.' . '<br />';
			echo 'Пробег лыжника за семь дней составил: ' . $arr7 . ' км.' . '<br />';
			echo 'Пробег лыжника за двадцать один день составил: ' . $arrN . ' км.' . '<br />';
			echo 'На ' . ($i - 1) . ' день лыжнику стоит прекратить пробег.';
		
	?>
</body>
</html>