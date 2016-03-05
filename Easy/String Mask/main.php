<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $str, $mask ) = explode( ' ', trim( $line ) );
    $len = strlen( $mask );
    
    for( $index = 0; $index < $len; $index++ )
        echo chr( ( ord( $str[ $index ] ) - 65 ) % 32 + 97 - ( 97 - 65 ) * $mask[ $index ] );
    
    echo "\n";
}

?>