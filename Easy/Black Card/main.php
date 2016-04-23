<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $players, $number ) = explode( '|', $line );
    
    $players    = explode( ' ', trim( $players ) );
    $number     = ( (int)trim( $number ) ) - 1;
    
    while( count( $players ) > 1 )
        array_splice( $players, $number % count( $players ), 1 );
    
    echo $players[ 0 ] . "\n";
}

?>