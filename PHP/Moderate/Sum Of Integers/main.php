<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $number_list    = array_map( 'intval', explode( ',', trim( $line ) ) );
    $sum            = $number_list[ 0 ];
    $last           = 0;

    foreach( $number_list as $number )
    {
        if( $sum < $number )
            $sum = $number;

        if( $sum < ( $last + $number ) )
            $sum = $last + $number;

        $last = ( ( 0 < ( $last + $number ) ) ? ( $last + $number ) : 0 );
    }

    echo $sum . "\n";
}

?>