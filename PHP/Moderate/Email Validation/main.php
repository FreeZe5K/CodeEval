<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
    echo ( preg_match( '/^([^ @"<>]+|".*")@[a-z0-9.]+.[a-z]+$/', strtolower( trim( $line ) ) ) ? 'true' : 'false' ) . "\n";

?>