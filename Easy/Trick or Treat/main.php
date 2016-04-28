<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $data   = array( );
    
    preg_match( '/Vampires: (\d+), Zombies: (\d+), Witches: (\d+), Houses: (\d+)/', $line, $data );
    
    $candy  = ( $data[ 1 ] * 3 + $data[ 2 ] * 4 + $data[ 3 ] * 5 ) * $data[ 4 ];
    $kids   = $data[ 1 ] + $data[ 2 ] + $data[ 3 ];

    echo floor( $candy / $kids ) . "\n";
}

?>