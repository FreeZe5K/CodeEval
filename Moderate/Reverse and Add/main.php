<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $steps = 0;

    while( $line != strrev( $line ) )
    {
        $line += strrev( $line );
        $steps++;
    }

    echo $steps . ' ' . $line . "\n";
}

?>