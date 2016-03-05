<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $str, $nums ) = explode( '|', trim( $line ) );
    $numarr             = explode( ' ', trim( $nums ) );
    $out                = array( );
    
    foreach( $numarr as $num )
        $out[ ] = substr( $str, intval( $num ) - 1, 1 );
    
    echo implode( '', $out ) . "\n";
}

?>