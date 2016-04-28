<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $numbers    = explode( ',', trim( $line ) );
    $maximum    = 'None';

    foreach( array_count_values( $numbers ) as $number => $count )
    {
        if( $count > count( $numbers ) / 2 )
        {
            $maximum = $number;
            break;
        }
    }

    echo $maximum . "\n";
}

?>