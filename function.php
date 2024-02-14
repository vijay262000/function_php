<?php
echo "welcome to php in function<br>";

function processmarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}
$rohanDas = [78,90,95,78,85,87];
$sumMarks= processmarks($rohanDas);

$vijay = [97,98,78,87,93,98];
$sumMarksvijay = processmarks($vijay);

echo "Total marks of rohan is out of 600 is $sumMarks<br>";
echo "Total marks of Vijay is out of 600 is $sumMarksvijay<br>";

?>
