<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $expressions    = array_reverse( explode( ' ', trim( $line ) ) );
    $values         = array( );
    
    foreach( $expressions as $expression )
    {
        if( '+' == $expression )
        {
            $values[] = array_pop( $values ) + array_pop( $values );
            continue;
        }
        
        if( '*' == $expression )
        {
            $values[] = array_pop( $values ) * array_pop( $values );
            continue;
        }
        
        if( '/' == $expression )
        {
            $values[] = array_pop( $values ) / array_pop( $values );
            continue;
        }
        
        $values[] = $expression;
    }
    
    echo $values[ 0 ] . "\n";
}

?>