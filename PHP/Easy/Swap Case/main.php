<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo strtolower( $line ) ^ strtoupper( $line ) ^ $line;

?>