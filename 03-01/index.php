<?php
$height=10;
$charater="*";
function printcharacterOnline($length){
    for($j=1; $j<=$length; $j++){
        echo "*";
    }
}
for ($i=1; $i<=$height; $i++){
    printcharacterOnline($i);
    echo "<br />";    
}

?>