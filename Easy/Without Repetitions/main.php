<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo preg_replace( '/(.)\\1+/', '$1', trim( $line ) ) . "\n";

?>