<?php
function exam($x){
    if($x>=70 && $x<100){
        echo "A";
    }
    elseif($x>=63 && $x<70){
        echo "B";
    }
    elseif($x>=51 && $x<63){
        echo "C";
    }
    elseif($x>=44 && $x<51){
        echo "D";
    }
    elseif($x>=0 && $x<44){
        echo "F";
    }
    else{
    echo "Invalid Entry";

}
}
echo exam(33);
?>