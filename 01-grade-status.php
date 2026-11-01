<?php
$name = "ali";
$score = 17;
$status ="";
if ($score <= 20 && $score >=18){
    $status = "عالی";
}else if ($score < 18 && $score >= 15){
    $status = "خوب";
}else if ($score < 15 && $score >= 10){
    $status = "قبول";
}else{
    $status = "مردود";
}
echo "نام : $name <br> نمره: $score <br> وضعیت: وضعیت $name $status است.";
?>