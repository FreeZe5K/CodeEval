<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo sizeof( array_unique( str_split( rtrim( $line ) ) ) ) . "\n";

?>