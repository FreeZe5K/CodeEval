<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $strings = explode( ',', trim( $line ) );
    echo ( ( 0 === substr_compare( $strings[ 0 ], $strings[ 1 ], -strlen( $strings[ 1 ] ) ) ) ? 1 : 0 ) . "\n";
}

?>