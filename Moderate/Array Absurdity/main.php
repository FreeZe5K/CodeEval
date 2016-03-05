<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $amt, $nums ) = explode( ';', trim( $line ) );
    $flips              = array_flip( array_count_values( explode( ',', $nums ) ) );
    echo $flips[ 2 ] . "\n";
}

?>