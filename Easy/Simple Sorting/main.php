<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $numbers = explode( ' ', trim( $line ) );
    
    sort( $numbers );
    echo join( ' ', $numbers ) . "\n";
}

?>