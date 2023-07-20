<?php   
    function pyramid ($number=9){
        for($loop1=$number; $loop1>=1; $loop1--){
            for($loop2=1; $loop2<=$loop1; $loop2++){
                printf("%d",$loop1);
            }
            echo"<br>";

        }
    }
            pyramid(5);
?>