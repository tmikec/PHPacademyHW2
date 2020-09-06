<?php

$name = 'tomislav';
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$nameArr = str_split($name);
$reverseNameArr = array_reverse($nameArr);
$alphabetArr = explode(',', $alphabet);

for ($i=0; $i<count($nameArr); $i++)
{
    for ($j=0; $j<count($alphabetArr); $j++)
    {
        //Bold, underline
        if($alphabetArr[$j] === $nameArr[$i] && $alphabetArr[$j] === $reverseNameArr[$i])
        {
            echo "<b>","<u>", $alphabetArr[$j],"</u>","</b>";
        }
        //Bold
        elseif($alphabetArr[$j] === $nameArr[$i])
        {
            echo "<b>", $alphabetArr[$j], "</b>";
        }
        else
        {
            echo $alphabetArr[$j];
        }
    }
    echo "<br>";
}