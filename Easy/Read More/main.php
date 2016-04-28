<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    if( 55 >= strlen( trim( $line ) ) )
        echo $line;
    else
    {
        $snippet = substr( $line, 0, 40 );

        if( false !== strpos( $snippet, ' ' ) )
            $snippet = trim( substr( $snippet, 0, strrpos( $snippet, ' ' ) ) );

        echo $snippet . '... <Read More>' . "\n";
    }
}

?>