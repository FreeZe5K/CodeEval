<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $col        = (int)trim( $line );
    $colname    = '';

    while( $col > 0 )
    {
        $col        -= 1;
        $colname    = chr( 65 + ( $col % 26 ) ) . $colname;
        $col        = floor( $col / 26 );
    }

    echo $colname . "\n";
}

?>