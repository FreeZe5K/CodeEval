<?php

$file   = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo implode( ' ', array_reverse( explode( ' ', trim( $line ) ) ) ) . "\n";

?>