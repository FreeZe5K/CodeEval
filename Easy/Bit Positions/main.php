<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $positions  = explode( ',', $line );
    $bits       = decbin( $positions[ 0 ] );
    $bit_left   = $bits[ strlen( $bits ) - $positions[ 1 ] ];
    $bit_right  = $bits[ strlen( $bits ) - $positions[ 2 ] ];

    echo $bit_left == $bit_right ? "true\n" : "false\n";
}

?>