<?php   
    function pyramid ($number=9){
        for($loop=$number; $loop>=1; $loop--){
                printf("%d",$loop);
            }
        }
        for($row=5; $row>=1; $row--){
                pyramid($row);
                echo"<br>";
         }
?>