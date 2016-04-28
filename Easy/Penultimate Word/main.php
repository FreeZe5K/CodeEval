<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $words = explode( ' ', trim( $line ) );
    echo $words[ count( $words ) - 2 ] . "\n";
}

?>