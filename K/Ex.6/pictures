<?php
    echo "---------------------------------------------------------------------------<br>","Ex. 5.3 ▼","<br>","<br>";
    $today = date("d/m/y");//5.3
    echo $today;
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.4 ▼","<br>","<br>";
    function multiplication($number, $start, $end) {
         line_(40, "*");
         echo "Multiplication of $number: Starting at $start until $end <br>";
         line_(40, "*");
         for ($i = $start; $i <= $end; $i++) {
             printf("%d x %d = %d <br>", $number, $i, $number * $i);
         }
         line_(40, "*");
     }

     function line_($how_much, $symbol) {
         for ($i = 1; $i <= $how_much; $i++) {
             echo $symbol;
         }
         echo "<br>";
     }

     multiplication(12, 1, 5);
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.5 ▼","<br>","<br>";
    function pyramidNumber($number = 7) {
        for ($loop1 = $number; $loop1 >= 1; $loop1--) {
            for ($loop2 = 1; $loop2 <= $loop1; $loop2++) {
                echo $loop2 . " ";
            }
            echo "<br>";
        }
    }
    pyramidNumber();
    pyramidNumber(4);
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.6 ▼","<br>";
    echo "Ex. 5.6.1 ▼","<br>","<br>";
    pyramidNumber();
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.6.2 ▼","<br>","<br>";
    pyramidNumber(4);
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.7 ▼","<br>";
    echo "Ex. 5.7.1 ▼","<br>","<br>";
    function foo ($var) {
        $var++;
    }
    $a=5;
    foo ($a);
    echo $a;
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.7.2 ▼","<br>","<br>";
    function foo2 (&$var) {
        $var++;
    }
    $a=5;
    foo ($a);
    echo $a;
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.8 ▼","<br>","<br>";
    function calcSalesTax($price, $tax=.0679) {
        $total = $price + ($price * $tax);
        return $total;
    }
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.9 ▼","<br>","<br>";
    function calcSalesTax2 ($price, $tax=.0675) {
     return $price + ($price * $tax);
    }
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.10 ▼","<br>","<br>";
    echo calcSalesTax(999, $tax=.0675);
// หรือใชตัวแปรรับผลการ return ของฟงกชัน ดังนี้
// $value = calcSalesTax (500, $tax=.0675); แลวนําตัวแปร $value ไปแสดงผล

?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.11 ▼","<br>","<br>";
    $value = calcSalesTax2 (500, $tax=.0675);
    echo $value;
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.12 ▼","<br>","<br>";
    function retrieveUserProfile ( ) {
        $user [ ] = "Jiraphat Nurach";
        $user [ ] = "66309010034@udontech.ac.th";
        $user [ ] = "Thai";
        return $user;
        }
        list ($name, $email, $language) = retrieveUserProfile( );
        echo "Name: $name, email: $email, language: $language";
?>

<br><br>---------------------------------------------------------------------------<br><br>

<?php
    echo "Ex. 5.13 ▼","<br>","<br>";
    function factorial ($n) {
    if ($n<1)
        return 1;
    else
    return $n*factorial($n-1);
    }
    echo factorial(4);
?>

<br><br>---------------------------------------------------------------------------<br><br>
<?php
    echo "Ex. 5.14 ▼","<br>","<br>";
function totalnum ($n){
        if($n <=1){
            return 1;
        }
        $total=totalnum($n-1)+$n;
        return $total;
    }
    echo totalnum(20);
    ?>
<br><br>---------------------------------------------------------------------------<br><br>

<?php
     echo "Ex. 5.15 ▼","<br>","<br>";   
echo "parinya<br>";
?>

<br><br>---------------------------------------------------------------------------<br><br>
<?php
    echo "Ex. 5.16 ▼","<br>";
    echo "Ex. 5.16.1 ▼","<br>","<br>";
include ("lib.php");
    include ("lib.php");
    include ("lib.php");
    ?>
<br><br>---------------------------------------------------------------------------<br><br>
<?php
    echo "Ex. 5.16.2 ▼","<br>","<br>";
include_once ("lib.php");
    include_once ("lib.php");
    include_once ("lib.php");
    ?>
<br><br>---------------------------------------------------------------------------<br><br>
<?php
    echo "Ex. 5.17 ▼","<br>","<br>";
    include ("lib.php");
    echo "ยังสามารถแสดงผลบรรทัดนี้ได้<br>";
    ?>
<br><br>---------------------------------------------------------------------------<br><br>
<?php
    echo "Ex. 5.18 ▼","<br>","<br>";
    require ("lib.php");
    echo "ยังสามารถแสดงผลบรรทัดนี้ได้<br>";
?>    