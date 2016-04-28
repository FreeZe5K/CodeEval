<?php

for( $x = 1; $x <= 12; $x++ )
{
    echo $x;
    
    for( $y = 2; $y <= 12; $y++ )
        echo sprintf( '%4u', $x * $y );
    
    echo "\n";
}

?>