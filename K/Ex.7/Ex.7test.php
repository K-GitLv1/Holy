<body>
    <table border = "1" width = "100%" cellspacing = "0">
        <caption>ตารางคา ASCII ของ A – Z</caption>
<?php
    $a = ord ('A') ;
    $z = ord ('Z') ;
    for ($i = $a; $i <= $z; $i += 5){
        echo "<tr align = center>";
        for ($j = $i ; $j < ($i+5) ; $j++) {
            $ch = chr ($j) ;
            echo "<td bgcolor = #ddd> $ch </td><td> $j </td>";
        }
        echo "</tr>" ;
    }
?>
</table>
</body>