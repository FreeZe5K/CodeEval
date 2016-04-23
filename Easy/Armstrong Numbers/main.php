<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $number = trim( $line );
    $digits = str_split( $number );
    $sum    = 0;
    
    foreach( $digits as $digit )
        $sum += pow( $digit, strlen( $number ) );
    
    echo ( $number == $sum ? 'True' : 'False' ) . "\n";
}

?>