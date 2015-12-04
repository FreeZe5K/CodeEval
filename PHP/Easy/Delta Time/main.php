<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $times = explode( ' ', $line );
    echo date( 'H:i:s', abs( strtotime( $times[ 0 ] ) - strtotime( $times[ 1 ] ) ) ) . "\n";
}

?>