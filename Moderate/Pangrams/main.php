<?php

$file       = fopen( $argv[ 1 ], 'r' );
$letters    = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' );

while( false !== ( $line = fgets( $file ) ) )
{
    $missing    = array_flip( $letters );
    $chars      = str_split( preg_replace( '/[^a-z]/', '', strtolower( trim( $line ) ) ) );
    
    foreach( $chars as $char )
        if( isset( $missing[ $char ] ) )
            unset( $missing[ $char ] );
    
    if( empty( $missing ) )
        echo "NULL\n";
    else
    {
        $missing = array_keys( $missing );
        sort( $missing );
        echo join( '', $missing ) . "\n";
    }
}

?>