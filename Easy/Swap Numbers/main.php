<?php

$file = fopen( $argv[ 1 ], 'r' );

while( $line = preg_replace( '/(\d+)([^\d]+)(\d+)/', '$3$2$1', fgets( $file ) ) )
    echo $line;

?>