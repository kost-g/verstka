<?php
header("Content-Type: text/html; charset=utf-8");

$myage = 37;
$myname = "Bill";

echo "a: [" . (20>9) . "]<br>";
echo "b: [" . (TRUE===1) . "]<br>";
echo "c: [" . TRUE . "]<br>";
echo "d: [" . FALSE . "]<br>";
echo "e: " . 73 . "<br>";
echo "f: " . $myage . "<br>";
echo "g: " . $myname . "<br>";
echo "<h1 color=red>Jack</h1>" ;
$summ = 3*4;
echo "<h1>$summ</h1>	" ;

$x = "1000";
$y = "+1000";
if($x!=$y) echo "1<br>";
if($x!==$y) echo "7<br>";

$z = 1;
$w = 0;

echo ($z AND $w) . "<br>";
echo ($z or $w) . "<br>";
echo ($z XOR $w) . "<br>";
echo !$w . "<br>";

$fuel = 0.5;
echo $fuel <= 1 ? "Fuel ehough" . "<br>": "Fuel unnecessary". "<br>";

$distance = 220;
$covered_distance=70;
$distance = $distance>=$covered_distance ? $distance:$covered_distance;
echo $distance . "<br>";

$j=3;
while ($j> -3) {
	$j--;
	echo ($j/3) . "<br>";
	if ($j == 0) continue;
}
print "Hello world <br>";
print ("Hi <br>");
// phpinfo();
echo strrev("lol wolleH");
echo "<br>";
echo str_repeat("Hello <br>", 3);
echo strtoupper("l'olik<br>");
echo strtolower("Hello Peace UnIt <br>");
echo ucfirst("proof line matter <br>");

/*Использование массивов*/

$names = fix_names("PETEr", "BolL", "harry");
echo $names[0] . ", " . $names[1] . ", " . $names[2] . ". <br>";
function fix_names($n1, $n2, $n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return array($n1, $n2, $n3);
}
 ?>

 <?php
/*Передача значений по ссылке*/ 
$a1 = "Jones";
$a2 = "pederson";
$a3 = "MATTISON";
echo $a1 . ", " . $a2 . ", " . $a3 . ". <br>";
fix_sernames($a1, $a2, $a3);
echo $a1 . ", " . $a2 . ", " . $a3 . ". <br>";
function fix_sernames(&$n1, &$n2, &$n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));	
}
 ?>

<?php
$object = new User;
print_r($object); echo "<br>";
$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo "<br>";
$object->save_user();
class User
{
public $name, $password;
function save_user()
{
echo "Place for password <br>";
}
}
?>

<?php
Translate::lookup();
class Translate
{
const ENGLISH = 0;
const SPANISH = 1;
const FRENCH = 2;
const GERMAN = 3;
// ...
Static function lookup()
{
echo self::SPANISH . "<br>";
}
}
?>

<?php
$paper[1] = "Copier";
$paper[3] = "Inkjet";
$paper[2] = "Laser";
$paper[0] = "Photo";
sort($paper, SORT_STRING);
for ($j = 0 ; $j < 4 ; ++$j)
echo "$j: $paper[$j]<br>";
?>

<?php
echo"<br>";
$paper = array("Copier & Multipurpose", "Inkjet Printer", "Laser Printer", "Photographic Paper");
// shuffle($paper);

$i=1;
foreach ($paper as $position) {
	echo "$i: $position <br>";
	++$i;
}
?>

<?php
echo "<br>";
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
foreach ($paper as $key => $value)
echo "$key: $value<br>";
?>

<?php
echo "<br>";
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
while (list($item, $description) = each($paper))
echo "$item: $description<br>";
?>

<?php
$products = array(
'paper' => array(
'copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper"),
'pens' => array(
'ball' => "Ball Point",
'hilite' => "Highlighters",
'marker' => "Markers"),
'misc' => array(
'tape' => "Sticky Tape",
'glue' => "Adhesives",
'clips' => "Paperclips"
)
);
echo "<pre>";
foreach ($products as $section => $items)
foreach ($items as $key => $value)
echo "$section:\t$key\t($value)<br>";
echo "</pre>";
echo $products['misc']['glue'] ."<br>";
echo (is_array($products)) ? "It is array" : "It isn't array";
echo "<br>";
echo (is_array($prod)) ? "It is array" : "It isn't array";
echo "<br>";
echo count ($products,1);
?>

<?php
$temp = explode(' ', "Hello my little daughter");
print_r($temp);
?>

<?php

echo "<br>";
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
extract($paper, EXTR_PREFIX_ALL, 'ex');
echo $ex_photo;
echo "<br>";

printf("Привет %b", 3);
echo "<br>";
printf("<span color='#%X%X%X'>Мопед</span>", 65, 127, 245);
echo "<br>";
printf("<span color='#417FF5'>Кастет</span>");
echo "<br>";
printf("<span color='#%X%X%X'>Валет</span>", $r-20, $g-20, $b-20);
echo "<br>";
printf("Результат: $%.3f", 123.42 / 12);
echo "<br>";
echo "<pre>";
echo "<br>";
printf("Результат равен $%15f\n", 123.42 / 12);
$h = 'Rasmus';
printf("[%'#12s]\n\n", $h);
$d = 'Rasmus Lerdorf';
printf("[%12.10s]\n", $d);
printf("[%-12.12s]\n", $d);
printf("[%-'@12.10s]\n", $d);
echo mktime(0, 0, 0, 1, 1, 1970);

?>
<?php // testfile.php
$fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");
$text = <<<_END
Строка 1
Строка 2
Строка 3
_END;
fwrite($fh, $text) or die("Сбой записи файла");
fclose($fh);
echo "Файл 'testfile.txt' записан успешно ";
?>

<?php
echo file_get_contents("http://zasorynet.ru");
?>