<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $str, $char ) = explode( ',', trim( $line ) );
    $pos                = strrpos( $str, $char );
    
    echo ( ( $pos !== false ) ? $pos : '-1' ) . "\n";
}

?>