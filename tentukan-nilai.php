<?php
function tentukan_nilai($number)
{
    if($number >= 85 && $number <= 100) {
        return $number . " sangat baik" . "<br>";
    } else if ($number >= 70 && $number <= 85) {
        return $number . "Baik" . "<br>";
    } else if ($number >= 60 && $number <= 70) {
        return $number . "Cukup" . "<br>";
    } else {
        return $number . "Kurang";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
