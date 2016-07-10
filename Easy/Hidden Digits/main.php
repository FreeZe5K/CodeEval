<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $digits = '';
    $key    = [ 
                'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4,
                'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9 
              ];

    foreach( str_split( $line ) as $char )
        $digits .= ( isset( $key[ $char ]  ) ? $key[ $char ] : ( is_numeric( $char ) ? $char : '' ) );

    echo ( ( '' == $digits ) ? 'NONE' : $digits ) . "\n";
}

?>