<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo trim( str_replace( '  ', ' ', preg_replace( '/[^a-z]+/', ' ', strtolower( trim( $line ) ) ) ) ) . "\n";

?>