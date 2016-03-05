<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $n, $m )  = explode( ',', trim( $line ) );
    $alive          = $dead = array( );
    $target         = 0;
    
    for( $index = 0; $index < $n; $index++ )
        $alive[ ] = $index;
    
    while( !empty( $alive ) )
    {
        $target     = ( $target + $m - 1 ) % count( $alive );
        $dead[ ]    = $alive[ $target ];
        
        array_splice( $alive, $target, 1 );
    }
    
    echo join( ' ', $dead ) . "\n";
}

?>