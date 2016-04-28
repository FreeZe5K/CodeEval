<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $zeros, $limit ) = explode( ' ', $line );
    
    $matches = 0;
    
    for( $index = 1; $index <= $limit; $index += 1 )
        if( $zeros == substr_count( decbin( $index ), 0 ) )
            $matches += 1;
    
    echo $matches . "\n";
}

?>