<?php

    function contalpha($n)
    {
        $num = 65;

        for ($i = 0; $i < $n; $i++)
        {
              
            for ($j = 0; $j <= $i; $j++ )
            {
                $ch = chr($num);
                echo $ch." ";
                $num = $num + 1;
            }
            echo "<br>"; 
        }
    }
        $n = 3;
        contalpha($n);
      
?>