<?php

$file   = fopen( $argv[ 1 ], 'r' );
$cnt    = $cnt_l = $cnt_u = 0;

while( !feof( $file ) )
{
    $char = fgetc( $file );
    
    if( 10 === ord( $char ) || feof( $file ) )
    {
        printf( "lowercase: %01.2f uppercase: %01.2f\n", $cnt_l * 100 / $cnt, $cnt_u * 100 / $cnt );
        $cnt = $cnt_l = $cnt_u = 0;
        continue;
    }
    
    $cnt++;
    $char === strtolower( $char ) ? $cnt_l++ : $cnt_u++;
}

?>