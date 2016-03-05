<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $num = 0;
    $tar = (int)trim( $line );
    
    while( $tar > 0 )
    {
        if( $tar % 2 > 0 )
            $num++;
        
        $tar = floor( $tar / 2 );
    }
    
    echo $num % 3 . "\n";
}

?>