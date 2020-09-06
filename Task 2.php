<?php

$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabetArr = explode(',', $alphabet);
$x = count($alphabetArr);
$m = 12;

for ($i = 0; $i < $x; $i++)
{
    for ($j = 0; $j < $x; $j++)
    {
        if ($j + $i < $x)
        {
            if ($j + $i === $m)
            {
                echo "<b>", $alphabetArr[$j + $i], "</b>";
            }
            elseif($j + $m === $i)
            {
                echo "<b>", $alphabetArr[$j + $i], "</b>";
            }
            else
            {
                echo $alphabetArr[$j + $i];
            }
        }
        else
        {
            $lettersToEnd = abs($x - $j - $i);

            if ($j + $m === $i)
            {
                echo "<b>", $alphabetArr[$lettersToEnd], "</b>";
            }
            else
            {
                echo $alphabetArr[$lettersToEnd];
            }
        }
    }
    echo "<br>";
}