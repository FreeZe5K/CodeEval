<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $numbers    = explode( ' ', trim( $line ) );
    $max        = count( $numbers ) - 1;
    $diffs      = array( );
    $jolly      = true;
    
    for( $index = 1; $index < $max; $index++ )
    {
        $diff = abs( $numbers[ $index ] - $numbers[ $index + 1 ] );
        
        if( $diff < 1 || $diff > $max || $diffs[ $diff ] )
        {
            $jolly = false;
            break;
        }
        
        $diffs[ $diff ] = true;
    }
    
    echo ( $jolly ? 'Jolly' : 'Not jolly' ) . "\n";
}

?>