<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $elements, $swaps ) = explode( ':', trim( $line ) );
    
    $elements   = explode( ' ', trim( $elements ) );
    $swaps      = explode( ',', trim( $swaps ) );
    
    foreach( $swaps as $swap )
    {
        list( $l, $r )                              = explode( '-', trim( $swap ) );
        list( $elements[ $l ], $elements[ $r ] )    = array( $elements[ $r ], $elements[ $l ] );
    }

    echo join( ' ', $elements ) . "\n";
}

?>