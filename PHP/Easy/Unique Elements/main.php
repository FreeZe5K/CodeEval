<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo implode( ',', array_unique( explode( ',', trim( $line ) ) ) ) . "\n";

?>