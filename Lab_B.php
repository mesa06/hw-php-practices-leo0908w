<?php

    // Cn取m=n!/(n-m)!m!
    // C5取2=5!/(5-2)!2!=5*4*3*2*1/3*2*1*2*1=10

$a = [1, 2, 3, 4];
$total = 0;
$stopAt = 2;

for ($i = 0; $i <= $stopAt; $i++) {
    $total += $a[$i];
    echo $total;
    
}


// http://math1.ck.tp.edu.tw/%E9%99%B3%E5%98%AF%E8%99%8E/%E5%B0%8F%E8%99%8E/99%E8%AA%B2%E7%B6%B1/%E7%AC%AC%E4%BA%8C%E5%86%8A/%E9%87%8D%E9%BB%9E/99%E8%AA%B2%E7%B6%B1%E6%95%99%E5%AD%B8%E9%87%8D%E9%BB%9E%E6%95%B4%E7%90%862-2-2%E6%8E%92%E5%88%97%E7%B5%84%E5%90%88-%E6%8E%92%E5%88%97%E8%88%87%E7%B5%84%E5%90%88.pdf
?>