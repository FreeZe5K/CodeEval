<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo substr_count( decbin( trim( $line ) ), '1' ) . "\n";

?>