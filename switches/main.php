<?php

    //switch = replacement to using may elseif statements
    //         more efficient, less code to write

    $grade = "Pizza";

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You  failed";
            break;
        default:
            echo "${grade} is not valid";

    }


?>