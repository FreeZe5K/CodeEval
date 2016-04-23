<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    preg_match( '/\((.+), (.+)\) \((.+), (.+)\)/', $line, $points );
    
    $x = ( $points[ 1 ] > $points[ 3 ] ) ? $points[ 1 ] - $points[ 3 ] : $points[ 3 ] - $points[ 1 ];
    $y = ( $points[ 2 ] > $points[ 4 ] ) ? $points[ 2 ] - $points[ 4 ] : $points[ 4 ] - $points[ 2 ];
    
    echo sqrt( ( $x * $x ) + ( $y * $y ) ) . "\n";
}

?>