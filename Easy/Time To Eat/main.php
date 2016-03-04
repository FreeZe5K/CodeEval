<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $ts = explode( ' ', trim( $line ) );
    rsort( $ts );
    echo implode( ' ', $ts ) . "\n";
}

?>