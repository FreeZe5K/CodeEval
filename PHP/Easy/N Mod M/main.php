<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $n, $m ) = explode( ',', trim( $line ) );

    while( $n >= $m )
        $n -= $m;

    echo $n . "\n";
}

?>