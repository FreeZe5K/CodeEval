<?php

$file   = fopen( $argv[ 1 ], 'r' );
$uc     = false;

while( false !== ( $char = fgetc( $file ) ) )
{
    $char = strtolower( $char );

    echo ( 'a' > $char || 'z' < $char ) ? $char : ( ( $uc = !$uc ) ? strtoupper( $char ) : $char );

    if( 10 === ord( $char ) )
        $uc = false;
}

?>