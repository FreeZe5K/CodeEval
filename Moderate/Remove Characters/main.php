<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $parts = explode( ',', trim( $line ) );

    foreach( str_split( trim( $parts[ 1 ] ) ) as $character )
        $parts[ 0 ] = str_replace( $character, '', $parts[ 0 ] );

    echo $parts[ 0 ] . "\n";
}

?>