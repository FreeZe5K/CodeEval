<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $number = strrev( str_replace( ' ', '', trim( $line ) ) );
    $sum    = 0;
    
    for( $index = 0; $index < strlen( $number ); $index += 2 )
        $sum += $number[ $index ];
    
    for( $index = 1; $index < strlen( $number ); $index += 2)
    {
        $double = $number[ $index ] * 2;
        $sum    += ( ( $double > 9 ) ? array_sum( str_split( $double ) ) : $double );
    }
    
    echo ( 0 === $sum % 10 ? 1 : 0 ) . "\n";
}

?>