<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $ele, $count ) = explode( ';', trim( $line ) );
    
    $count  = trim( $count );
    $ele    = explode( ',', trim( $ele ) );
    $rev    = array( );
    $cycles = ceil( count( $ele ) / $count );
    
    for( $index = 0; $index < $cycles; $index++ )
    {
        $slice = array_slice( $ele, $index * $count, $count );
        
        if( count( $ele ) >= $count + ( $index * $count ) )
            $slice = array_reverse( $slice );
        
        $rev = array_merge( $rev, $slice );
    }
    
    echo join( ',', $rev ) . "\n";
}

?>