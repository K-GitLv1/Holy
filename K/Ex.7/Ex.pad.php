<?php
    $nextWeek = time ( ) + (7 * 24 * 60 * 60);
    echo "Now: ". date ("Y-m-d") ."<br>";
    echo "Next Week: ". date ("Y-m-d", $nextWeek) ."<br>";
    echo "Next Week: ". date ("Y-m-d", strtotime("+1 week")) ."<br>";
?>