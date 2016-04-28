<?php

$file   = fopen( $argv[ 1 ], 'r' );
$map    = array( 
    'zero'  => 0,
    'one'   => 1,
    'two'   => 2,
    'three' => 3,
    'four'  => 4,
    'five'  => 5,
    'six'   => 6,
    'seven' => 7,
    'eight' => 8,
    'nine'  => 9
);

while( false !== ( $line = fgets( $file ) ) )
{
    foreach( explode( ';', trim( $line ) ) as $number )
        echo $map[ $number ];
    
    echo "\n";
}

?>