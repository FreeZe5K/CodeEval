<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $words  = explode( ' ', trim( $line ) );
    $lens   = array_map( 'strlen', $words );
    $word   = $words[ array_search( max( $lens ), $lens, true ) ];
    
    unset( $words, $lens );
    
    foreach( str_split( $word ) as $index => $char )
        echo str_repeat( '*', $index ), $char, ' ';
    
    echo "\n";
}

?>