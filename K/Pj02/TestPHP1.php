<?php
$a = 10;
$b = 5;
if ($a > $b) {
    echo "a is bigger than b";
}
?>

<br><br>

<?php
$a = 10;
$b = 5;
if ($a > $b) {
    echo "a is bigger than b";
} else {
    echo "a is less than or equal b";
}
?>

<br><br>

<?php
$score = 78;
if ($score >= 80) {
    $grade = "A";
} else if ($score >= 70) {
    $grade = "B";
} else if ($score >= 60) {
    $grade = "C";
} else if ($score >= 50) {
    $grade = "D";
} else {
    $grade = "E";
}
printf("Score is %d: Grade evaluation is %s.", $score, $grade);
?>

<br><br>

<?php
$i = 2;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}
?>

<br><br>

<?php
$score = 78;
switch (true) {
    case ($score >= 80):
        $grade = "A";
        break;
    case ($score >= 70):
        $grade = "B";
        break;
    case ($score >= 60):
        $grade = "C";
        break;
    case ($score >= 50):
        $grade = "D";
        break;
    default:
        $grade = "E";
}
printf("Score is %d: Grade evaluation is %s.", $score, $grade);
?>

<br><br>

<?php
$number = 1;
while ($number <= 5) {
    echo $number;
    $number++;
}
?>

<br><br>

<?php
$number = 0;
do {
    $number++;
    echo $number;
} while ($number < 5);
?>

<br><br>

<?php
for ($kilometers = 1; $kilometers <= 5; $kilometers++) {
    printf("%d Kilometers = %.5f Miles", $kilometers, $kilometers * 0.62140);
    echo "<br>";
}
?>

<br><br>

<?php
for ($kilometers = 1;; $kilometers++) {
    if ($kilometers > 5) {
        break;
    }
    printf("%d Kilometers = %.5f Miles", $kilometers, $kilometers * 0.62140);
    echo "<br>";
}
?>

<br><br>

<?php
$kilometers = 1;
for (;;) {
    if ($kilometers > 5) {
        break;
    }
    printf("%d Kilometers = %.5f Miles", $kilometers, $kilometers * 0.62140);
    echo "<br>";
    $kilometers++;
}
?>

<br><br>

<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    printf("%d ", $value);
}
?>

<br><br>

<?php
$arr = array("one", "two", "three", "four", "stop", "five");
foreach ($arr as $value) {
    if ($value == "stop") {
        break;
    }
    echo "$value ";
}
?>

<br><br>

<?php
$number = 1;
while ($number <= 20) {
    switch ($number) {
        case 5:
            echo "Number = 5 <br>";
            break 1;
        case 10:
            echo "Number = 10 Quitting";
            break 2;
        default:
            break;
    }
    $number++;
}
?>

<br><br>

<?php
$number = 0;
while ($number <= 20) {
    $number++;
    if ($number % 2) {
        continue;
    }
    echo "$number ";
}
?>
