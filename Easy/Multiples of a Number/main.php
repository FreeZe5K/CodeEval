<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $x, $n )  = explode( ',', trim( $line ) );
    $r              = $n;

    while( $r < $x )
        $r += $n;

    echo $r . "\n";
}

?>