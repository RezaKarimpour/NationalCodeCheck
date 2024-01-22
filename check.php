<?php

// title : اعتبار سنجی کد ملی 
// Developer : reza karimpour
// github: https://github.com/RezaKarimpour
// youTube: https://youtube.com/@root_one
// telegram : t.me/rootCodes

function NnationalCodeCheck($nationalCode)
{

    $code = str_split($nationalCode);
    $sum = 0;

    if (COUNT($code) == 10 && $nationalCode != '0000000000' ) {

        for ($i = 0; $i < count($code); $i++) {
            $sum += $code[$i] * (10 - $i);
        }

        $check = 11 - ($sum % 11);

        if ($check == 11 || $check == 10) {
            return true;
        }
    } else {
        return false;
    }
}

if (NnationalCodeCheck('0000000011')) {
    echo "کد ملی صحیح است";
} else {
    echo "کد ملی اشتباه وارد شده !";
}
?>
