<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $count = array_count_values( str_split( $line ) );
    
    foreach( $count as $char => $num )
    {
        if( 1 == $num )
        {
            echo $char . "\n";
            break;
        }
    }
}

?>