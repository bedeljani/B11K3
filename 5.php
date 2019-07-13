<?php
function segitigaSiku($n)
{
    if ($n > 0 && $n < 10)
    {
        $atas = $n * 25;
        $bilPrim = array();
        $counter = 0;
        for ($i = 2; $i <= $atas; $i++) {
            $p = 0;
            for ($j = 1; $j <= $i ; $j++) 
            {
                if ($i % $j == 0)
                {
                    $p += 1;
                }
            }
            if ($p <= 2)
            {
                array_push($bilPrim, $i);
            }
        }
        for ($i = 0; $i <= $n; $i++) 
        {
            for ($j = 1; $j <= $i ; $j++) 
            {
                if ($i <= 1) 
                {
                    echo $bilPrim[$i-1];
                }
                else if ($i > 0)
                {
                    if ($j < 1)
                    {
                        echo $bilPrim[$i-2]." ";
                    }
                    else if ($j > 0)
                    {
                        echo $bilPrim[$counter]." ";
                    }
                }
                $counter++;
            }
            echo "\n";
        }
    } else {
        echo "Ketentuan: 0 < Alas/Tinggi < 10";
    }
}
segitigaSiku(5);
