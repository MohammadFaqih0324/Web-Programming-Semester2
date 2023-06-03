<html>
<head>
    <title>Contoh iF Majemuk</title>
</head>
<?php
    $nilai = 90;
    if(($nilai>=0)&&($nilai<50))
    {$grade ="E";}
    elseif(($nilai>=50)&&($nilai<60))
    {$grade ="D";}
    elseif(($nilai>=60)&&($nilai<75))
    {$garde ="C";}
    elseif(($nilai>=75)&&($nilai<85))
    {$grade ="B";}
    elseif(($nilai>=85)&&($nilai<100))
    {$grade ="A";}
    else
    {$grade ="Nilai anda diluar jangkauan";}
    echo "Nilai Anda : $nilai, diconversikan menjadi $grade";
?>
</body>
</html>