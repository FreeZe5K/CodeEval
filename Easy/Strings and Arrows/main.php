<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $count = 0;
    
    foreach( array( '>>-->', '<--<<' ) as $arrow )
    {
        $pos = -1;
        
        while( false !== ( $pos = strpos( $line, $arrow, $pos + 1 ) ) )
            $count++;
    }
    
    echo $count . "\n";
}

?>