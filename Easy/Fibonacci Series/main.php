<?php

function fib_ser( $fib_num, $ser_one = 1, $ser_two = 1 )
{
    if( 0 == $fib_num )
        return 0;

    if( 1 == $fib_num || 2 == $fib_num )
        return 1;
    
    if( 3 == $fib_num )
        return $ser_one + $ser_two;

    return fib_ser( $fib_num - 1, $ser_two, $ser_one + $ser_two );
}

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo fib_ser( $line ) . "\n";

?>