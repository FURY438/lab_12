<?php
echo '<h3>Москалик Василь, СП-41 (17.11.2022)</h3>';

$iW="10";
$iH="5";
$a=array(1,3,5,7,9,11,13,15,17,19);
$b=array(2,6,10,14,18,22,26,30,34,38);
$c=array(5,3,1,7,4,9,5,8,15,10);
$x=array(3,7,10,5,6,9,6,7,9,5);

function cp($a,$b,$c){return $a+$b+$c/3;}
function y($a,$b,$c,$x){
    return tan($a)/sqrt($b)/($x+$c)-sin($c)+cp($a,$b,$c);
}

$divWidth="75";$divHeight="45";
for($i=0;$i<10;$i++) {
    $y1=y($a[$i],$b[$i],$c[$i],$x[$i]);

    echo "<div style='width:$divWidth;height:$divHeight;background: coral; margin: 5px'>
     $y1;
    <br>
</div>";
    $divWidth=$divWidth+$iW;
    $divHeight=$divHeight+$iH;
}

$divWidth="75";$divHeight="45";$i=0;
while ($i<10) {
    $y1 = y($a[$i], $b[$i], $c[$i], $x[$i]);

    echo "<div style='width:$divWidth;height:$divHeight;background: chartreuse; margin: 5px'>
     $y1;
    <br>
</div>";
    $divWidth = $divWidth + $iW;
    $divHeight = $divHeight + $iH;
    $i++;
}
$divWidth="75";$divHeight="45";$i=0;
do {
    $y1 = y($a[$i], $b[$i], $c[$i], $x[$i]);

    echo "<div style='width:$divWidth;height:$divHeight;background: crimson; margin: 5px'>
     $y1;
    <br>
</div>";
    $divWidth = $divWidth + $iW;
    $divHeight = $divHeight + $iH;
    $i++;
}while ($i<10)

?>