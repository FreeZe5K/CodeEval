<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $words      = explode( ' ', trim( $line ) );
    $letters    = array( );
    $longest    = '';
    $longestlen = 0;
    
    foreach( $words as $word )
    {
        if( strlen( $word ) <= strlen( $longest ) )
            continue;
        
        $longest = $word;
    }
    
    $longestlen = strlen( $longest );
    
    for( $index = 0; $index < $longestlen; ++$index )
    {
        if( $index > 0 )
            echo ' ';
        
        echo str_repeat( '*', $index ) . $longest[ $index ];
    }
    
    echo "\n";
}

?>